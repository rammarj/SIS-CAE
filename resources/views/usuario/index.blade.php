@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Mi menú
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="nav-item @if(Route::currentRouteName()=='usuarios_index') active @endif">
                                <a class="nav-link" href="{{ route('usuarios_index') }}">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Minutas</a>
                            </li>
                            <li class="nav-item @if(Route::currentRouteName()=='admin_solicitudes_index') active @endif">
                                <a class="nav-link" href="{{ route('admin_solicitudes_index') }}">Solicitudes</a>
                            </li>
                            <li class="nav-item @if(Route::currentRouteName()=='admin_configuracion') active @endif">
                                <a class="nav-link" href="{{ route('admin_configuracion') }}">Configuracion de sitio</a>
                            </li>
                            <li class="nav-item @if(Route::currentRouteName()=='perfil_usuario') active @endif">
                                <a class="nav-link" href="{{ route('perfil_usuario') }}">Mi perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cerrar mi sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="panel panel-default">
                    @yield('seccion')
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ url('js/admin/usuarios.js') }}"></script>
@endsection
