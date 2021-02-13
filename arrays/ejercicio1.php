<!DOCTYPE html> 
	<html lang="es">
	<head>
	<title> Arrays </title>
	</head>
	<body style="
				padding-left:50px;
				">	
	<h1> ARRAYS </h1>
			
			<h2> Muestra el listado ordenado de días de la semana que contengan la letra R </h2>
			</div>
	<div style="
										height:2em;">
						</div>
	<div id="dia" style="
						display:inline-block;
						">
					
	</div>
	<div style="
										height:2em;">
						</div>
			<script>
semana = [
	'Lunes',
	'Martes',
	'Miercoles',
	'Jueves',
	'Viernes',
	'Sabado',
	'Domingo',
];


//dias de la semana con la R
"Dias de la samana Que tiene la R:<br>";
foreach ($semana as $c){
	if(str.indexOf($c,"r")){
		document.getElementById('S').innerHTML = "$c <br>";
</script>
<?php
$semana = [
	'Lunes',
	'Martes',
	'Miercoles',
	'Jueves',
	'Viernes',
	'Sabado',
	'Domingo',
];


//dias de la semana con la R
echo "Dias de la samana Que tiene la R:<br>";
foreach ($semana as $c){
	if(strpos($c,"r")){
		echo "$c <br>";
	}
}

?>
				
			
			
	</body>
 </html>