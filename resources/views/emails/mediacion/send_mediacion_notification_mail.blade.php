@component('mail::message')
    @slot('mail::header')
        @component('mail::header', ['url' => 'http://cajta.cl'])
            Corporación de Asistencia Judicial <br />Regiones de Tarapacá y Antofagasta (CAJTA)
        @endcomponent
    @endslot

# Hola !

<p style='text-align: justify;'>
Informamos que han solicitado un proceso de mediación a través de la página web institucional.<br />La información ingresada es la siguiente:</p>
<br />

@component('mail::panel')
<strong>SOLICITUD Nº #{{ str_pad($solicitud->id_cmed_solicitud , 6, '0', STR_PAD_LEFT) }}</strong>
@endcomponent

### **DATOS DEL SOLICITANTE**

- <strong>RUT:</strong> {{ $solicitante->rut_persona == '0000000-0' ? "Persona sin documento de identificación" : $solicitante->rut_persona  }}
- <strong>NOMBRE:</strong> {{ $solicitante->getNombre() }}
@if ( !empty( $solicitante->id_sexo ) )
- <strong>SEXO:</strong> {{ $solicitante->sexo->sexo }}
@endif
@if ( !empty( $solicitante->fnacimiento_persona ) )
- <strong>FECHA DE NACIMIENTO:</strong> {{ Carbon\Carbon::parse($solicitante->fnacimiento_persona)->format('d-m-Y') }}
@endif
@if ( !empty( $solicitante->id_estadocivil ) )
- <strong>ESTADO CIVIL:</strong> {{ $solicitante->estadocivil->estado_civil }}
@endif
@if ( !empty( $solicitante->id_nacionalidad ) )
- <strong>NACIONALIDAD:</strong> {{ $solicitante->nacionalidad->nacionalidad }} ({{ $solicitante->nacionalidad->pais }})
@endif
- <strong>DIRECCIÓN:</strong> {{ $solicitante->direccion_persona }}
@if ( !empty( $solicitante->id_comuna ) )
- <strong>COMUNA:</strong> {{ $solicitante->comuna->comuna }}
@endif
- <strong>CORREO ELECTRÓNICO:</strong> <a href="mailto:{{ $solicitante->correo_persona }}">{{ $solicitante->correo_persona }}</a>
- <strong>TELÉFONO</strong> {{ !empty( $solicitante->telefono2_persona ) ? "S" : "" }} DE CONTACTO:</strong> {{ $solicitante->telefono1_persona }} {{ !empty( $solicitante->telefono2_persona ) ? ("- " . $solicitante->telefono2_persona) : "" }}

---

<br />

### **DATOS DEL SOLICITADO**

@if ( !empty( $solicitado->rut_persona ) )
- <strong>RUT:</strong> {{ $solicitado->rut_persona == '0000000-0' ? "Persona sin documento de identificación chilena" : $solicitado->rut_persona }}
@endif
- <strong>NOMBRE:</strong> {{ $solicitado->getNombre() }}
@if ( !empty( $solicitado->id_sexo ) )
- <strong>SEXO:</strong> {{ $solicitado->sexo->sexo }}
@endif
@if ( !empty( $solicitado->fnacimiento_persona ) )
- <strong>FECHA DE NACIMIENTO:</strong> {{ Carbon\Carbon::parse($solicitado->fnacimiento_persona)->format('d-m-Y') }}
@endif
@if ( !empty( $solicitado->id_estadocivil ) )
- <strong>ESTADO CIVIL:</strong> {{ $solicitado->estadocivil->estado_civil }}
@endif
@if ( !empty( $solicitado->id_nacionalidad ) )
- <strong>NACIONALIDAD:</strong> {{ $solicitado->nacionalidad->nacionalidad }} ({{ $solicitado->nacionalidad->pais }})
@endif
@if ( !empty( $solicitado->direccion_persona ) )
- <strong>DIRECCIÓN:</strong> {{ $solicitado->direccion_persona }}
@endif
@if ( !empty( $solicitado->id_comuna ) )
- <strong>COMUNA:</strong> {{ $solicitado->comuna->comuna }}
@endif
@if ( !empty( $solicitado->correo_persona ) )
- <strong>CORREO ELECTRÓNICO:</strong> <a href="mailto:{{ $solicitado->correo_persona }}">{{ $solicitado->correo_persona }}</a>
@endif
- <strong>TELÉFONO{{ !empty( $solicitado->telefono2_persona ) ? "S" : "" }} DE CONTACTO:</strong> {{ $solicitado->telefono1_persona }} {{ !empty( $solicitado->telefono2_persona ) ? ("- " . $solicitado->telefono2_persona) : "" }}

---

<br />

### **DATOS DEL CASO**

- <strong>FECHA DE ENVÍO DE SOLICITUD:</strong> {{ Carbon\Carbon::parse($solicitud->created_at)->format('d-m-Y H:i:s') }}
- <strong>MATERIA DE ATENCIÓN:</strong> {{ $solicitud->materia->cmed_materia_atencion }}

---

<br />

<p style='text-align: justify;'>
Puede responder a esta solicitud a través de la Extranet CAJTA haciendo click en el siguiente link:</p>
@component('mail::button', ['url' => url('http://extranet.cajta.cl/webpage/cmed/' . $solicitud->id_cmed_solicitud . '/info')])
Ver caso #{{ str_pad($solicitud->id_cmed_solicitud , 6, '0', STR_PAD_LEFT) }}
@endcomponent

<br />

@component('mail::panel')
**Importante:** Este correo es de carácter informativo y además es generado de manera automática a través de un sistema, por lo que solicitamos no responder a este mensaje.
@endcomponent

<br />
<p style='text-align: center;'>
No olvides visitarnos: <br />
<a href='http://cajta.cl/'>cajta.cl</a> - <a href='https://facebook.com/CAJTA'>Facebook</a> - <a href='https://instagram.com/cajta_oficial'>Instagram</a> - <a href='https://twitter.com/CAJTA_oficial'>Twitter</a>
</p>
@endcomponent
