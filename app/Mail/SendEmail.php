<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $pass;
    public $name;

    public function __construct($key, $id)
    {
        $this->key = $key;
        $this->id = $id;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $key = $this->key;
        $id = $this->id;

        return $this->view('mail.sendemail', compact('key', 'id'));
    }
}
