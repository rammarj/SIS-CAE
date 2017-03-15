@extends('usuario.index')

@section('seccion')
<div class="panel-heading">
    <div class="panel-title">
        <strong class="h2">Usuarios del sistema</strong>
    </div>
</div>
<div class="panel-body">
    {{-- Aqui van los datos del usuario - Accede a los atributos con la variable --}}
    <form class="form-horizontal" role="form" method="POST" action="{{ route('usuarios_guardar') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Nombre</label>

            <div class="col-md-6">
                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                @if ($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('apellido_paterno') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Apellido paterno</label>

            <div class="col-md-6">
                <input id="apellido_paterno" type="text" class="form-control" name="apellido_paterno" value="{{ old('apellido_paterno') }}" required autofocus>

                @if ($errors->has('apellido_paterno'))
                    <span class="help-block">
                        <strong>{{ $errors->first('apellido_paterno') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('apellido_materno') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Apellido materno</label>

            <div class="col-md-6">
                <input id="apellido_materno" type="text" class="form-control" name="apellido_materno" value="{{ old('apellido_materno') }}" required autofocus>

                @if ($errors->has('apellido_materno'))
                    <span class="help-block">
                        <strong>{{ $errors->first('apellido_materno') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        @if(Route::currentRouteName()=='usuarios_crear')
        <div class="form-group{{ $errors->has('rol') ? ' has-error' : '' }}">
            <label for="rol" class="col-md-4 control-label">Rol del usuario</label>

            <div class="col-md-6">
                <select name="rol">
                    <option selected value="0">Selecciona el rol</option>
                    @foreach ($roles as $rol)                    
                        <option value="{{$rol->id}}">{{$rol->rol}}</option>
                    @endforeach
                </select>

                @if ($errors->has('rol'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rol') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Contraseña</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        
        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
            </div>
        </div>

        @endif

        <div class="form-group">
            <div class="col-md-4 col-md-offset-8">
                <button type="submit" class="btn btn-primary">
                    Registrar
                </button>
            </div>
        </div>
    </form>
</div>
<div class="panel-footer">
    @if(Route::currentRouteName()=='usuarios_mostrar')
        <span class="left">
            <a class="btn btn-success" href="">Editar</a>
        </span>
        <span class="right col-lg-offset-9">
            <a class="btn btn-danger" href="">Eliminar</a>
        </span>
    @endif
</div>
@endsection
