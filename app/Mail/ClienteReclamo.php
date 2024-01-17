<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClienteReclamo extends Mailable
{
    use Queueable, SerializesModels;

    
    

    public $distressCall;
    public $name;
    public $time;
    public $codigo;



    public function __construct($distressCall,$name,$codigo_generado)
    {
         $this->distressCall = $distressCall;
         $this->name = $name;
         $this->codigo = $codigo_generado;

           date_default_timezone_set('America/Lima');

          $this->time = date("Y-m-d H:i:s");
          $this->subject('CONFIRMACIÓN DE REGISTRO - '.$codigo_generado);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.cliente_reclamo');
    }
}
