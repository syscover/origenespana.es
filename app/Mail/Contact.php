<?php namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Contact constructor.
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = collect($data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Origen España - Formulario de contacto recibido');

        return $this->view('emails.content.contact');
    }
}
