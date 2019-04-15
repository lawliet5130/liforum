<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class LiforumParticipation extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $link;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->email=$data['email'];
        $this->link=$data['link'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@liforum.org','Liforum Participation Request')->view('emails.liforum_participation');
    }
}
