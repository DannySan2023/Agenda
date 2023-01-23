<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Scheduler; 
use App\Notifications\SchedulerReminderNotification;

class SchedulerReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scheduler:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reminds close appointments to user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $schedulers = Scheduler::whereDate('from', now()->format('Y-m-d'))
            ->whereTime('from', now()->addMinutes(30)->format('H:i'))
            ->get();

            foreach ($schedulers as $schedulers){
                $scheduler->staffUser->notify(new SchedulerReminderNotification($scheduler));
            }

        return 0;
    }
}
