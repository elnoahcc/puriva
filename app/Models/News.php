<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'image',
        'category',
        'is_published',
        'published_at',
        'slug'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
    ];

    // Available categories - you can also move this to a config file
    public const CATEGORIES = [
        'Award' => 'Award',
        'Partnership' => 'Partnership',
        'Research' => 'Research',
        'Innovation' => 'Innovation',
        'General' => 'General',
    ];

    // Auto generate slug from title
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = static::generateUniqueSlug($news->title);
            }
            
            if (empty($news->published_at)) {
                $news->published_at = now();
            }
        });
        
        static::updating(function ($news) {
            // Only update slug if title changed and slug wasn't manually set
            if ($news->isDirty('title') && !$news->isDirty('slug')) {
                $news->slug = static::generateUniqueSlug($news->title, $news->id);
            }
        });

        // Clean up image when deleting
        static::deleting(function ($news) {
            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }
        });
    }

    // Generate unique slug
    protected static function generateUniqueSlug($title, $excludeId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (static::where('slug', $slug)
                    ->when($excludeId, fn($query) => $query->where('id', '!=', $excludeId))
                    ->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                    ->where('published_at', '<=', now());
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('published_at', 'desc');
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeDrafts($query)
    {
        return $query->where('is_published', false);
    }

    // Accessors
    public function getExcerptAttribute($value)
    {
        if ($value) {
            return $value;
        }
        
        // Auto-generate from content, removing HTML tags
        $cleanContent = strip_tags($this->content);
        return Str::limit($cleanContent, 150, '...');
    }

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return null;
        }
        
        return Storage::disk('public')->url($this->image);
    }

    public function getReadingTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $minutes = ceil($wordCount / 200); // Average reading speed
        
        return $minutes . ' min read';
    }

    // Method untuk Filament
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Helper methods
    public function isPublished(): bool
    {
        return $this->is_published && $this->published_at <= now();
    }

    public function isDraft(): bool
    {
        return !$this->is_published;
    }

    public function getCategoryColor(): string
    {
        return match ($this->category) {
            'Award' => 'warning',
            'Partnership' => 'primary',
            'Research' => 'success',
            'Innovation' => 'info',
            'General' => 'gray',
            default => 'gray',
        };
    }
}