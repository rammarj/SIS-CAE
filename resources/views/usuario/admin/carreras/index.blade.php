<div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                <h3>Carreras</h3>
            </div>
        </div>
        <div class="panel-body">
            
            {{-- Tabla--}}
            <table class="table table-responsive table-striped table-hover">
                <thead>
                <th>ID</th>
                <th>Carrera</th>
                <th colspan="3">Acciones</th>
                </thead>
                <tbody>
                    @foreach($carreras as $carrera)
                        <tr>
                            <td>{{$carrera->id}}</td>
                            <td>{{$carrera->carrera}}</td>
                            <td><a class="btn btn-link " href="">{{$usuario->rol->rol}}</a></td>
                            <td><a class="btn btn-link text-muted" href="{{ route('usuarios_mostrar', ['id'=>$usuario->id])  }}">ver</a></td>
                            <td><a class="btn btn-link text-danger" href="">eliminar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>  
        <div class="panel-footer">
            <a class="btn btn-warning" href="#">Agregar</a>
        </div>
    </div>