@extends('usuario.index')

@section('seccion')
<div class="panel-heading">
    <div class="panel-title">
        <strong class="h2">Solicitudes enviadas</strong>
    </div>
</div>
<div class="panel-body">
    <table class="table table-responsive table-striped table-hover">
        <thead>
        <th>ID</th>
        <th>Alumno</th>
        <th>Matricula</th>
        <th>Estado de solicitud</th>
        <th colspan="3">Acciones</th>
        </thead>
        <tbody>
            @foreach($solicitudes as $solicitud)
            <tr>
                <td>{{$solicitud->id}}</td>
                <td>{{$solicitud->alumno->usuario->nombre.' '.$solicitud->alumno->usuario->apellido_paterno.' '.$solicitud->alumno->usuario->apellido_materno}}</td>
                <td>{{$solicitud->alumno->usuario->matricula}}</td>
                <td>
                    @if($solicitud->estado == 'S') 
                        <label class="bg-faded">Subido</label>
                    @elseif($solicitud->estado == 'P')
                        <label class="bg-info text-white">En proceso</label>
                    @elseif($solicitud->estado == 'A')
                        <label class="bg-success text-white">Aceptado</label>
                    @elseif($solicitud->estado == 'T')
                        <label class="bg-warning text-white">Terminado</label>
                    @endif
                </td>
                <td><a class="btn btn-link text-success" href="">editar</a></td>
                <td><a class="btn btn-link text-muted" href="">ver</a></td>
                <td><a class="btn btn-link text-danger" href="">eliminar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="panel-footer">
    {{$solicitudes->links()}}
</div>
@endsection
