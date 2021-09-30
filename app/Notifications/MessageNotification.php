<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MessageNotification extends Notification
{
    use Queueable;

    public $message;

    /**
     * MessageNotification constructor.
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $message = $this->message;
        return (new MailMessage)
            ->from(env('mail_from_address'))
            ->subject('Обратная связь')
            ->greeting('Здравствуйте!')
            ->line('Уведомление со страницы контактов')
            ->line('Имя: ' . $message->message->title)
            ->line('E-mail: ' . $message->message->mail)
            ->line('Задан вопрос: ' . $message->message->question)
            ->action('Посмотреть в админке', url('/admin'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
