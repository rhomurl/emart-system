<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderConfirmation extends Notification
{
    use Queueable;
    private $orderData;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($orderData)
    {
        $this->orderData = $orderData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Order #' . $this->orderData['orderDetails']['id'])
                    ->greeting($this->orderData['greeting'])
                    ->line($this->orderData['name'])
                    ->line($this->orderData['body'] . ' We received your order #' . $this->orderData['orderDetails']['id'] . ' on ' . $this->orderData['orderDetails']['time'] . ' and your payment method is Cash on Delivery. We will email you once your order has been shipped. We wish you enjoy shopping with us and thank you again for choosing our store!')
                    ->action($this->orderData['orderText'], $this->orderData['url']);
                    //->line($this->orderData['thankyou']);
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
            'order_id' => $this->orderData['orderDetails']['id']
        ];

    }
}
