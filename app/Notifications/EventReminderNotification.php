<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EventReminderNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

     public $event;
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->subject('Event Reminder')
        ->line('Your event "' . $this->event->name . '" is starting soon.')
        ->line('Event details:')
        ->line('Date: ' . $this->event->date->format('D, M d, Y'))
        ->line('Time: ' . $this->event->from . ' - ' . $this->event->to)
        ->line('Description: ' . $this->event->description);    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'message'=> 'Event Reminder',
            'name'=>'Your event "' . $this->event->name . '" is starting soon.',
            'date'=>'Date: ' . $this->event->date->format('D, M d, Y'),
            'time'=>'Time: ' . $this->event->from . ' - ' . $this->event->to,
            'description'=>   $this->event->description,
            'icon'=>"ti ti-calendar text-[1.125rem]",

        ];
    }
}
