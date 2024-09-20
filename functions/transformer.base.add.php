<?php
	require_once('../includes/session.php');
	require_once('../dao/transformersBaseDao.php');

	$status = '';

    /* print test */
	//echo '[base: '.$_POST['base'].']</br>';
	
	/* save database */
	$sql = "insert into transformersBase (base) VALUES ('".$_POST['base']."')";

	$status = saveTransformerBase($sql);
	
	include_once('../paginas/page-status.php'); //inclui pagina de status envio form
	
	/* end */
?>