<?php

namespace App\Filament\Admin\Resources\Parties\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

use Filament\Forms\Components\ColorPicker;


class PartyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('acronym'),
                 
                FileUpload::make('photo')
    ->label('Logo del partido')
    ->image()
    ->imageEditor()
    ->circleCropper()
    ->directory('parties')
    ->visibility('public'),


    ColorPicker::make('color')
    ->label('Color del partido')
    ->required()
    ->helperText('Selecciona el color representativo del partido'),



                





                TextInput::make('slogan'),
                TextInput::make('description'),
                TextInput::make('founded'),
                TextInput::make('ideology'),
                TextInput::make('president_name'),
            ]);
    }
}
