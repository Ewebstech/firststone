<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contactmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $messageDetails;

    public function __construct($sentMessage)
    {
        $this->messageDetails = $sentMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactmail')
                        ->with([
                            'userEmail' => $this->messageDetails->email,
                            'subject' => $this->messageDetails->subject,
                            'message' => $this->messageDetails->message
                        ]);
    }
}
