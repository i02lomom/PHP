<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Carga en variables mes y año e indica el número de días del mes.
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		echo "<h1>Días del mes</h1><br>";
		$mes=2;
		$anyo=1982;
		$dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anyo);
		echo "En febrero del 1982 hubo $dias días ";
	?>
	<br><br>
	<a href="http://localhost/DWES/ejercicios/ver.php?src=
		<?php
    	echo basename($_SERVER['PHP_SELF'],'DWES/ejercicios/') ?>
     	">Ver codigo
    </a>	
</body>
</html>