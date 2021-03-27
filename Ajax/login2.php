<?php


$el_usuario=isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];

$el_array = [];

if ($el_usuario=="Pepe") {
  
	$el_array['Nombre'] = "Pepe";
	$el_array['Apellido'] = "Gómez";
	$el_array['Edad'] = "28";
	$json = json_encode($el_array);
	echo $json;

} else {
	if ($el_usuario=="Juan") {
  		$el_array['Nombre'] = "Juan";
		$el_array['Apellido'] = "García";
		$el_array['Edad'] = "43";
		$json = json_encode($el_array);
		echo $json;
	}
	else { 
		$json = json_encode("Error");
		echo $json;
	}
}

?>