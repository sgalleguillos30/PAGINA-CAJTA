@component('mail::message')
@slot('mail::header')
@component('mail::header', ['url' => 'http://cajta.cl'])
Corporación de Asistencia Judicial <br />Regiones de Tarapacá y Antofagasta (CAJTA)
@endcomponent
@endslot

# Hola 

<p style="text-align: justify">Informamos que han enviado una solicitud de certificado de práctica a través de la página web, el cual debe ser respondido.<br />La información ingresada es la siguiente</p></p>


---
<dl>
<dt><strong>Folio solicitud:</strong></dt>
<dd>#{{ str_pad($solicitud->folio_documento, 9, '0', STR_PAD_LEFT) }}</dd><br />
<dt><strong>Nombre:</strong></dt>
<dd>{{ strtoupper($solicitante['nombre_solicitante']) }} {{ strtoupper($solicitante['apellido1_solicitante']) }} {{ strtoupper($solicitante['apellido2_solicitante']) }}</dd><br />
<dt><strong>Correo:</strong></dt>
<dd>{{ $solicitante['correo_solicitante'] }}</dd><br />
@if( !empty( $solicitante['fono_solicitante'] ) )
<dt><strong>Teléfono:</strong></dt>
<dd>{{ $solicitante['fono_solicitante'] }}</dd><br />
@endif
<dt><strong>Unidad donde realizó la práctica:</strong></dt>
@if( !empty( $solicitud->id_unidad ))
<dd>{{ $solicitud->unidad->nombre_unidad }}</dd><br />
@elseif( !empty( $solicitud->fpostulantes_cert_unidad_externa_id ) )
<dd>{{ $solicitud->unidad_externa->unidad_externa }}</dd><br />
@endif
<dt><strong>Fecha estimada de realización de práctica:</strong></dt>
<dd>{{ ucfirst($solicitud->fecha_estimada_solicitud->translatedFormat('F \d\e Y')) }}</dd><br />
</dl>

---

<br />
<p style='text-align: justify;'>
Puede responder a esta solicitud a través de la Extranet CAJTA haciendo click en el siguiente link:</p>
@component('mail::button', ['url' => url('http://extranet.cajta.cl/solicitud-cert-postulante/show/' . $solicitud->id)])
Ver caso #{{ str_pad($solicitud->folio_documento, 9, '0', STR_PAD_LEFT) }}
@endcomponent

<br />

@component('mail::panel')
**Importante:** Este correo es de carácter informativo y además es generado de manera automática a través de un sistema, por lo que solicitamos no responder a este mensaje.
@endcomponent

<br />
<p style='text-align: center;'>
No olvides visitarnos: <br />
<a href='http://cajta.cl/'>cajta.cl</a> - <a href='https://facebook.com/CAJTA'>Facebook</a> - <a href='https://instagram.com/cajta_oficial'>Instagram</a> - <a href='https://twitter.com/CAJTA_oficial'>Twitter</a> - <a href='https://www.youtube.com/@CAJTA_oficial'>YouTube</a>
</p>
@endcomponent

