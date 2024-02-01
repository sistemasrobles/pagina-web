<?php 




 namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionSperant extends Mailable
{
    use Queueable, SerializesModels;


    public $error;


    public function __construct($error)
    {
        $this->error = $error->getMessage();
    }

    public function build()
    {
        return $this->view('mail.sperant_error');
    }
}