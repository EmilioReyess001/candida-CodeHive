<?php

namespace App\Filament\Admin\Resources\Parties\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\ImageEntry;

class PartyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('acronym')
                    ->placeholder('-'),
                ImageEntry::make('logo')
    ->label('Logo')
    ->disk('public')
    ->circular()
    ->height(150)
                    ->placeholder('-'),
                TextEntry::make('color')
                    ->placeholder('-'),
                TextEntry::make('slogan')
                    ->placeholder('-'),
                TextEntry::make('description')
                    ->placeholder('-'),
                TextEntry::make('founded')
                    ->placeholder('-'),
                TextEntry::make('ideology')
                    ->placeholder('-'),
                TextEntry::make('president_name')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
