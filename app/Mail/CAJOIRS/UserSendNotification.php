<?php

namespace App\Mail\CAJOIRS;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserSendNotification extends Mailable
{
    use Queueable, SerializesModels;
    private $cajoirs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cajoirs)
    {
        //
        $this->cajoirs = $cajoirs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to("{$this->getCajoirs()->mail_cajoirs}")
            ->subject("[No responder] Mensaje #". str_pad($this->getCajoirs()->id_cajoirs , 6, '0', STR_PAD_LEFT) . " - Corporación de Asistencia Judicial (CAJTA)")
            ->markdown('emails.cajoirs.send-user-notification')
            ->with('cajoirs', $this->getCajoirs());
    }



    /**
     * @return mixed
     */
    public function getCajoirs()
    {
        return $this->cajoirs;
    }

    /**
     * @param mixed $cajoirs
     */
    public function setCajoirs($cajoirs): void
    {
        $this->cajoirs = $cajoirs;
    }
}
