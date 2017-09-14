<?php
	session_start();

	if(!isset($_POST['enviar'])){
		header("Location: index.php");
	}

	else{
		$contacto['nombre']=$_POST['nombre'];
		$contacto['telefono']=$_POST['telefono'];
		array_push($_SESSION['agenda'],$contacto);
		header("Location: index.php");

	}