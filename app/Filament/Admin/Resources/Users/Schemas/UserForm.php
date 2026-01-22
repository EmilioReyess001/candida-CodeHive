<?php

namespace App\Filament\Admin\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('nombre')
                    ->label('Nombre')
                    ->maxLength(100),

                TextInput::make('apellido')
                    ->label('Apellido')
                    ->maxLength(100),

                TextInput::make('email')
                    ->label('Correo electrónico')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('passwordHash')
                    ->label('Contraseña')
                    ->password()
                    ->dehydrateStateUsing(
                        fn ($state) => filled($state) ? bcrypt($state) : null
                    )
                    ->dehydrated(
                        fn ($state) => filled($state)
                    )
                    ->helperText('Dejar vacío si no deseas cambiar la contraseña'),

                Select::make('idRol')
                    ->label('Rol')
                    ->relationship('role', 'nombreRol')
                    ->required(),

                Toggle::make('activo')
                    ->label('Usuario activo')
                    ->default(true),
            ]);
    }
}
