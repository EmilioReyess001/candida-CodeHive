<?php

namespace App\Filament\Admin\Resources\Users\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nombre')
                    ->placeholder('-'),
                TextEntry::make('apellido')
                    ->placeholder('-'),
                TextEntry::make('email')
                    ->label('Email address'),
                IconEntry::make('activo')
                    ->boolean(),
                TextEntry::make('idRol')
                    ->numeric(),
            ]);
    }
}
