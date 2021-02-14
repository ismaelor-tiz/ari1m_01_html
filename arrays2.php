<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=2">
</head>

<center><h1>Ejercicio </h1></center>
<h2>Crea un array con los días de la semana y muestra el que te indique el usuario a través de un formulario con un campo de tipo select</h2>
<?php
//arrays
$mes = [
'caca',
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
$txt='<select name="n_mes">';
for ($i=1; $i<= 12; $i++)
$txt.='<option>'.$i.'</option>';
$txt.='</select>';
echo $txt;
?>
</form>
<?php
echo $mes[$_GET["n_mes"]];
?>

<div id="x" </div>

<div id="r" </div>

<center><h1>Ejercicio 2</h1></center>
<h2>Crea un array con los meses del año y muestra el que te indique el usuario a través de un formulario con un campo de tipo select</h2>
<?php
//arrays
$mes = [
'caca',
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
$txt='<select name="n_mes">';
for ($i=1; $i<= 12; $i++)
$txt.='<option>'.$i.'</option>';
$txt.='</select>';
echo $txt;
?>
</form>
<?php
echo $mes[$_GET["n_mes"]];
?>

<div id="x" </div>

<div id="r" </div>
