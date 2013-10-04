<?php
	if ($_POST) {
			
	}

?>
<html>
<head>
	<title>Tarea 3</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="index.js"></script>
</head>
<body>
	<fieldset>
		<legend>Calculo de indice</legend>
		<form method="post" action="">			
			<div id="mainDiv">			
				<table id="tableForm">
					<thead>
						<tr>
							<th>Matricula</th>
							<th>Nombre</th>
							<th>N1</th>
							<th>N2</th>
							<th>N3</th>
							<th>N4</th>										
							<th>Promedio</th>										
							<th>EQ</th>
							<th id="dropElement">Eliminar</th>													
						</tr>
					</thead>
				</table>
			</div>
			<input type="submit" value="Guardar">
			<input type="button" value="Ingresar" onclick="insertar();">
		</form>
	</fieldset>
</body>
</html>