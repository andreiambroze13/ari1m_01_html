<!Doctype html>
<html>
    <head>
       <title>Problemas matematicas</title>
    </head>
	<body style="
	padding-left:100px;
				
				">
  <h1 style="text-align:center">Problemas matemáticos</h1>
   <div style="
    display:inline-block;
	border-style:inset;
	padding:10px;
	width:800px;
	
	">
		<h2 style=" text-decoration:underline;">Ejercicio 1</h2>
		Halla el área de un rectángulo cuya diagonal mide 10 cm y uno de sus lados 6 cm
		<form>
		<input id="Diagonal" name="Diagonal" placeholder="Diagonal" value="10" onkeyup="calcular()"/>
		<input id="Lado" name="Lado" placeholder="Lado" value="6" onkeyup="calcular()"/>
		<button onclick="calcular()">Calcular</button>
		</form>
		<span style="font-weight:bold;">
		Resultado:
		</span>
		<div id="area">Resultado</div>
		<script>
		function calcular(){
			Diagonal=document.getElementById('Diagonal').value;
			Lado=document.getElementById('Lado').value;
			Lado2= Math.sqrt((Math.pow(Diagonal,2))-(Math.pow(Lado,2)));
			Area= Lado2*Lado;
			document.getElementById('area').
			innerHTML='El área es ' +Area+ 'cm2.';
			}
			calcular();
		</script>
		<?php
		if (isset(
		$_GET ['Diagonal'])) {$Diagonal=$_GET['Diagonal'];
		$Lado=$_GET['Lado'];
		$Lado2=round(sqrt((pow($Diagonal,2))-(pow($Lado,2))));
			$Area=$Lado2*$Lado;
			echo 'Resultado: '.'El área del rectángulo es '.$Area.'cm2.';
		}
		?>
		</div>
			<div style=" height:2em;">
	</div>

		<div style="
    display:inline-block;
	border-style:inset;
	padding:10px;
	width:800px;
	
	">
		
		<h2 style=" text-decoration:underline;">Ejercicio 2</h2>
		El lado de un rombo mide 10 cm y su diagonal menor 12 cm. Halla su área
		<form>
		<input id="Diagonal menor" name="Diagonal menor" placeholder="Diagonal menor" value="12" onkeyup="calcular2()"/>
		<input id="Lado1" name="Lado1" placeholder="Lado1" value="10" onkeyup="calcular2()"/>
		<button onclick="calcular2()">Calcular</button>
		</form>
		<div id="area">Resultado</div>
		<script>
		function calcular2(){
			Diagonal=document.getElementById('Diagonal menor').value;
			Lado1=document.getElementById('Lado1').value;
			lado2=Diagonal menor/2;
			Area=Math.sqrt((Math.pow(Lado1,2))-(Math.pow(Lado2,2)));
			document.getElementById('Area').
			innerHTML='El área es ' +Area+ 'cm2.';
			}
			calcular2();
		
		</script>
		<?php
			if(isset (
			$_GET['Diagonal menor'])) {$P1=$_GET['Diagonal menor'];
			$Lado2=$_GET['Lado2'];
			$lado2=Diagonalmenor/2;
			$Area=sqrt((pow(Lado1,2))-(pow(Lado2,2)));
			echo 'Resultado: el area es '.$Area.' €';
			}
		?>
		</div>
			<div style=" height:2em;">
	</div>

		
    
	<div style="
    display:inline-block;
	border-style:inset;
	padding:10px;
	width:800px">
	
		<h2 style=" text-decoration:underline;">Ejercicio 3</h2>
		Compramos una camisa y unos pantalones por los que tendríamos que pagar 110 euros.
		Nos descuentan un 20 % en la camisa, un 10% en los pantalones y nos cobran 93 euros. 
		¿Cuánto costaba la camisa y cuánto los pantalones?
		<form>
		<input id="P1" name="P1" placeholder="Precio inicial" value="110" onkeyup="calcular3()"/>
		<input id="P2" name="P2" placeholder="Precio final" value="93" onkeyup="calcular3()"/>
		<input id="DC" name="DC" placeholder="Descuento camisa" value="20" onkeyup="calcular3()"/>
		<input id="P2" name="DP" placeholder="Descuent pantalón" value="10" onkeyup="calcular3()"/>
		<button onclick="calcular()">Calcular</button>
		</form>
		<div id="COSTO">Resultado</div>
		<script>
		function calcular3(){
			P1=document.getElementById('P1').value;
			P2=document.getElementById('P2').value;
			DC=1-(20/100);
			DP=1-(10/100);
			p=Math.round((P2-(P1*DC))/(DP-DC));
			c=Math.round(P1-p);
			document.getElementById('COSTO').
			innerHTML= 'La camisa costaba '+c+' €, y el pantalón costaba '+p+' €.';
		}
		calcular3();
		</script>
		<?php
			if(isset (
			$_GET['P1'])) {$P1=$_GET['P1'];
			$P2=$_GET['P2'];
			$DC=$_GET['DC'];
			$DP=$_GET['DP'];
			$DC=1-(20/100);
			$DP=1-(10/100);
			$p=round(($P2-($P1*$DC))/($DP-$DC));
			$c=round($P1-$p);
			echo 'Resultado: La camisa costaba '.$c.' €, y el pantalón costaba '.$p.' €.';
			}
		?>
		</div>
			<div style=" height:2em;">
	</div>

		
		<div style="
    display:inline-block;
	border-style:inset;
	padding:10px;
	width:800px;">
		<h2 style=" text-decoration:underline;">Ejercicio 4</h2>
		De entre todos los triánculos rectángulos de área 8 cm2,
		determina las dimensiones del que tiene la hipotenusa de menor longitud.
		<form>
		<input id="Area4" name="Area4" placeholder="Área" value="8" onkeyup="calcular4()"/>
		<button onclick="calcular4()">Calcular</button>
		</form>
		<div id="area4">Resultado</div>
		<script>
		function calcular4(){
			Area4=document.getElementById('Area4').value;
			Lado4=Math.sqrt(2*Area4);
			hipo=(Math.sqrt( (Math.pow(Lado4,2))+(Math.pow(Lado4,2))));
			hipo=Math.round(hipo*100)/100;
			document.getElementById('area4').
			innerHTML= 'El triángulo de menor hipotenusa sería el de lado '+Lado4+'cm, cuya hipotenusa es '+hipo+' cm.';
		}
			calcular4();
		</script>
		<?php
			if(isset (
			$_GET['Area4'])) {$Area4=$_GET['Area4'];
			$Lado4=sqrt(2*$Area4);
			$hipo=(sqrt( (pow($Lado4,2))+(pow($Lado4,2))));
			$hipo=round($hipo*100)/100;
			
			echo 'Resultado: La camisa costaba '.$Lado4.' cm, y el pantalón costaba '.$hipo.' cm.';
			}
		?>
		
		
	</div>
  </body>
  </html>