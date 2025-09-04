<?php

namespace App\Filament\Resources\NewsResource\Pages;

use App\Filament\Resources\NewsResource;
use Filament\Actions;
use Filament\Infolists;
use Filament\Resources\Pages\ViewRecord;
use Filament\Schemas\Schema;

class ViewNews extends ViewRecord
{
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    public function infolist(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Infolists\Components\Section::make('News Details')
                    ->schema([
                        Infolists\Components\Group::make([
                            Infolists\Components\TextEntry::make('title')
                                ->size(Infolists\Components\TextEntry\TextEntrySize::Large)
                                ->weight('bold'),
                            
                            Infolists\Components\TextEntry::make('slug')
                                ->color('gray')
                                ->copyable(),
                        ])->columns(1),

                        Infolists\Components\Group::make([
                            Infolists\Components\TextEntry::make('category')
                                ->badge()
                                ->color(fn (string $state): string => match ($state) {
                                    'Award' => 'warning',
                                    'Partnership' => 'primary',
                                    'Research' => 'success',
                                    'Innovation' => 'info',
                                    'General' => 'gray',
                                    default => 'gray',
                                }),
                            
                            Infolists\Components\IconEntry::make('is_published')
                                ->label('Published')
                                ->boolean()
                                ->trueIcon('heroicon-o-check-circle')
                                ->falseIcon('heroicon-o-x-circle')
                                ->trueColor('success')
                                ->falseColor('danger'),
                        ])->columns(2),

                        Infolists\Components\Group::make([
                            Infolists\Components\TextEntry::make('published_at')
                                ->label('Publication Date')
                                ->dateTime('F j, Y \a\t g:i A'),
                            
                            Infolists\Components\TextEntry::make('created_at')
                                ->label('Created')
                                ->dateTime('F j, Y \a\t g:i A'),
                        ])->columns(2),
                    ]),

                Infolists\Components\Section::make('Content')
                    ->schema([
                        Infolists\Components\ImageEntry::make('image')
                            ->label('Featured Image')
                            ->visible(fn ($record) => $record->image)
                            ->size(300),

                        Infolists\Components\TextEntry::make('excerpt')
                            ->visible(fn ($record) => $record->excerpt)
                            ->prose(),

                        Infolists\Components\TextEntry::make('content')
                            ->html()
                            ->prose()
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}   