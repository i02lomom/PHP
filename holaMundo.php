<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Muestra por pantalla el mensaje Hola mundo.
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		echo "<h1>Hola mundo</h1>";
		echo "Hola mundo";
	?>
	<br><br>
	<a href="http://localhost/DWES/ejercicios/ver.php?src=
		<?php
    	echo basename($_SERVER['PHP_SELF'],'DWES/ejercicios/') ?>
     	">Ver codigo
    </a>	
</body>
</html>