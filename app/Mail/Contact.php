<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Elements de contact
     * @var array
     */
    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->Nom = $contact->Nom;
        $this->Prenom = $contact->Prenom;
        $this->email = $contact->email;
        $this->telephone = $contact->telephone;
        $this->message = $contact->message;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact')
            ->with('Nom', $this->Nom)
            ->with('Prenom', $this->Prenom)
            ->with('email', $this->email)
            ->with('telephone', $this->telephone)
            ->with('message', $this->message);
            return back()->with('email', 'email envoyé');

    }
}
