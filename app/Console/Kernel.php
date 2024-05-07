<?php


namespace App\Console;

use App\Console\Commands\CheckUserAccountActivity;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Session;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $lastActivityTime = Session::get('lastActivityTime');
        // $activeAccount = Session::get('accountSessionId');
        // dd($activeAccount);

        // $schedule->command(CheckUserAccountActivity::class, [
        //     '--lastActivityTime' => $lastActivityTime->toString(),
        //     '--activeAccount' => $activeAccount
        // ])->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}


