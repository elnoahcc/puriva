<?php

namespace App\Filament\Resources\News;

use App\Models\News;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use App\Filament\Resources\News\Pages;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    // Form sekarang menggunakan Schema
    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('title')
                ->label('Judul Berita')
                ->required()
                ->maxLength(255),

    Forms\Components\FileUpload::make('image')
    ->label('Gambar')
    ->image()
    ->disk('public')
    ->directory('news-images')
    ->visibility('public'),



            Forms\Components\RichEditor::make('content')
                ->label('Isi Berita')
                ->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('image')->label('Gambar'),
            Tables\Columns\TextColumn::make('title')->label('Judul')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('created_at')->dateTime('d M Y H:i')->label('Dibuat'),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
