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
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Minutas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Solicitudes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Configuracion de sitio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mi perfil</a>
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

@endsection