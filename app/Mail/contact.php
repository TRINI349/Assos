<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PharIo\Manifest\Email;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    protected $email;
    protected $sujet;
    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($unEmail,$unSujet,$unMessage)
    {
        $this->Email=$unEmail;
        $this->sujet=$unSujet;
        $this->message=$unMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('site.formulaire_de_contact.email')->with(["email"=>$this->email,"sujet"=>$this->sujet,"message1"=>$this->message]);
    }
}
