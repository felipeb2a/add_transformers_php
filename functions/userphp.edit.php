<?php
	require_once('../includes/session.php');
	include_once('../dao/usersPhpDao.php');

	$resultSelectUser = selectUser($_POST['id']);
	$passwd = '';
	$sql = '';
	$status = '';

	while($userPhp = mysqli_fetch_array($resultSelectUser)){
		$passwd = $userPhp['password'];
	}

	if (strcmp($passwd, $_POST['password']) !== 0) {
    	//echo '$var1 is not equal to $var2 in a case sensitive string comparison';

		// The unencrypted password to be hashed 
		$unencrypted_password = $_POST['password']; 
		  
		// The hash of the password can be saved in the database
		$hash = password_hash($unencrypted_password, PASSWORD_DEFAULT);

		// Print the generated hash code
		//echo "Generated hash code: ".$hash; 

		$sql = "update usersPhp SET name = '".$_POST['name']."', email = '".$_POST['email']."', password = '".$hash."', isActive = '".$_POST['isActive']."' where  id = '".$_POST['id']."'";

	} else{
		$sql = "update usersPhp SET name = '".$_POST['name']."', email = '".$_POST['email']."', isActive = '".$_POST['isActive']."' where  id = '".$_POST['id']."'";
	}

    /* print test */
	//echo '[name: '.$_POST['name'].'] - [ email: '.$_POST['email'].'] - [password: '.$_POST['password'].'] - [isActive: '.$_POST['isActive'].']</br>';

	$status = saveUsersPhp($sql);
	
	include_once('../paginas/page-status.php'); //inclui pagina de status envio form
	
	/* end */

?>