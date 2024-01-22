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
    public $codigo;

    public $pdfContent;


    public function __construct($distressCall,$name,$codigo_generado,$file_reclamo)
    {
         $this->distressCall = $distressCall;
         $this->name = $name;
          $this->codigo = $codigo_generado;
          $this->pdfContent = $file_reclamo;




           date_default_timezone_set('America/Lima');

          $this->time = date("Y-m-d H:i:s");
          $this->subject('REGISTRO LIBRO DE RECLAMACIONES - '.$codigo_generado);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        


         $codigo = $this->codigo;
        
        return $this->view('mail.notification_libro_reclamaciones')
                    ->attachData($this->pdfContent, 'libro_reclamaciones_'.$codigo.'.pdf', [
                        'mime' => 'application/pdf',
                    ]);

    }
}
