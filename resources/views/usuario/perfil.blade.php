@extends('usuario.index')

@section('seccion')
<div class="panel-heading">
    <div class="panel-title">
        <strong class="h2">Mi perfil</strong>
    </div>
</div>
<div class="panel-body">
    
    {{-- Aqui van los datos del usuario - Accede a los atributos con la variable --}}
    <form class="form-horizontal" role="form" method="POST" action="{{ route('usuarios_guardar') }}">
        @include('layouts.perfil', ['roles' => $roles, 'carreras'=>$carreras ])
    </form>


</div>
<div class="panel-footer">
        <span class="left">
            <a class="btn btn-warning" href="">Editar</a>
        </span>
        <span class="right col-lg-offset-9">
            <a class="btn btn-success" href="">Guardar</a>
        </span>
</div>
@endsection
