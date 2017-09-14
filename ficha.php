<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Ficha personal del autor.
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		echo "<h1>Ficha personal</h1><br>";
		$nombre="Miguel Ángel";
		$apellidos="López Moyano";
		$curso="2º DAW";
		$correo="i02lomom@gmail.com";
		$twitter="@i02mike";

		echo "<img src='../../foto.jpg'</img><br>";
		echo "<br>Nombre: $nombre <br>";
		echo "Apellidos: $apellidos <br>";
		echo "Curso: $curso <br>";
		echo "Correo: $correo <br>";
		echo "Twitter: $twitter";

	?>
	<br><br>
	<a href="http://localhost/DWES/ejercicios/ver.php?src=
		<?php
    	echo basename($_SERVER['PHP_SELF'],'DWES/ejercicios/') ?>
     	">Ver codigo
    </a>	
</body>
</html>