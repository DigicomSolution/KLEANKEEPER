<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DatabaseDelivery extends Mailable
{
    use Queueable, SerializesModels;
    public $link;
    public $file;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($link,$file)
    {
        $this->link = $link;
        $this->file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        $email = $this->subject('Database backup date: '.date('Y-m-d'))
                      ->view('mails.database_delivery')->with(['link' => $this->link]);

        if(!empty($this->file)){
            $email->attach($this->file);
        }

        return $email;
    }
}
