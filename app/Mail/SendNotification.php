<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNotification extends Mailable
{
    use Queueable, SerializesModels;

    
    

    public $distressCall;
    public $name;

    public function __construct($distressCall,$name)
    {
         $this->distressCall = $distressCall;
         $this->name = $name;

          $this->subject('Registro de Nuevo Cliente');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.notification');
    }
}
