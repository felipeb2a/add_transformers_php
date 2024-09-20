<?php
	require_once('../includes/session.php');
	require_once('../dao/transformersBaseDao.php');

	$status = '';

	/* print test */
	//echo '[base: '.$_POST['base'].']</br>';

	$sql = "update transformersBase SET base = '".$_POST['base']."' where id = '".$_POST['id']."'";  

	$status = saveTransformerBase($sql);
	
	include_once('../paginas/page-status.php'); //inclui pagina de status envio form
	
	/* end */

?>