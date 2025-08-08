<?php
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// this code for production
// Schedule::command('membership:check')
//     ->daily()
//     ->at('00:00')
//     ->timezone('Asia/Jakarta')
//     ->withoutOverlapping()
//     ->onOneServer()
//     ->evenInMaintenanceMode();


// just for develop
Schedule::command('memberships:check')->everyMinute();

