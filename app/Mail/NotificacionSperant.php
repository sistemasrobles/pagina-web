<?php 




 namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionSperant extends Mailable
{
    use Queueable, SerializesModels;


    public $error;
    public $postData;

    public function __construct($error,$postData)
    {
        $this->error = $error->getMessage();
        $this->postData = $postData;
    }

    public function build()
    {
        return $this->view('mail.sperant_error');
    }
}