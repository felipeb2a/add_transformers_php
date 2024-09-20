<?php
	require_once('../includes/session.php');

	//valida logado
	require_once('../functions/validalogado.php');

?>

<!DOCTYPE html>
<html>
	 <head>
	     <meta charset="utf-8">
	     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	     <title>Cadastro Dispositivos</title>
	     <link rel="shortcut icon" href="../assets/img/header/logo.png" />
		 <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	     <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
	     <link rel="stylesheet" href="../assets/css/style.css">
	     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
	 </head>

	 <body>
	     <nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar fixed-top">
	         <div class="container">
				<!--<a class="navbar-brand logo" href="#">Desvendando a Auto Gestão</a>-->
	         	
	         	<a class="navbar-brand logo" href="../index.php"><img src="../assets/img/header/logo.png" width="100" height="auto" class="d-inline-block align-top" loading="lazy" /></a>

	         	<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
	             <div
	                class="collapse navbar-collapse" id="navcol-1">
	                <ul class="nav navbar-nav ml-auto">	
	                    <li class="nav-item" role="presentation">
	                    	<a class="nav-link" href="../index.php">Home</a>
	                    </li>
	                    
	                    <li class="nav-item dropdown" role="presentation" >
				                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Transformadores</a>
				                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
									<a class="dropdown-item" href="../forms/form.add.transformer.php">Add Transformador</a>
									<a class="dropdown-item" href="../paginas/list.transformers.php">Lista Transformador</a>
								</div>
				        </li>
	                    
	                    <li class="nav-item dropdown" role="presentation" >
				                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Usuários</a>
				                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
									<a class="dropdown-item" href="../forms/form.add.user.php">Add Usuário</a>
									<a class="dropdown-item" href="../paginas/list.users.php">Lista Usuários</a>
								</div>
				        </li>
												
				        <li class="nav-item dropdown" role="presentation" >
				                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Base</a>
				                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
									<a class="dropdown-item" href="../forms/form.add.transformer.base.php">Add Base</a>
									<a class="dropdown-item" href="../paginas/list.transformers.base.php">Lista Base</a>
								</div>
				        </li>
	                    
	                    <li class="nav-item" role="presentation">
	                    	<a href="../functions/logout.php"><button class="btn btn-secondary" type="submit">sair</button></a>
	                    </li>
	                    <li class="nav-item" role="presentation">	                     	
	                     	<img src="../assets/img/header/logo_empresa.png" width="40" height="auto" class="d-inline-block align-top" loading="lazy" />
	                    </li>
	                 </ul>
	        </div>
	        </div>
	    </nav>
		<main class="page landing-page">