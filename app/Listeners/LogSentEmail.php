<?php

namespace App\Listeners;

use App\Models\Email;
use Illuminate\Mail\Events\MessageSent;

class LogSentEmail
{
    /**
     * Create the event listener.
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
     * @param  \Illuminate\Mail\Events\MessageSent  $event
     * @return void
     */
    public function handle(MessageSent $event)
    {
        $message = $event->message;
        $addresses = $message->getTo()[0];
        Email::where(['email' => $addresses->getAddress()])->update(['status' => Email::EMAIL_SENT]);
    }
}
