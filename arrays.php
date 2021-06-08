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

<div id="x"> </div>

<div id="r"> </div>

<center><h1>ejercicio 2 </h1></center>
<h2>Crea un array con el nombre de tus compañeros, en qué puesto se sienta y reubícalos por su nombre de pila mostrando ambas tablas</h2>
<form>
<button onclick="seleccionar()">seleccionar </button>


</form>
<?php

// arrays

$COMPANEROS = [
	'Andrei',
	'Fabián',
	'Héctor',
	'Gabi',
	'Nuri',
	'Agus',
	'Dani',
	'Jesús',
	'Isma',
	'Pepe',	
	'Sañudo',
	'Rodras',
	'Tresgallo',
	'Varela',
	'Darius',
	'Ivan',
	'Teje',
]; 


$puesto=[
	'1',
	'2',
	'3',
	'4',
	'5',
	'6',
	'7',
	'8',
	'9',
	'10',	
	'11',
	'12',
	'13',
	'14',
	'15',
	'16',
	'17',
];

	sort ($COMPANEROS);
for($i=0; $i<count($COMPANEROS);$i++){
	
	echo $puesto[$i].'-';
	echo $COMPANEROS[$i].'<br/>';
		echo'<br>';
}



?>
<center><h3>ejercicio 2 </h3></center>
<h4>Crea un array con el nombre de tus compañeros, en qué puesto se sienta y reubícalos por su nombre de pila mostrando ambas tablas</h4>
<div id="r"></div>

<script>

companeros =[
	'Andrei',
	'Fabián',
	'Héctor',
	'Gabi',
	'Nuri',
	'Agus',
	'Dani',
	'Jesús',
	'Isma',
	'Pepe',	
	'Sañudo',
	'Rodras',
	'Tresgallo',
	'Varela',
	'Darius',
	'Ivan',
	'Teje',
]; 
puesto=[
	'1',
	'2',
	'3',
	'4',
	'5',
	'6',
	'7',
	'8',
	'9',
	'10',	
	'11',
	'12',
	'13',
	'14',
	'15',
	'16',
	'17',
];
txt="";
for (i in companeros)
	txt+=companeros[i]+'<br/>';
document.getElementById('r').innerHTML=txt;

</script>


	<h1> Potencias del 2 </h2>
<?php

    $tabla=[];

    for($i=1; $i<=20; $i++) {
        $potencia = 2**$i; 
        $tabla[ ]= $potencia;
	}
?>

<table border="1" width="20%">
        <caption>Potencias del 2</caption>
<?php
    foreach ($tabla as $i=>$dato) {
        echo "<tr><td> 2<sup>". ($i+1) ."</sup>: ". $dato . "</td></tr>";
    }
?>
    </table>

