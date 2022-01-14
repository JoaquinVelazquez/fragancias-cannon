<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;
    // public $to = "info@primeseguridad.com.ar";
    public $name_;
    public $subject_;
    public $message_;
    public $email_;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $mensaje, $email)
    {
        $this->name_ = $nombre;
        $this->message_ = $mensaje;
        $this->subject_ = "[FFCANNON WEB] Nuevo mensaje";
        $this->email_ = $email;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // throw new \Exception($this->email_);return;
        return $this->from("".$this->email_."")
                    ->view('mails.contacto_recibido',
                            array('name_' => $this->name_,
                            'message_' => $this->message_
                             ));
                                                                  
    }
}
