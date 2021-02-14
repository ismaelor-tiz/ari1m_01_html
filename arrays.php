<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=2">
</head>
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