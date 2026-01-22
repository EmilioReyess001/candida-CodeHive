<?php

namespace App\Filament\Admin\Resources\Parties\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ColorColumn;


class PartiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns(components: [
                TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable(),
                TextColumn::make('acronym')
                    ->label('Siglas')
                    ->searchable(),
                ImageColumn::make('logo')
        ->label('Logo')
        ->circular()
        ->height(40)
        ->extraImgAttributes([
            'class' => 'object-contain',
        ]),
                ColorColumn::make('color')
    ->label('Color'),
                TextColumn::make('slogan')
                ->label('Eslogan')
                    ->searchable(),
                TextColumn::make('description')
                ->label('Descripción')
                    ->searchable(),
                TextColumn::make('founded')
                ->label('Año de fundación')
                    ->searchable(),
                TextColumn::make('ideology')
                ->label('Ideologia')
                    ->searchable(),
                TextColumn::make('president_name')
                ->label('Presidente')
                    ->searchable(),
                TextColumn::make('created_at')
                ->label('Fecha de registro')
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
