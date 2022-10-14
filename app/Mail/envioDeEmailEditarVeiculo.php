<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use app\Event;
use app\User;

class envioDeEmailEditarVeiculo extends Mailable
{
    use Queueable, SerializesModels;
    public $dados;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados,$userMail,$userName)
    {
        $this-> dados = $dados;
        $this-> userMail = $userMail;
        $this-> userName = $userName;
        

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->from($this->userMail) 
                    ->view('mail.editarVeiculo',['userMail'=>$this->userMail,'userName'=>$this->userName,'dados'=>$this->dados])
                    ->subject('Veiculo Editado Com Sucesso !');
    }
}
