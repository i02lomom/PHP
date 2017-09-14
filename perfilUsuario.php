<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Lista de enlaces en función del perfil de usuario.
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';

		echo "<h1>Enlaces en función del perfil</h1><br>";
		$perfil="usuario";

		if(strcmp($perfil,"admin")==0) 
			echo "<li>Enlace 1 admin</li>
					<li>Enlace 2 admin</li>
					<li>Enlace 3 admin</li>";

		elseif(strcmp($perfil,"usuario")==0)
			echo "<li>Enlace 1 usuario</li>
					<li>Enlace 2 usuario</li>
					<li>Enlace 3 usuario</li>";

		include '../includes/footer.php';	
	?>	
</body>
</html>