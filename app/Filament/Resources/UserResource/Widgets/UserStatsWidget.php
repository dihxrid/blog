<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())->label(__('Total Users')),
            Stat::make('Total Admins', User::where('role', User::ROLE_ADMIN)->count())->label(__('Total Admins')),
            Stat::make('Total Editors', User::where('role', User::ROLE_EDITOR)->count())->label(__('Total Editors')),
        ];
    }
}