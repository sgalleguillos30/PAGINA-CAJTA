<?php

namespace App\Mail\PartCiudadana;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConsultaCPPNotification extends Mailable
{
    use Queueable, SerializesModels;

    private $cpp;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cpp)
    {
        $this->cpp = $cpp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to("andrea.valdivia@cajta.cl")
            ->to("rene.madariaga@cajta.cl")
            ->to("rodrigo.bravo@cajta.cl")
            ->subject("[No responder] Consulta Cuenta Pública #". str_pad($this->getCPP()->id_cpp , 6, '0', STR_PAD_LEFT) . ".")
            ->markdown('emails.pciudadana.cuenta-publica.consultacpp')
            ->with('cpp', $this->getCPP());
    }


    /**
     * @return mixed
     */
    public function getCPP()
    {
        return $this->cpp;
    }

    /**
     * @param mixed $cpp
     */
    public function setCPPP($cpp): void
    {
        $this->cajoirs = $cpp;
    }
}
