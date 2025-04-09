<?php

namespace App\Mail\Mediacion;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendUserCmedNotification extends Mailable
{
    use Queueable, SerializesModels;
    private $solicitud;
    private $solicitante;
    private $solicitado;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($solicitud, $solicitante, $solicitado)
    {
        //
        $this->solicitud = $solicitud;
        $this->solicitante = $solicitante;
        $this->solicitado = $solicitado;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to("". $this->getSolicitante()->correo_persona."")
//            ->to("rodrigo.bravo@cajta.cl")
            ->subject("[No responder] Solicitud Proceso Mediación #". str_pad($this->getSolicitud()->id_cmed_solicitud , 6, '0', STR_PAD_LEFT) . ".")
            ->markdown('emails.mediacion.send_user_notification_mail')
            ->with('solicitud', $this->getSolicitud())
            ->with('solicitante', $this->getSolicitante())
            ->with('solicitado', $this->getSolicitado());
    }


    /**
     * @return mixed
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }

    /**
     * @param $solicitud
     */
    public function setSolicitud($solicitud): void
    {
        $this->solicitud = $solicitud;
    }


    /**
     * @return mixed
     */
    public function getSolicitante()
    {
        return $this->solicitante;
    }

    /**
     * @param $solicitante
     */
    public function setSolicitante($solicitante): void
    {
        $this->solicitante = $solicitante;
    }


    /**
     * @return mixed
     */
    public function getSolicitado()
    {
        return $this->solicitado;
    }

    /**
     * @param $solicitado
     */
    public function setSolicitado($solicitado): void
    {
        $this->solicitado = $solicitado;
    }
}
