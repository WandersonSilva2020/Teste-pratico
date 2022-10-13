<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use app\Event;
use app\User;
use phpDocumentor\Reflection\Types\This;

class envioDeEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
    $this->user = $user;    
    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
        
    {  
        return $this->from($this->user->email)        
                    ->view('mail.novoVeiculo')
                    ->subject('email de teste');
    }
}
