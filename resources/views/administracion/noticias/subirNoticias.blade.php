
<form class="ui form" method="POST" action="{{ url('seccion-subir-noticia') }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="field">
        <label>Imágen</label>
        <input type="file" name="file">
    </div>
    <div class="field">
        <label>Título</label>
        <input type="text" name="titulo" placeholder="Ingrese el título de la noticia">
    </div>

    <div class="field">
        <label>Sub titulo</label>
        <input type="text" name="sub_titulo" placeholder="Ingrese el sub título de la noticia">
    </div>

    <div class="field">
        <label>Cuerpo de la noticia</label>
        <textarea name="texto" rows="2"></textarea>
    </div>

    <button class="ui button" type="submit">Cargar noticia</button>
</form>

