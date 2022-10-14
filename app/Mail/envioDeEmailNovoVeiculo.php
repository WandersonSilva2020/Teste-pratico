<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use app\Event;
use app\User;
use phpDocumentor\Reflection\Types\This;

class envioDeEmailNovoVeiculo extends Mailable
{
    use Queueable, SerializesModels;
    public $userName;
    public $user;
    public $events;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userMail,$events)
    {
        $this->events = $events;
        $this-> userMail = $userMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        return $this->from($this->userMail)        
                    ->view('mail.novoVeiculo',['userMail'=>$this->userMail,'dadosDoEvento'=>$this->events])
                    ->subject('Cadastro de Novo Veiculo - Concluido com Exito!');
    }
}
