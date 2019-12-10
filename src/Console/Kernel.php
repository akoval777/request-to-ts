<?php

namespace Akoval777\RequestToTs\Console;

use Akoval777\RequestToTs\models\RequestToTs;
use App\Console\Kernel as ConsoleKernel;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Carbon;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        parent::schedule($schedule);

        $schedule->call(function() {
            RequestToTs::where('created_at', '<', Carbon::now()->subHours(config('request_to_ts.delete_after')))->delete();
        })->everyMinute();
    }
}