<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdvertisingApplication extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $link;
    public $company;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->email=$data['email'];
        $this->link=$data['link'];
        $this->company=$data['company'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@liforum.org','Liforum advertising application')->view('emails.advertising_application');
    }
}
