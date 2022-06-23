<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class client extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($client)
    {
        $this->Nom = $client->Nom;
        $this->email = $client->email;
        $this->message = $client->message;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.client')
            ->with('Nom', $this->Nom)
           
            ->with('email', $this->email)
            ->with('message', $this->message);
            return back()->with('email', 'email envoyé');

    }
}
