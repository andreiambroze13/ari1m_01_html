<!DOCTYPE html> 
	<html lang="es">
	<head>
	<title> Arrays </title>
	</head>
	<body style="
				padding-left:50px;
				">	
	<h1> ARRAYS </h1>
	<div>
	<h2>Crea un array con los días de la semana y muestra uno de los días seleccionándolo al azar:</h2>
	
	</div>
	<div style="
			height:2em;">
						</div>
	<div id="r" style="
						display:inline-block;
						">
	</div>
	<div style="
										height:2em;">
						</div>
			<?php
				$Dia = [
					'Lunes',
					'Martes',
					'Miercoles',
					'Jueves',
					'Viernes',
					'Sabado',
					'Domingo',
					
						];
			echo "Dia en php : ";
			echo $Dia[rand(0,6)];
			?>
			<script>

				Dia = [
					'Lunes',
					'Martes',
					'Miercoles',
					'Jueves',
					'Viernes',
					'Sabado',
					'Domingo',
				];
			c=Math.round(Math.random()*(Dia.length-1));
			document.getElementById('r').
			innerHTML= 'Dia en JS: '+Dia[c];
			</script>

			
	</body>
 </html>