@component('mail::message')
@slot('mail::header')
@component('mail::header', ['url' => 'http://cajta.cl'])
Corporación de Asistencia Judicial <br />Regiones de Tarapacá y Antofagasta (CAJTA)
@endcomponent
@endslot

# Hola {{ strtoupper($solicitante['nombre_solicitante']) }} {{ strtoupper($solicitante['apellido1_solicitante']) }} {{ strtoupper($solicitante['apellido2_solicitante']) }}

<p style="text-align: justify">Esperando que se encuentre bien, podemos informar que se ha realizado una solicitud a través de la página web de la Corporación de Asistencia judicial de las Regiones de Arica y Parinacota, Tarapacá y Antofagasta, se ha levantado una solicitud para duplicado de Certificado de Práctica Profesional de Derecho. Si Ud. no hizo envío del mensaje indicado, le pedimos que ignore este correo.</p>

<p style="text-align: justify">En caso contrario, podemos informar que se ha levantado con folio <strong>#{{ str_pad($solicitud->folio_documento, 9, '0', STR_PAD_LEFT) }}</strong> con fecha {{ $solicitud->created_at->format('d-m-Y H:i:s') }}, bajo los siguientes antecedentes entregados.</p><br />

---
<dl>
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
<p style="text-align: justify">Es importante señalar que, el plazo de entrega en la región de Tarapacá donde se emiten es de 10 días hábiles y en las demás regiones 15 días hábiles, ya que deben ser despachos a las oficinas de la Dirección Regional respectiva.</p>
<p style="text-align: justify">No olvide que para el retiro del documento es <strong>PERSONAL</strong>, presentando su cédula de identidad. Bajo el caso de que sea retirado por un tercero, deberá acompañar fotocopia simple de la cédula de identidad con autorización simple del requirente, dejando una copia al momento de la entrega.</p>

@component('mail::panel')
**Importante:** Este correo es de carácter informativo y además es generado de manera automática a través de un sistema, por lo que solicitamos no responder a este mensaje.
@endcomponent

<br />
<p style='text-align: center;'>
No olvides visitarnos: <br />
<a href='http://cajta.cl/'>cajta.cl</a> - <a href='https://facebook.com/CAJTA'>Facebook</a> - <a href='https://instagram.com/cajta_oficial'>Instagram</a> - <a href='https://twitter.com/CAJTA_oficial'>Twitter</a> - <a href='https://www.youtube.com/@CAJTA_oficial'>YouTube</a>
</p>
@endcomponent

