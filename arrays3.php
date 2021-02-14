<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=2">
</head>

<?php	
	if(!isset($_GEt['n_dias']))
		$_GET['n_dias']=1;
?>
<center><h1>Ejercicio 2</h1></center>
<h2>Crea un array con los dias de la semana y muestra el que te indique el usuario a través de un formulario con un campo de tipo select</h2>
<?php
//arrays
$dias = [
'nada',
'lunes',
'martes',
'miercoles',
'jueves',
'viernes',
'sabado',
'domingo',
];

?>
<form>
<button onclick="seleccionar()"> seleccionar </button>

<?php
$txt='<select name="n_dias">';
for ($i=1; $i<= 7; $i++)
$txt.='<option>'.$i.'</option>';
$txt.='</select>';
echo $txt;
?>
</form>
<?php
echo $dias[$_GET["n_dias"]];
?>

<div id="x" </div>

<div id="r" </div>
