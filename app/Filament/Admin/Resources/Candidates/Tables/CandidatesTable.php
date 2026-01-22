<?php

namespace App\Filament\Admin\Resources\Candidates\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class CandidatesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('partieId')
                ->label('Partido')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('name')
                ->label('Nombre')
                    ->searchable(),
                
               ImageColumn::make('photo')
                ->label('Foto')
                ->circular()
                ->height(50)
                 ->extraImgAttributes([
        'class' => 'transition-transform duration-300 hover:scale-150 object-cover rounded-md',
    ]),

                TextColumn::make('position')
                ->label('Cargo')
                    ->searchable(),
                TextColumn::make('region')
                    ->searchable(),
                TextColumn::make('age')
                ->label('Edad')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('profession')
                ->label('Profesión')
                    ->searchable(),
                TextColumn::make('education')
                     ->label('Educación')
                    ->searchable(),
                TextColumn::make('cv_url')
    ->label('CV')
    ->url(fn ($record) => $record->cv_url, shouldOpenInNewTab: true)
    ->formatStateUsing(fn () => 'Ver CV'),

                TextColumn::make('plan_gobierno_url')
    ->label('Plan de gobierno')
    ->url(fn ($record) => $record->plan_gobierno_url, shouldOpenInNewTab: true)
    ->formatStateUsing(fn () => 'Ver plan')

                    ->searchable(),


                TextColumn::make('audio_url')
    ->label('Audio')
    ->url(fn ($record) => asset($record->audio_url), shouldOpenInNewTab: true)
    ->formatStateUsing(fn () => 'Escuchar audio')

                    ->searchable(),


                TextColumn::make('video_url')
    ->label('Video')
    ->url(fn ($record) => $record->video_url, shouldOpenInNewTab: true)
    ->formatStateUsing(fn () => 'Ver video')

                    ->searchable(),



                IconColumn::make('is_promoted')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
