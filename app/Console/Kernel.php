<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('blockchain:run')->dailyAt("17:00");
        $schedule->command('check:reward')->daily();
        $schedule->command('check:binary')->everyFiveMinutes();
        $schedule->command('verify:deposits')->everyFiveMinutes();
        // $schedule->command('binance:withdraw')->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
