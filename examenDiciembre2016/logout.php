<?php
	session_start();
	$_SESSION['perfil']="invitado";
	unset($_SESSION['agenteActivo']);
	header("Location: index.php");
?>