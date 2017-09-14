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

		$annoErr=$mesErr="";
		$lerror=false;
		$mes="";
		$anno="";

		if(isset($_POST['enviar'])){
			$mes=$_POST['mes'];
			$anno=$_POST['anyo'];
			if(empty($_POST['anyo']) || !filter_var($anno, FILTER_VALIDATE_INT)){	//filtervar
				$annoErr=" Año erróneo";
				$lerror=true;
			}

			
		}
				
		if(!isset($_POST['enviar']) || $lerror){?>

		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<label>Mes</label> <br/>
			<select id="mes" name="mes">	
	  			<option value=1<?php if($mes==1){echo ' selected ="selected"';}?>>Enero</option>
	  			<option value=2<?php if($mes==2){echo ' selected ="selected"';}?>>Febrero</option>
	  			<option value=3<?php if($mes==3){echo ' selected ="selected"';}?>>Marzo</option>	
	  			<option value=4<?php if($mes==4){echo ' selected ="selected"';}?>>Abril</option>	
	  			<option value=5<?php if($mes==5){echo ' selected ="selected"';}?>>Mayo</option>	
	  			<option value=6<?php if($mes==6){echo ' selected ="selected"';}?>>Junio</option>	
	  			<option value=7<?php if($mes==7){echo ' selected ="selected"';}?>>Julio</option>	
	  			<option value=8<?php if($mes==8){echo ' selected ="selected"';}?>>Agosto</option>	
	  			<option value=9<?php if($mes==9){echo ' selected ="selected"';}?>>Septiembre</option>	
	  			<option value=10<?php if($mes==10){echo ' selected ="selected"';}?>>Octubre</option>	
	  			<option value=11<?php if($mes==11){echo ' selected ="selected"';}?>>Noviembre</option>
	  			<option value=12<?php if($mes==12){echo ' selected ="selected"';}?>>Diciembre</option>
			</select>
			<br/><br/>
			<label>Año</label> <br/>
			<input type="text" name="anyo">
  			<?php echo $annoErr;?>
			<br/><br/>
			<label>Enviar</label> <br/>
			<input type="submit" name="enviar">
		</form>


		<?php
	}
		else{
			$diaActual=date("j");
			$diaSemana=date("w",mktime(0,0,0,$mes,1,$anno))+7;
		
			$ultimoDiaMes=date("d",(mktime(0,0,0,$mes+1,1,$anno)-1));
 
			$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
			"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		?>

		<center><table>
			<caption><?php echo $meses[$mes]." ".$anno?></caption>
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
		}	
		include '../includes/footer.php';
	?>	
</body>
</html>