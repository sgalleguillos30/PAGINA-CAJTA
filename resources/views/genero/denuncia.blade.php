@extends('layouts.estructura-inicial')

@section('title', 'CAJTA | Quienes Somos')

@push('breadcrumbs')
<li>Quiénes somos</li>
<li class="sep">/</li>
<li>Resumen</li>
@endpush

@section('contenido')


<div class="post">
  <div class="post-header-genero"></div>

  <div class="texto">
    <div class="contenido">

      <div class="clearfix"></div>

      <div class="texto">
        <h3 class="title text-center">Denuncias</h3>
        <p class="text-justify opensans"> Si estás viviendo violencia machista o eres testigo y necesitas
          orientación puedes
          llamar a :
        <ul class="gobcl">
          <li class="text-justify py-1">
            <span> 1455 del Ministerio de la Mujer y Equidad de Género. Es anónimo, gratuito y atiende
              todos los días las 24 horas. </span>
          </li>

          <li class="text-justify py-2">
            <span> 149, Fono familia de carabineros </span>
          </li>
        </ul>
        </p>
        <div class="contenido">

          <p class="mt-4">Haga click en cualquiera de los ítems, donde los llevará a las páginas de denuncias</p>
          <ul>
            <li class="py-2"><a class="opensans"
                href="https://docs.google.com/forms/d/e/1FAIpQLSc3BaKrt3eQji35Sn7P8OP5fUmXHr2q5-0PT6u9Wd2hXjsvAQ/viewform"
                target="_blank">Ministerio de Justicia y Derechos Humanos Formulario de Denuncia sobre Discriminación,
                violencia de
                género y acoso sexual.</a></li>

            <li class="py-2"><a class="opensans"
                href="https://www.chileatiende.gob.cl/fichas/27927-ingreso-de-una-demanda-en-materia-de-familia"
                target="_blank">Tribunales de Familia, pestaña de ¿Cómo y dónde hago el
                trámite?</a></li>
            <li class="py-2"><a class="opensans" href="http://www.fiscaliadechile.cl/Fiscalia/victimas/itemvictimas.jsp"
                target="_blank">Las oficinas de la Fiscalía o Ministerio Público, columna
                izquierda tiene información de fiscalías
                locales.</a></li>

            <li class="py-2"><a class="opensans" href="http://www.fiscaliadechile.cl/Fiscalia/quienes/formularios.jsp"
                target="_blank">Formulario Fiscalía de Chile.</a></li>

            <li class="py-2"><a class="opensans" href="https://www.pdichile.cl/informaci%C3%B3n/denuncia-seguro"
                target="_blank">Policía de Investigaciones más cercana
                o en página web.</a></li>

            <li class="py-2"><a class="opensans" href="https://comisariavirtual.cl/" target="_blank">Comisaria de
                Carabineros más cercana
                o en página web.</a></li>

            <li class="py-2"><a class="opensans" href="https://www.denunciaseguro.cl/" target=" _blank">En la
                página web de la Subsecretaria de Prevención del
                Delito. </a></li>

            <li class="py-2"><a class="opensans" href="https://www.nomasviolenciacontramujeres.cl/como-denunciar-2/"
                target="
            _blank">Normas contra la Violencia de la Mujer.
              </a></li>
          </ul>
          <div class="text-center">
            <a href="{{ route('genero.index') }}" class="btn btn-danger py-3 px-4 opensans">
              <i class="fas fa-arrow-left"></i> Volver
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="clearfix"></div>
</div>

@endsection

@push('styles')
<style>
  .main .post .post-header-genero {
    width: 100%;
    height: auto;
    min-height: 180px;
    padding: 0;
    border: 5px solid #3977a6;
    margin: auto;
    background: url('{{ asset('assets/images/Banners/banner-genero.png') }}');
    background-repeat: no-repeat !important;
    background-size: cover !important;
    background-position: center center !important;
    display: flex;
    align-items: center;
    justify-content: center;
    image-rendering: -webkit-optimize-contrast;
    image-rendering: crisp-edges;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transform: translateZ(0);
  }
  }
</style>
@endpush