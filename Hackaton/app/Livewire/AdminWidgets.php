<?php

namespace App\Livewire;

use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Console\View\Components\Task;

class AdminWidgets extends BaseWidget
{

    protected function getCards(): array
    {
        return [
            Select::make('Total Users', User::count()),
            Select::make('Users Registered Today', User::whereDate('created_at', today())->count()),

        ];
    }
}
