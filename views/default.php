<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h2>Notas de Alumnos</h2>
				<form>
					<div class="form-group">
						<label for="id_alumno">ID del Alumno:</label>
						<input type="text" class="form-control" id="id_alumno" name="id_alumno">
					</div>
					<div class="form-group">
						<label for="nombre_alumno">Nombre del Alumno:</label>
						<input type="text" class="form-control" id="nombre_alumno" name="nombre_alumno">
					</div>
					<div class="form-group">
						<label for="nota_matematicas">Nota de Matemáticas:</label>
						<input type="number" step="0.01" class="form-control" id="nota_matematicas" name="nota_matematicas">
					</div>
					<div class="form-group">
						<label for="nota_fisica">Nota de Física:</label>
						<input type="number" step="0.01" class="form-control" id="nota_fisica" name="nota_fisica">
					</div>
					<div class="form-group">
						<label for="nota_programacion">Nota de Programación:</label>
						<input type="number" step="0.01" class="form-control" id="nota_programacion" name="nota_programacion">
					</div>
					<button type="button" class="btn btn-primary" id="calcular">Calcular</button>
				</form>
				<br>
				<h2>Resultados:</h2>
				<ul>
				<li><strong>Nota promedio de matemáticas:</strong><div id="promedio"></div></li>
				<li><strong>Nota promedio de física:</strong> <div id="promedioFisica"></div></li>
				<li><strong>Nota promedio de programación:</strong> <div id="promedioProgramacion"></div></li>
				<li><strong>Número de alumnos aprobados en matemáticas: </strong><div id="AprobadosMatematicas"></div></li>
				<li><strong>Número de alumnos aprobados en física:</strong> <div id="AprobadosFisica"></div></li>
				<li><strong>Número de alumnos aprobados en programación:</strong> <div id="AprobadosProgramacion"></div></li>
				<li><strong>Número de alumnos aplazados: </strong><div id="Aplazados"></div></li>
				<li><strong>Número de alumnos que aprobaron todas las materias:</strong> <div id="AprobaronTodas"></div></li>
				<li><strong>Número de alumnos que aprobaron una sola materia:</strong> <div id="AprobaronUna"></div></li>
				<li><strong>Número de alumnos que aprobaron dos materias:</strong> <div id="AprobaronDos"></div></li>
				<li><strong>Nota máxima en matemáticas:</strong> <div id="NotaMaximaMatematicas"></div></li>
			</div>
		</div>
	</div>