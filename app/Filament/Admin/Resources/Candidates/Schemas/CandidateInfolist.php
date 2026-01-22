<?php

namespace App\Filament\Admin\Resources\Candidates\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
  use Filament\Infolists\Components\ImageEntry;

class CandidateInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('partieId')
                    ->numeric(),
                TextEntry::make('name')
                    ->placeholder('-'),
              

ImageEntry::make('photo')
    ->label('Foto')
    ->disk('public')
    ->circular()
    ->height(150)

                    ->placeholder('-'),
                TextEntry::make('position')
                    ->placeholder('-'),
                TextEntry::make('region')
                    ->placeholder('-'),
                TextEntry::make('age')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('profession')
                    ->placeholder('-'),
                TextEntry::make('education')
                    ->placeholder('-'),
                TextEntry::make('experience')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('biography')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('cv_url')
                    ->placeholder('-'),
                TextEntry::make('plan_gobierno_url')
                    ->placeholder('-'),
                TextEntry::make('audio_url')
                    ->placeholder('-'),
                TextEntry::make('video_url')
                    ->placeholder('-'),
                IconEntry::make('is_promoted')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
