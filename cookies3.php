<?php
	$usuario=$passwd="";

	if(isset($_COOKIE['usuario']) && isset($_COOKIE['passwd'])){
		$usuario= $_COOKIE['usuario'];
		$passwd=$_COOKIE['passwd'];
	}

	else{

		if(isset($_POST['enviar'])){
			if(isset($_POST['recodar']) && $_POST['recordar']=='off'){
				setcookie("usuario",$_POST['usuario'],time()+3600);
				setcookie("passwd",$_POST['passwd'],time()+3600);
			}

			else if(isset($_POST['recodar']) && $_POST['recordar']!='off'){
				setcookie("usuario",$_POST['usuario'],time()-3600);
				setcookie("passwd",$_POST['passwd'],time()-3600);
			}
		}
	

	
	include '../includes/header.php';
	include '../includes/body.php';
	include 'funciones/funciones.php';?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Usuario</label>
		<input type="text" name="usuario" value="<?php echo $usuario; ?>">
		<label>Contraseña</label>
		<input type="password" name="passwd" value="<?php echo $passwd; ?>">
		<label>Recordar</label> 
		<input type="checkbox" name="recordar">
		<input type="submit" name="enviar">
	</form>

	<?php

	include '../includes/footer.php';

	
?>