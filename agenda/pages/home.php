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

    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Buscar</label>
		<input type="text" name="textoAbuscar">	
		<input type="submit" name="buscar" value="Buscar">
	</form>
	</br></br>
	<form method="get" action="index.php">
		<input type="submit" name="page" value="anadir">
	</form>
	</br></br>
	<center>
	<table class=\"table table-striped table-responsive\"> 
    <thead>
    <th>Nombre</th><th>Teléfono</th>
    </thead> 
    <tbody><?php
    	/*foreach ($_SESSION['agenda'] as $key => $value) { 
            if($key%2==0){ 
                echo "</tr>"; 
            } 
        echo "<td>".$value."</td>"; 
        }*/

    ?>
    </tbody>
    </table>
    </center>

	<?php

	include 'includes/footer.php';
?>