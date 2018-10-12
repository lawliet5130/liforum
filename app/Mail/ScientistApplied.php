<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ScientistApplied extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $surname;
    public $email;
    public $link;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name=$data['name'];
        $this->surname=$data['surname'];
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
        return $this->from('scientist-application@liforum.org','Scientist Application')->view('emails.scientist_application');
    }
}
