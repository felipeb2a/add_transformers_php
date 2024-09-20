<?php
	require_once('../includes/session.php');
	require_once('../dao/transformersDao.php');

	$status = '';

    //print test
	/*
	echo '[idTrafo: '.$_POST['idTrafo'].'] - [ potencia: '.$_POST['potencia'].'] - [fabricante: '.$_POST['fabricante'].'] - [anoFabricacao: '.$_POST['anoFabricacao'].']</br>

		[tensaoNominalPrimario: '.$_POST['tensaoNominalPrimario'].'] - [ tensaoNominalSecundario: '.$_POST['tensaoNominalSecundario'].'] - [base: '.$_POST['base'].'] - [numerodeSeriePrototipo: '.$_POST['numerodeSeriePrototipo'].']</br>

		[node: '.$_POST['node'].'] - [ x: '.$_POST['x'].'] - [y: '.$_POST['y'].'] - [coordenadaX: '.$_POST['coordenadaX'].']</br>


		[coordenadaY: '.$_POST['coordenadaY'].'] - [ healthTransformers: '.$_POST['healthTransformers'].'] - [isActive: '.$_POST['isActive'].'] - [calibrationVa: '.$_POST['calibrationVa'].']</br>

		[calibrationVb: '.$_POST['calibrationVb'].'] - [ calibrationVc: '.$_POST['calibrationVc'].'] - [calibrationIa: '.$_POST['calibrationIa'].'] - [calibrationIb: '.$_POST['calibrationIb'].'] - [calibrationIc: '.$_POST['calibrationIc'].']</br>
		';
	/* print end */

	//$sql = "insert into transformers (idTrafo, potencia, fabricante, anoFabricacao, tensaoNominalPrimario, tensaoNominalSecundario, base, numerodeSeriePrototipo, node, x, y, coordenadaX, coordenadaY, healthTransformers, isActive, calibrationVa, calibrationVb, calibrationVc, calibrationIa, calibrationIb, calibrationIc) VALUES ('".$_POST['idTrafo']."', '".$_POST['potencia']."', '".$_POST['fabricante']."', '".$_POST['anoFabricacao']."', '".$_POST['tensaoNominalPrimario']."', '".$_POST['tensaoNominalSecundario']."', '".$_POST['base']."', '".$_POST['numerodeSeriePrototipo']."', '".$_POST['node']."', '".$_POST['x']."', '".$_POST['y']."', '".$_POST['coordenadaX']."', '".$_POST['coordenadaY']."', '".$_POST['healthTransformers']."', '".$_POST['isActive']."', '".$_POST['calibrationVa']."', '".$_POST['calibrationVb']."', '".$_POST['calibrationVc']."', '".$_POST['calibrationIa']."', '".$_POST['calibrationIb']."', '".$_POST['calibrationIc']."')";

	
	$sql = "insert into transformers (idTrafo, potencia, fabricante, anoFabricacao, tensaoNominalPrimario, tensaoNominalSecundario, base, numerodeSeriePrototipo, node, x, y, isActive, calibrationVa, calibrationVb, calibrationVc, calibrationIa, calibrationIb, calibrationIc) VALUES ('".$_POST['idTrafo']."', '".$_POST['potencia']."', '".$_POST['fabricante']."', '".$_POST['anoFabricacao']."', '".$_POST['tensaoNominalPrimario']."', '".$_POST['tensaoNominalSecundario']."', '".$_POST['base']."', '".$_POST['numerodeSeriePrototipo']."', '".$_POST['node']."', '".$_POST['x']."', '".$_POST['y']."', '".$_POST['isActive']."', '".$_POST['calibrationVa']."', '".$_POST['calibrationVb']."', '".$_POST['calibrationVc']."', '".$_POST['calibrationIa']."', '".$_POST['calibrationIb']."', '".$_POST['calibrationIc']."')";

	$status = saveTransformers($sql);
	
	include_once('../paginas/page-status.php'); //inclui pagina de status envio form
	
	/* end*/
?>