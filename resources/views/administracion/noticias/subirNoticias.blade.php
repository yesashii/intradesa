
<div class="container">
    @if( count($errors) > 0 )
        <div class="ui error message">
            <ul>
                @foreach( $errors->all() as $error )
                    <li><i class="close icon"></i>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif
</div><!-- fin mensajes de error -->


<div class="container">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<!-- fin mensajes de flash -->


<form class="ui form" method="post" action="{{ 'seccion-subir-noticia-post' }}" id="form" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="field">
        <label>Imágen</label>
        <input type="file" name="file" id="file" >
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

     <button class="ui button" type="button" onclick="cargaSeccion_post( 'seccion-subir-noticia-post' );" >Cargar noticia</button>
    <!-- <button class="ui button" type="submit" >Cargar noticia</button> -->
</form>

<hr />
<div id="tabla-noticias">
@if( isset($noticias) )

    <table class="ui green fixed table">
        <thead>
        <tr>
            <th class="twelve wide">TÍTULO</th>
            <th class="two wide center aligned">ACCIÓN</th>
            <th class="two wide center aligned">ESTADO</th>
        </tr>
        </thead>
        @forelse( $noticias as $noticia )
            <tr>
                <td>{{ $noticia->titulo }}</td>
                <td class="center aligned">
                    <i class="large write square icon" title="Editar"></i> |

                    <i class="large unhide icon" title="Ver detalle" ></i>|

                    <i class="large remove circle icon" title="Eliminar"></i>
                </td>
                <td class="center aligned">
                    <div class="ui toggle checkbox">
                        <input type="checkbox" name="activo" title="Desactivar/Activar">
                        <label></label>
                    </div>
                </td>
            </tr>
        @empty
            <tr><td> sin noticias</td></tr>
        @endforelse
        <!-- paginador manual -->
        <tfoot>
        <tr>
            <th colspan="3">
                <div class="ui right floated pagination menu">
                    <a class="icon item">
                        <i onclick="cargaTablaNoticias( 1 )" class="left chevron icon"></i>
                    </a>
                    @for( $i=0; $i< $noticias->total()/$noticias->perPage(); $i++ )
                        <a class="{{ ( $noticias->currentPage() == $i+1  )?'disabled':'' }} item" href="javascript:cargaTablaNoticias( {{ $i+1 }} )">{{ $i+1 }}</a>
                    @endfor

                    <a class="icon item">
                        <i onclick="cargaTablaNoticias( {{ $noticias->lastPage() }} )" class="right chevron icon"></i>
                    </a>
                </div>
            </th>
        </tr>
        </tfoot>
        <!-- #paginador manual -->
    </table>

@endif
</div>