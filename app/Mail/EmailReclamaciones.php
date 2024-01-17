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
    public $time;

    public function __construct($distressCall,$name)
    {
         $this->distressCall = $distressCall;
         $this->name = $name;


           date_default_timezone_set('America/Lima');

          $this->time = date("Y-m-d H:i:s");
          $this->subject('REGISTRO LIBRO DE RECLAMACIONES');
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
