<?php

namespace App\Filament\Admin\Resources\Candidates;

use App\Filament\Admin\Resources\Candidates\Pages\CreateCandidate;
use App\Filament\Admin\Resources\Candidates\Pages\EditCandidate;
use App\Filament\Admin\Resources\Candidates\Pages\ListCandidates;
use App\Filament\Admin\Resources\Candidates\Pages\ViewCandidate;
use App\Filament\Admin\Resources\Candidates\Schemas\CandidateForm;
use App\Filament\Admin\Resources\Candidates\Schemas\CandidateInfolist;
use App\Filament\Admin\Resources\Candidates\Tables\CandidatesTable;
use App\Models\Candidate;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Facades\Filament;



class CandidateResource extends Resource
{
    protected static ?int $navigationSort = 2;

 protected static ?string $navigationLabel = 'Candidatos';
protected static ?string $modelLabel = 'Candidato';
protected static ?string $pluralModelLabel = 'Candidatos';



    protected static ?string $model = Candidate::class;



protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?string $recordTitleAttribute = 'yes';

    public static function form(Schema $schema): Schema
    {
        return CandidateForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CandidateInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CandidatesTable::configure($table);
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
            'index' => ListCandidates::route('/'),
            'create' => CreateCandidate::route('/create'),
            'view' => ViewCandidate::route('/{record}'),
            'edit' => EditCandidate::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
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
