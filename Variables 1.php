<h1>Problemas</h1>

<h2>Las pelotas de tenis se envasan en tubos cilíndricos que contienen tres pelotas.Sabiendo que cada pelota tiene un diametro de 8cm,calcula el volumen del cilindro.</h2>
<form>
Pelotas<input placeholder="Pelotas" 
	value="3" id="Pelotas" name="Pelotas" onkeyup="calcular1()"/>
Diametro <input placeholder="Diametro"
	value="8"/ id="Diametro" name="Diametro" onkeyup="calcular1()">
<button onclick="calcular1()">Calcular</button>
</form>
<div id="longitud" style="
	padding:20px;
	background-color:green;
">
Resultado
</div>

<script>
function calcular1(){
	Pelotas=document.getElementById('Pelotas').value;
	Diametro=document.getElementById('Diametro').value;
	parseInt(Pelotas);
	parseInt(Diametro);
	longitud=(parseInt(Pelotas)*parseInt(Diametro));
	document.getElementById('longitud').innerHTML=longitud+' cm';
}
calcular1();
</script>

<?php
if(isset($_GET['Pelotas'])){
	$Pelotas = $_GET['Pelotas'];
	$Diametro = $_GET['Diametro'];
	echo 'longitud :'.($Pelotas*$Diametro); 
}
?>


<h2>Se desea vender un solar rectangular de 12.800 m2 dividiéndolo en tres parcelas rectangulares iguales. 
Si se quieren vallar las lindes de las tres parcelas (los bordes y las separaciones de las parcelas), determina 
las dimensiones del solar para que la longitud de la valla utilizada sea mínima</h2>
<form>
lado x <input placeholder="lado x" 
	value="53.33" id="x" name="lado x" onkeyup="calcular4()"/>
lado y <input placeholder="lado y"
	value="80"/ id="y" name="lado y" onkeyup="calcular4()">
<button onclick="calcular4()">Calcular</button>
</form>
<div id="superficie solar" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular4(){
	x=document.getElementById('x').value;
	y=document.getElementById('y').value;
	superficie solar=(sqrt((2*x*y)/9))*((x*y)/(3*x));
	document.getElementById('superficie solar').innerHTML=superficie solar+' m2';
}
calcular();
</script>

<?php
if(isset($_GET['x'])){
	$x = $_GET['x'];
	$y = $_GET['y'];
	echo 'superficie solar: '.(($sqrt((2*$x*$y)/9))*(($x*$y)/(3*$x)));
}
?>
