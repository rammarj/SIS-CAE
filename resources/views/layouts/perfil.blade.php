
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Nombre</label>

            <div class="col-md-6">
                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ ($usuario)? $usuario->nombre : old('nombre') }}" required autofocus>

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
                <input id="apellido_paterno" type="text" class="form-control" name="apellido_paterno" value="{{ ($usuario)? $usuario->apellido_paterno : old('apellido_paterno') }}" required autofocus>

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
                <input id="apellido_materno" type="text" class="form-control" name="apellido_materno" value="{{ ($usuario)? $usuario->apellido_materno :  old('apellido_materno') }}" required autofocus>

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
                <input id="email" type="email" class="form-control" name="email" value="{{ ($usuario)? $usuario->email :  old('email') }}" required autofocus>

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
                <select name="rol" class="form-control">
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

        {{-- por si es alumno --}}
        @if(old('matricula'))
        <div class="form-group{{ $errors->has('matricula') ? ' has-error' : '' }}">
            <label for="matricula" class="col-md-4 control-label">Matrícula</label>

            <div class="col-md-6">
                <input id="matricula" type="text" maxlength="20" class="form-control" name="matricula" value="{{ old('matricula') }}" required autofocus>

                @if ($errors->has('matricula'))
                    <span class="help-block">
                        <strong>{{ $errors->first('matricula') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        @endif

        {{-- por si hay carrera. --}}
        @if(old('carrera'))
        <div class="form-group{{ $errors->has('carrera') ? ' has-error' : '' }}">
            <label for="carrera" class="col-md-4 control-label">Carrera</label>

            <div class="col-md-6">
                <select class="form-control" name="carrera">
                    <option value="0">Selecciona una carrera</option>
                    @foreach($carreras as $carrera)
                    <option value="{{$carrera->id}}">{{$carrera->carrera}}</option>
                    @endforeach
                </select>

                @if ($errors->has('carrera'))
                    <span class="help-block">
                        <strong>{{ $errors->first('carrera') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        @endif

        {{-- por si hay tutor. --}}
        @if(old('tutor'))
        <div class="form-group{{ $errors->has('tutor') ? ' has-error' : '' }}">
            <label for="tutor" class="col-md-4 control-label">Carrera</label>

            <div class="col-md-6">
                <select class="form-control" name="tutor">
                    <option value="0">Selecciona una carrera</option>
                    @foreach($tutores as $tutor)
                    <option value="{{$tutor->id}}">{{$tutor->usuario->nombre.' '.$tutor->usuario->apellido_paterno.' '.$tutor->usuario->apellido_materno}}</option>
                    @endforeach
                </select>

                @if ($errors->has('tutor'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tutor') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        @endif

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
