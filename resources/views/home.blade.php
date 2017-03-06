@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="panel">
        <!--<img class="card-img-top" src="..." alt="Card image cap">-->
            <div class="panel-body">
                <blockquote class="blockquote bg-faded text-warning">
                    <h3>Preguntas frecuentes (FAQ)</h3>
                </blockquote>
                <ol>
                    <li>
                        <div class="font-weight-bold font-italic h5">¿Que es la CAE?</div>
                        <p>
                            La CAE es la Comisión de Asuntos Escolares, que trata cualquier situación de carácter academico y/o administrativo no previsto en el reglamento o alguna otra legislación aplicable.
                        </p>
                    </li>
                    <li>
                        <div class="font-weight-bold font-italic h5">¿Quienes integran la CAE?</div>
                        <p>
                        <ul>
                            <li>El Director(a) de la División de Estudios Profesionales, en calidad de Presidente(a).</li>
                            <li>Los Directores(as) de cada uno de los Programas Educativos del nivel de licenciatura que oferte la Universidad,  en calidad de Vocales.</li>
                            <li>El Jefe(a) del Departamento de Servicios Escolares, en calidad de Vocal.</li>
                            <li>Un alumno(a) regular con promedio de 9.0 o superior a propuesta de la mesa directiva de la sociedad de alumnos(as), en calidad de Vocal.</li>
                            <li>Un Secretario(a) Técnico a propuesta del Presidente(a).</li>
                        </ul>
                        </p>
                    </li>
                    <li>
                        <div class="font-weight-bold font-italic h5">Atribuciones de la CAE</div>
                        <p>
                        <ul>
                            <li>Acordar con el Consejo de Calidad, las politicas para la operación de la CAE, con sujeción a lo dispuesto por el Reglamento y la restante legislación de la </li>
                            <li>Llevar a cabo todos los estudios y acciones que le permitan conocer y dictaminar los casos que se sometan a su consideración</li>
                            <li>Solicitar al DSE la suspensión temporal de los derechos del alumno(a), en caso de presentar conductas inapropiadas, hasta determinar su situación definitiva.</li>
                            <li>Dar a conocer los dictámenes a los involucrados, en un plazo no mayor a diez días hábiles a partir de la terminación de la sesión.</li>
                            <li>Vigilar el estricto cumplimiento de los dictámenes formulados.</li>
                            <li>Las demás que le confieran otros ordenamientos legales de la Universidad.</li>
                        </ul>
                        </p>
                    </li>
                    <li>
                        <div class="font-weight-bold font-italic h5">Referencia</div>
                        <p>
                            La referencia sobre la CAE fue tomada del <a href="####">Reglamento academico de nivel licenciatura</a> que puede consultar si así lo desea.
                        </p>
                    </li>
                </ol>
                <br>
                <blockquote class="blockquote h1 bg-faded text-warning h5">
                    <h3><a name="formatos" id="formatos">Formatos</a></h3>
                </blockquote>
                <ul>
                    <li><a href="{{url('formatos/0.-Ejemplos_Formatos de solicitud CAE.docx')}}">Ejemplos_Formatos de solicitud CAE</a></li>
                    <li><a href="{{url('formatos/1.-Peticion de alumno.pdf')}}">Petición de alumno.pdf</a></li>
                    <li><a href="{{url('formatos/2.-Minuta 14va Reunion Ordinaria CAE.pdf')}}">Minuta 14va Reunión Ordinaria CAE</a></li>
                    <li><a href="{{url('formatos/0.-Ejemplos_Formatos de solicitud CAE.docx')}}">Dictamen</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
