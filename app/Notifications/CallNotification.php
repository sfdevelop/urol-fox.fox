<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CallNotification extends Notification
{
    use Queueable;

    public $message;

    /**
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $message = $this->message;
        return (new MailMessage)
            ->from(env('mail_from_address'))
            ->subject('Получен обратный звонок')
            ->greeting('Здравствуйте!')
            ->line('Обратный звонок')
            ->line('Имя: ' . $message->message->name)
            ->line('Номер телефона: ' . $message->message->phone)
            ->action('Посмотреть в админке', url('/admin'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
