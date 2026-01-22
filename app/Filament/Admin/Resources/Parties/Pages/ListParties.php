<?php

namespace App\Filament\Admin\Resources\Parties\Pages;

use App\Filament\Admin\Resources\Parties\PartyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListParties extends ListRecords
{
    protected static string $resource = PartyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
