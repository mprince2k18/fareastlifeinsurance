<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventMail extends Mailable
{
    use Queueable, SerializesModels;


    public $event_title = " ";


    public function __construct($event_title)
    {
        $this->event_title = $event_title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $event_title  = " ";
        return $this->view('custom_mail.event_mail');
    }
}
