@extends('usuario.index')

@section('seccion')
<div class="panel-heading">
    <div class="panel-title">
        <strong class="h2">Usuarios del sistema</strong>
    </div>
</div>
<div class="panel-body">
    {{-- Aqui van los datos del usuario - Accede a los atributos con la variable --}}
    <div class="row">
        <div class="col-md-3">
            <label class="text-muted font-weight-bold">Nombre:</label>
        </div>
        <div class="col-md-8">
            {{ $usuario->nombre .' '. $usuario->apellido_paterno .' '. $usuario->apellido_materno }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label class="text-muted font-weight-bold">Correo electrónico:</label>
        </div>
        <div class="col-md-8"> {{$usuario->email}}</div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label class="text-muted font-weight-bold">Rol: </label>
        </div>
        <div class="col-md-8"> {{$usuario->rol->rol}}</div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label class="text-muted font-weight-bold">Fecha de creación:</label>
        </div>
        <div class="col-md-8">
            {{$usuario->created_at}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label class="text-muted font-weight-bold">Última actualización:</label>
        </div>
        <div class="col-md-3">
            {{$usuario->updated_at}}
        </div>
    </div>
</div>
<div class="panel-footer">
    <span class="left">
        <a class="a" href="javascript:history.back()">Editar</a>
    </span>
    <span class="right col-lg-offset-9">
        <a class="btn btn-danger" href="">Eliminar</a>
    </span>
</div>
@endsection
