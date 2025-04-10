<div class="buscar clearfix">

    <form method="post" action="{{ route('home.buscar') }}" autocomplete="off">
        @csrf

        <h5 class="gobcl" for="query">Buscar noticias</h5>
        <input type="text" id="query" name="query" placeholder="Buscar">
        <input type="submit" id="boton" value="Enviar">
    </form>

    <div class="clearfix"></div>
</div>
