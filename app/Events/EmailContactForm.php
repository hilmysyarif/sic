<?php namespace App\Handlers\Events;
use App\Events\ContactFormValid;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
class EmailContactForm {
    /**
     * Create the event handler.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * Handle the event.
     *
     * @param  ContactFormValid  $event
     * @return void
     */
    public function handle(ContactFormValid $event)
    {
        \Mail::send('frontend.contact.contact',
                $event->data
                 function($message)
            {
                $message->from('hilmysyarif@gmail.com');
                $message->to('hilmysyarif@gmail.com', 'Admin')->subject('Feedback');
            });
    }
}