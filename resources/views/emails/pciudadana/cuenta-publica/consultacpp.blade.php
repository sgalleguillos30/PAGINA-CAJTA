@component('mail::message')
@slot('mail::header')
@component('mail::header', ['url' => 'http://cajta.cl'])
Corporación de Asistencia Judicial <br />Regiones de Tarapacá y Antofagasta (CAJTA)
@endcomponent
@endslot

# Hola,

<p style='text-align: justify;'>
Informamos que han enviado un mensaje a través de la página de participación ciudadana a través de la sección de <a
        href="{{ route('pciudadana.cpp') }}">Cuentas Públicas Participativas</a> , el cual se le ha enviado a Ud. para la respuesta dentro de los plazos establecidos.<br />La información ingresada es la siguiente</p>
<br />

---

<dl>
<dt><strong>Nº Consulta</strong></dt>
<dd>#{{ str_pad($cpp->id_cpp , 6, '0', STR_PAD_LEFT) }}</dd><br />
<dt><strong>RUT</strong></dt>
<dd>{{ $cpp->rut_cpp == '0000000-0' ? "Persona sin documento de identificación Chilena" : $cpp->rut_cpp  }}</dd><br />
<dt><strong>Nombre</strong></dt>
<dd>{{ $cpp->getNombre() }}</dd><br />
<dt><strong>Dirección</strong></dt>
<dd>{{ $cpp->direccion_cpp }}</dd><br />
<dt><strong>Correo electrónico</strong></dt>
<dd>{{ $cpp->correo_cpp }}</dd><br />
@if ( !empty( $cpp->telefono_cpp ) )
<dt><strong>Teléfono</strong></dt>
<dd>{{ $cpp->telefono_cpp }}</dd><br />
@endif
<dt><strong>Fecha envío de la consulta</strong></dt>
<dd>{{ Carbon\Carbon::parse($cpp->created_at)->format('d-m-Y H:i:s') }}</dd><br />
<dt><strong>Mensaje</strong></dt>
<dd>{{ $cpp->mensaje_cpp }}</dd><br />
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
