<?php

namespace App\Filament\Admin\Resources\Parties;

use App\Filament\Admin\Resources\Parties\Pages\CreateParty;
use App\Filament\Admin\Resources\Parties\Pages\EditParty;
use App\Filament\Admin\Resources\Parties\Pages\ListParties;
use App\Filament\Admin\Resources\Parties\Pages\ViewParty;
use App\Filament\Admin\Resources\Parties\Schemas\PartyForm;
use App\Filament\Admin\Resources\Parties\Schemas\PartyInfolist;
use App\Filament\Admin\Resources\Parties\Tables\PartiesTable;
use App\Models\Party;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Facades\Filament;

class PartyResource extends Resource
{

protected static ?int $navigationSort = 3;

    protected static ?string $navigationLabel = 'Partidos';
protected static ?string $pluralModelLabel = 'Partidos políticos';
protected static ?string $modelLabel = 'Partido político';

    protected static ?string $model = Party::class;



protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedFlag;

    protected static ?string $recordTitleAttribute = 'yes';

    public static function form(Schema $schema): Schema
    {
        return PartyForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PartyInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PartiesTable::configure($table);
    }

      public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListParties::route('/'),
            'create' => CreateParty::route('/create'),
            'view' => ViewParty::route('/{record}'),
            'edit' => EditParty::route('/{record}/edit'),
        ];
    }

    public static function canViewAny():bool 
   {
     $user = Filament::auth()->user();

     return $user && ($user->isAdmin() || $user->isEditor());
   }

   public static function shouldRegisterNavigation(): bool
   {
    $user = Filament::auth()->user(); 

    return $user && ($user->isAdmin() || $user->isEditor());
   }
    
}
