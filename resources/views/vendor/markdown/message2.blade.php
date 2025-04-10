@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => 'http://cajta.cl'])
            Corporación de Asistencia Judicial<br /> Regiones de Tarapacá y Antofagasta (CAJTA)
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} CAJTA. Todos los Derechos Reservados
            ---
            No olvides visitarnos:
            + [Página Web](http://cajta.cl)
            + [Facebook](https://facebook.com/CAJTA)
            + [Instagram](https://instagram.com/cajta_oficial)
            + [Twitter](https://twitter.com/CAJTA_oficial)
        @endcomponent
    @endslot
@endcomponent
