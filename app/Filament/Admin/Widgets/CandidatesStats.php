<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Candidate;
use App\Models\Party;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CandidatesStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Candidatos', Candidate::count())
                ->description('Registrados')
                ->icon('heroicon-m-user-group')
                ->color('success'),

            Stat::make('Partidos', Party::count())
                ->description('Organizaciones políticas')
                ->icon('heroicon-m-flag')
                ->color('primary'),

            Stat::make('Usuarios', User::count())
                ->description('Acceso al panel')
                ->icon('heroicon-m-users')
                ->color('warning'),

            Stat::make(
                'Destacados',
                Candidate::where('is_promoted', true)->count()
            )
                ->description('Candidatos promovidos')
                ->icon('heroicon-m-star')
                ->color('danger'),
        ];
    }
}
