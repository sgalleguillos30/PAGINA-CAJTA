<?php

namespace App\Mail\Nosotros\SCP;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendDGSolicitudNotification extends Mailable
{
    use Queueable, SerializesModels;

    private $solicitud;
    private $solicitante;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $solicitud, $solicitante )
    {
        $this->solicitud = $solicitud;
        $this->solicitante = $solicitante;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
//            ->to("rodrigo.bravo@cajta.cl")
            ->to("planificacion@cajta.cl")
            ->to("dirgen@cajta.cl")
            ->subject("[No responder] #" . str_pad($this->getSolicitud()->folio_documento, 9, '0', STR_PAD_LEFT) . " - Solicitud de Certificado Práctica Profesional")
            ->markdown('emails.scp.send_dg_comprobante_solicitud')
            ->with('solicitud', $this->getSolicitud())
            ->with('solicitante', $this->getSolicitante());
    }


    /**
     * @return mixed
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }


    /**
     * @return mixed
     */
    public function getSolicitante()
    {
        return $this->solicitante;
    }
}
