@extends('usuario.index')

@section('seccion')
<div class="panel-heading">
    <div class="panel-title">
        <strong class="h2">Usuarios del sistema</strong>
    </div>
</div>
<div class="panel-body">
    <!-- Aqui van los datos del usuario - Accede a los atributos con la variable $usuario -->
</div>
<div class="panel-footer">
    <span class="left">
        <a class="btn btn-success">Editar</a>
    </span>
    <span class="right col-lg-offset-9">
        <a class="btn btn-danger">Eliminar</a>
    </span>
</div>
@endsection
