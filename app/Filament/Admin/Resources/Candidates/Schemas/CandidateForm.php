<?php

namespace App\Filament\Admin\Resources\Candidates\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class CandidateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('partieId')
                    ->required()
                    ->numeric(),
                TextInput::make('name'),
                 

FileUpload::make('photo')
    ->label('Foto del candidato')
    ->image()
    ->imageEditor()
    ->circleCropper()
    ->directory('candidatos')
    ->visibility('public'),

                TextInput::make('position'),
                TextInput::make('region'),
                TextInput::make('age')
                    ->numeric(),
                TextInput::make('profession'),
                TextInput::make('education'),
                Textarea::make('experience')
                    ->columnSpanFull(),
                Textarea::make('biography')
                    ->columnSpanFull(),
                TextInput::make('cv_url')
                    ->url(),
                TextInput::make('plan_gobierno_url')
                    ->url(),
                TextInput::make('audio_url')
                    ->url(),
                TextInput::make('video_url')
                    ->url(),
                Toggle::make('is_promoted')
                    ->required(),
                TextInput::make('social_links'),
                TextInput::make('proposals'),
            ]);
    }
}
