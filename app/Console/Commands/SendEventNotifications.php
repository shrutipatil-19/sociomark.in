<?php

namespace App\Console\Commands;

use App\Mail\EventNotification;
use App\Models\Event;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class SendEventNotifications extends Command
{
    protected $signature = 'app:send-event-notifications';
    protected $description = 'Sends email notifications for events scheduled for today.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::today()->toDateString();

        // Find events where the 'start' date is today
        $events = Event::where('start', $today)->get();

        if ($events->isEmpty()) {
            $this->info('No events to notify today.');
            return self::SUCCESS; // Changed from Command::SUCCESS to self::SUCCESS
        }

        $this->info(count($events) . ' events found for notification today.');

        foreach ($events as $event) {
            try {
                // IMPORTANT: Replace 'recipient@example.com' with the actual user's email.
                // You would typically have a 'user_id' on the Event model and fetch the user's email.
                $recipientEmail = 'recipient@example.com';

                Mail::to($recipientEmail)->send(new EventNotification($event));

                $this->info("Notification sent for event: '{$event->title}' (Event Date: {$event->start->toDateString()}) to {$recipientEmail}");
            } catch (\Exception $e) {
                $this->error("Failed to send notification for event '{$event->title}': " . $e->getMessage());
            }
        }

        $this->info('Event notification process completed.');
        return self::SUCCESS; // Changed from Command::SUCCESS to self::SUCCESS
    }
}