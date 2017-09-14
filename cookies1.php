<?php
	if(isset($_COOKIE['usuario'])){
		$cookie= $_COOKIE['usuario'];
		echo $cookie;
	}

	else {
		setcookie("usuario","Miguel Angel López",time()+3600);
		echo "Se va a crear la cookie";
	}	
	

	include '../includes/header.php';
	include '../includes/body.php';
	include 'funciones/funciones.php';

	include '../includes/footer.php';
?>	
</body>
</html>
