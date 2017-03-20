@extends('usuario.index')

@section('seccion')

<div class="panel-heading">
    <div class="panel-title">
        <strong class="h2">Configuraciones</strong>
    </div>
</div>
<div class="panel-body">

    {{-- carreras registradas --}}
    @include('usuario.admin.carreras.index', ['carreras' => $carreras])

    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                <h3>Sitio</h3>
            </div>
        </div>
        <div class="panel-body">
            <form method="post" action="#">
                <div class="form-group">
                    <label for="nombre_sitio">Nombre del sitio</label>
                    <input id="nombre_sitio" type="text" name="nombre_sitio" class="form-control" value="{{ config('app.name') }}" />
                </div> 
                <div class="form-group">
                    <label for="logo">logo</label>
                    <input type="file" name="logo" class="form-control-file"></input>
                </div>
            </form>
        </div>
        <div class="panel-footer">
            
        </div>
    </div>              


</div>

@endsection
