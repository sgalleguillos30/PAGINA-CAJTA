@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Noticias
@endsection

@push('breadcrumbs')
    <li>Noticias</li>
@endpush

@section('contenido')

    @forelse ($noticias as $noticia)
        @include('layouts.contenedores.lista-noticia-min')
    @empty
        @include('layouts.fijos.messages-box', ['message' => 'Lo sentimos, no hay noticias registradas para mostrar.'])
    @endforelse

    @if ( !empty($noticias) or count($noticias) > 0 )
        <div class="row justify-content-center">
            {{ $noticias->links() }}
        </div>
    @endif

@endsection
