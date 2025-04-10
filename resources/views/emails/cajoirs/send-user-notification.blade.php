@component('mail::message')
    @slot('mail::header')
        @component('mail::header', ['url' => 'http://cajta.cl'])
            Corporación de Asistencia Judicial <br />Regiones de Tarapacá y Antofagasta (CAJTA)
        @endcomponent
    @endslot

# Hola {{ ucfirst(trans($cajoirs->nombre_cajoirs)) }} {{ ucfirst(trans($cajoirs->apellido1_cajoirs)) }} {{ ucfirst(trans($cajoirs->apellido2_cajoirs)) }},

<p style='text-align: justify;'>
Se ha registrado un mensaje enviado a la Corporación de Asistencia Judicial de las Regiones de Arica y Parinacota, Tarapacá y Antofagasta. Si usted no envió este mensaje, le pedimos que ignore este correo, en caso contrario, detallamos los datos del mensaje:</p>
<br />

---
<dl>
<dt><strong>Nº Solicitud</strong></dt>
<dd>#{{ str_pad($cajoirs->id_cajoirs , 6, '0', STR_PAD_LEFT) }}</dd><br />
<dt><strong>RUT</strong></dt>
<dd>{{ $cajoirs->rut_cajoirs == '0000000-0' ? "Persona sin documento de identificación" : $cajoirs->rut_cajoirs  }}</dd><br />
<dt><strong>Nombre</strong></dt>
<dd>{{ $cajoirs->getNombre() }}</dd><br />
<dt><strong>Dirección</strong></dt>
<dd>{{ $cajoirs->direccion_cajoirs }}</dd><br />
<dt><strong>Correo electrónico</strong></dt>
<dd>{{ $cajoirs->mail_cajoirs }}</dd><br />
@if ( !empty( $cajoirs->fono_cajoirs ) )
<dt><strong>Teléfono</strong></dt>
<dd>{{ $cajoirs->fono_cajoirs }}</dd><br />
@endif
<dt><strong>Sexo</strong></dt>
<dd>{{ $cajoirs->sexo->sexo }}</dd><br />
<dt><strong>Ciudad</strong></dt>
<dd>{{ $cajoirs->ciudad->ciudad }}</dd><br />
@if ( !empty( $cajoirs->id_unidad ) )
<dt><strong>Centro de Atención</strong></dt>
<dd>{{ $cajoirs->unidad->nombre_unidad }}</dd><br />
@endif
<dt><strong>Forma de Respuesta</strong></dt>
<dd>{{ $cajoirs->tiporespuesta->tipo_respuesta }}</dd><br />
<dt><strong>Tipo de Mensaje</strong></dt>
<dd>{{ $cajoirs->tipomensaje->tipo_mensaje }}</dd><br />
<dt><strong>Fecha envío del mensaje</strong></dt>
<dd>{{ Carbon\Carbon::parse($cajoirs->creado_cajoirs)->format('d-m-Y H:i:s') }}</dd><br />
<dt><strong>Mensaje</strong></dt>
<dd>{!! $cajoirs->consulta_cajoirs !!}</dd><br />
</dl>

---

<br />

> **Importante:** Este correo es de carácter informativo y además es generado de manera automática a través de un sistema, por lo que solicitamos no responder a este mensaje.

<br />
<p style='text-align: center;'>
No olvides visitarnos: <br />
<a href='http://cajta.cl/'>cajta.cl</a> - <a href='https://facebook.com/CAJTA'>Facebook</a> - <a href='https://instagram.com/cajta_oficial'>Instagram</a> - <a href='https://twitter.com/CAJTA_oficial'>Twitter</a>
</p>
@endcomponent
