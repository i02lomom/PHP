<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Imprime por pantalla cual de los dos numeros es mayor
 */
?>
<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		echo "<h1>Mayor de dos números</h1>";
		$numero1=2;
		$numero2=3;

		if ($numero1>$numero2) 
			echo "El $numero1 es mayor que el $numero2";

		else if ($numero1<$numero2) 
			echo "El $numero2 es mayor que el $numero1";

		else
			echo "$numero1 y $numero2 son iguales";
	?>
	<br><br>
	<a href="http://localhost/DWES/ejercicios/ver.php?src=
		<?php
    	echo basename($_SERVER['PHP_SELF'],'DWES/ejercicios/') ?>
     	">Ver codigo
    </a>	
</body>
</html>