<?php
 
namespace App\Filament\Widgets;
 
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
 
class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';

    protected static bool $isLazy = false;
    protected function getStats(): array
    {
        return [
            Stat::make('Pelanggan', '1,600')
                ->description('Hari ini')
                ->descriptionIcon('heroicon-o-users')
                ->color('danger')
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })",
                ]),
            Stat::make('Pesanan', '2,500')
                ->description('Hari ini')
                ->descriptionIcon('heroicon-o-shopping-bag')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('danger')
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })",
                ]),
            Stat::make('Waktu Paling Ramai', '11:00')
                ->description('Hari ini')
                ->descriptionIcon('heroicon-o-clock')
                ->color('danger')
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })",
                ]),
        ];
    }
}