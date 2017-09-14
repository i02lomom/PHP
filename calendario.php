<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion:  Calendario del mes
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		
		$mes=date("n");
		$anyo=date("Y");
		$diaActual=date("j");
 
		$diaSemana=date("w",mktime(0,0,0,$mes,1,$anyo))+7;
		
		$ultimoDiaMes=date("d",(mktime(0,0,0,$mes+1,1,$anyo)-1));
 
		$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
		"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
	?>

	<center><table>
		<caption><?php echo $meses[$mes]." ".$anyo?></caption>
		<tr>
			<th>Lun&nbsp;&nbsp;</th><th>Mar&nbsp;&nbsp;</th><th>Mie&nbsp;&nbsp;</th><th>Jue&nbsp;&nbsp;</th>
			<th>Vie&nbsp; </th><th>Sab&nbsp;&nbsp;</th><th>Dom</th>
		</tr>

		<?php
			$ultimaCelda=$diaSemana+$ultimoDiaMes;
			
			for($i=1;$i<=42;$i++)
			{
				if($i==$diaSemana)
					$day=1;
				if($i<$diaSemana || $i>=$ultimaCelda)
					echo "<td>&nbsp;</td>";
				else{
					if($day==$diaActual)
						echo "<td>$day</td>";
					else
						echo "<td>$day</td>";
					$day++;
				}
			
				if($i%7==0)
					echo "</tr><tr>\n";
			}
		?>
	</table></center>
	<?php
		include '../includes/footer.php';
	?>	
</body>
</html>