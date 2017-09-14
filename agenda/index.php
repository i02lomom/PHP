<?php
	session_start();

	include 'includes/header.php';
	include 'includes/body.php';

	if(empty($_SESSION['agenda']))
		$_SESSION['agenda']=array();

	$errorNombre=$errorTelefono=""; 
    $nombre=$telefono=""; 
    $flagError=false; 


	if(isset($_POST['anadir'])){ 
        if(empty($_POST['nombre'])){ 
            $errorNombre="Rellene el campo"; 
            $flagError=true; 
        }

        else{  
            if(!preg_match("/^[A-z]+( )?[A-z]+$/",$nombre)){ 
                $errorNombre="Nombre inválido"; 
                $flagError=true; 
            }
            else
                $errorNombre="";  
        } 
        
        if(empty($_POST['telefono'])){ 
            $errorTelefono="Rellene el campo"; 
            $flagError=true; 
        }
        else{ 
            if(!filter_var($telefono,FILTER_VALIDATE_INT)){ 
				$errorTelefono="Teléfono inválido"; 
				$flagError=true; 
            }
			else
                $errorTelefono="";       
        } 
    }?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Buscar</label>
		<input type="text" name="textoAbuscar">	
		<input type="submit" name="buscar" value="Buscar">
	</form>
	</br></br>
	<form method="post" action="anadir.php">
		<input type="submit" name="anadir" value="Añadir">
	</form>
	</br></br>
	<form method="post" action="cerrarSesion.php">
		<input type="submit" name="cerrar" value="Borrar agenda">
	</form>
	</br></br>
	<center>
	<table class=\"table table-striped table-responsive\"> 
    <thead>
    <th>Nombre</th><th>Teléfono</th>
    </thead> 
    <tbody><?php
    	foreach ($_SESSION['agenda'] as $key => $value) {
	 
	        echo "</tr>";  
	        echo "<td>".$value['nombre']."</td>"; 
	        echo "<td>".$value['telefono']." <input type=\"submit\" name=\"editar\" value=\"Editar\"> </td>";
        }

    ?>
    </tbody>
    </table>
    </center>

	<?php
	if(isset($_POST['buscar'])){
		foreach ($_SESSION['agenda'] as $key => $value) {
			if($_POST['textoAbuscar']==$value['nombre']){
				echo "</br>";
				echo "<h4>Encontrada coincidencia</h4>";
				echo $value['nombre']." "; 
	        	echo $value['telefono'];
	        }
	    }
	}


	include 'includes/footer.php';
?>