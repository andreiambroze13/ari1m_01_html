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
	<h2>Crea un array con los meses del año y muestra uno de los meses seleccionándolo al azar:</h2>
	
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
				$mes = [
					'Enero',
					'Febrero',
					'Marzo',
					'Abril',
					'Mayo',
					'Junio',
					'Julio',
					'Agosto',
					'Septiembre',
					'Octubre',
					'Noviembre',
					'Diciembre',
					
						];
			echo "Mes en php : ";
			echo $mes[rand(0,15)];
			?>
			<script>

				mes = [
					'Enero',
					'Febrero',
					'Marzo',
					'Abril',
					'Mayo',
					'Junio',
					'Julio',
					'Agosto',
					'Septiembre',
					'Octubre',
					'Noviembre',
					'Diciembre',
				];
			c=Math.round(Math.random()*(mes.length-1));
			document.getElementById('r').
			innerHTML= 'meses en JS: '+mes[c];
			</script>

			
	</body>
 </html>