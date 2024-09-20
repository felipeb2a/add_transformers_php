<?php
	require_once('../includes/session.php');
	require_once('../dao/usersPhpDao.php');

	$status = '';

	// The unencrypted password to be hashed 
	$unencrypted_password = $_POST['password']; 
	  
	// The hash of the password can be saved in the database
	$hash = password_hash($unencrypted_password, PASSWORD_DEFAULT); 
	  
	// Print the generated hash code
	//echo "Generated hash code: ".$hash; 

    /* print test */
	//echo '[name: '.$_POST['name'].'] - [ email: '.$_POST['email'].'] - [password: '.$_POST['password'].'] - [isActive: '.$_POST['isActive'].']</br>';
	
	/* save database */
	$sql = "insert into usersPhp (name, email, password, isActive) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$hash."', '".$_POST['isActive']."')";

	$status = saveUsersPhp($sql);
	
	include_once('../paginas/page-status.php'); //inclui pagina de status envio form
	
	/* end */
?>