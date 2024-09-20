<?php
	require_once('../includes/session.php');
	require_once('../dao/transformersDao.php');

	$status = '';

    //print test
	/*echo '[id: '.$_POST['id'].'] - [idTrafo: '.$_POST['idTrafo'].'] - [ potencia: '.$_POST['potencia'].'] - [fabricante: '.$_POST['fabricante'].'] - [anoFabricacao: '.$_POST['anoFabricacao'].']</br>

		[tensaoNominalPrimario: '.$_POST['tensaoNominalPrimario'].'] - [ tensaoNominalSecundario: '.$_POST['tensaoNominalSecundario'].'] - [base: '.$_POST['base'].'] - [numerodeSeriePrototipo: '.$_POST['numerodeSeriePrototipo'].']</br>

		[node: '.$_POST['node'].'] - [ x: '.$_POST['x'].'] - [y: '.$_POST['y'].'] - [coordenadaX: '.$_POST['coordenadaX'].']</br>


		[coordenadaY: '.$_POST['coordenadaY'].'] - [ healthTransformers: '.$_POST['healthTransformers'].'] - [isActive: '.$_POST['isActive'].'] - [calibrationVa: '.$_POST['calibrationVa'].']</br>

		[calibrationVb: '.$_POST['calibrationVb'].'] - [ calibrationVc: '.$_POST['calibrationVc'].'] - [calibrationIa: '.$_POST['calibrationIa'].'] - [calibrationIb: '.$_POST['calibrationIb'].'] - [calibrationIc: '.$_POST['calibrationIc'].']</br>
		';
	*/
	
	$sql = "update transformers SET idTrafo = '".$_POST['idTrafo']."', potencia = '".$_POST['potencia']."', fabricante = '".$_POST['fabricante']."', anoFabricacao = '".$_POST['anoFabricacao']."', tensaoNominalPrimario = '".$_POST['tensaoNominalPrimario']."', tensaoNominalSecundario = '".$_POST['tensaoNominalSecundario']."', base = '".$_POST['base']."', numerodeSeriePrototipo = '".$_POST['numerodeSeriePrototipo']."', node = '".$_POST['node']."', x = '".$_POST['x']."', y = '".$_POST['y']."', isActive = '".$_POST['isActive']."', calibrationVa = '".$_POST['calibrationVa']."', calibrationVb = '".$_POST['calibrationVb']."', calibrationVc = '".$_POST['calibrationVc']."', calibrationIa = '".$_POST['calibrationIa']."', calibrationIb = '".$_POST['calibrationIb']."', calibrationIc = '".$_POST['calibrationIc']."' where  id = '".$_POST['id']."'";

	$status = saveTransformers($sql);
	
	include_once('../paginas/page-status.php'); //inclui pagina de status envio form
	
	/* end */

?>