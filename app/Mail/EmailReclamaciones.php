<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailReclamaciones extends Mailable
{
    use Queueable, SerializesModels;

    
    

    public $distressCall;
    public $name;

    public function __construct($distressCall,$name)
    {
         $this->distressCall = $distressCall;
         $this->name = $name;

          $this->subject('Registro Libro de Reclamaciones');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.notification_libro_reclamaciones');
    }
}
