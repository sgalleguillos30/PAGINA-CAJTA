@if ( session('message'))
    <div class="alerta">
        <div class="msgbicolor">
            <span class="azul"></span>
            <span class="rojo"></span>
        </div>

        <div class="alerta-mensaje">
            <h4 class="text-center">{{ session('message')[0] }}</h4>
            <a href="{{ route('home') }}" class="btn btn-danger col-md-6 col-md-offset-3 col-xs-12 text-center" style="font-size: 16px;">Volver</a>
            <div class="clearfix"></div>
        </div>
    </div>
@endif
