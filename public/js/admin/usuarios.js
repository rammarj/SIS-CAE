
use: 'strict';
window.onload = function(){
	var select = document.querySelector("select[name='rol']");
	select.addEventListener('change', function(){ /*agregar el evento de cambio*/
		var numSeleccionado = select.value;
		var opcion = select.querySelector("option[value='"+numSeleccionado+"']");
		seleccion = opcion.text.toLowerCase();
		if (seleccion == 'alumno' || seleccion == 'coordinador') {
			var htmlMatricula = '<div class="form-group">\
									<label for="matricula" class="col-md-4 control-label">Matrícula</label>\
						    		<div class="col-md-6">\
						        	<input id="matricula" type="text" maxlength="20" class="form-control" name="email" required autofocus>\ 
						    	</div>\
							</div>';

			var htmlCarrera = '<div class="form-group">\
								<label for="carrera" class="col-md-4 control-label">Carrera</label>\
					    		<div class="col-md-6">\
					    			<select class="form-control" name="carrera">\
                    					<option value="0">Selecciona una carrera</option>';
            //traer todas las carreras dicponibles

			htmlCarrera += '</select></div></div>';
			if (seleccion == 'alumno') {
				
			}
			else if (seleccion == 'coordinador') {

			}
		}
	});
};
