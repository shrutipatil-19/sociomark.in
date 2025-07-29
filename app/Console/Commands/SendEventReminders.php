<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventReminderMail;
use App\Models\Event;
use Carbon\Carbon;

class SendEventReminders extends Command
{
    protected $signature = 'events:remind-today';
    protected $description = 'Send event reminder emails for today\'s events';

    public function handle()
    {
        $today = Carbon::today()->toDateString();

        $events = Event::whereDate('start', $today)->get();

        foreach ($events as $event) {
            $recipient = 'shruti.sociomark@gmail.com'; // Or dynamically: $event->user->email
            Mail::to($recipient)->send(new EventReminderMail($event));
        }

        $this->info("Reminder emails sent for today's events.");
    }
}
