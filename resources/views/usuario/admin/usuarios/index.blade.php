@extends('usuario.index')

@section('seccion')
<div class="panel-heading">
    <div class="panel-title">
        <strong class="h2">Usuarios del sistema</strong>
    </div>
</div>
<div class="panel-body">
    <table class="table table-responsive table-striped table-hover">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Rol</th>
        <th colspan="3">Acciones</th>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->nombre.' '.$usuario->apellido_paterno.' '.$usuario->apellido_materno}}</td>
                <td>{{$usuario->email}}</td>
                <td><a class="btn btn-link " href="">{{$usuario->rol->rol}}</a></td>
                <td><a class="btn btn-link text-success" href="">editar</a></td>
                <td><a class="btn btn-link text-muted" href="">ver</a></td>
                <td><a class="btn btn-link text-danger" href="">eliminar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="panel-footer">
    {{$usuarios->links()}}
</div>
@endsection
