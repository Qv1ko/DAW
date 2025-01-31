<?php
	//Tomamos el valor del input procedente de la URL
	$cicloBuscado = $_REQUEST["ciclo"];

	$datos = json_decode('[
		{
			"codCiclo": "IFC01B",
			"desCiclo": "Informática y Comunicaciones",
			"nivel": "GB"
		},
		{
			"codCiclo": "IFC01S",
			"desCiclo": "Administración de Sistemas Informáticos en Red",
			"nivel": "GS"
		},	{
			"codCiclo": "IFC02S",
			"desCiclo": "Desarrollo de Aplicaciones Multiplataforma",
			"nivel": "GS"
		},	{
			"codCiclo": "IFC03S",
			"desCiclo": "Desarrollo de Aplicaciones WEB",
			"nivel": "GS"
		}
	]');

	$mi_ciclo = "";
	foreach($datos as $ciclo){
		if ($ciclo->codCiclo === $cicloBuscado) {
			$mi_ciclo = $ciclo;
		}
	}

	if ($mi_ciclo === ""){
		echo (json_encode("No encontrado"));
	} else {
		echo (json_encode($mi_ciclo));
	}
?>