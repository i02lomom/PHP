<?php
	session_start();

	include 'includes/header.php';
	include 'includes/body.php';

	if(!isset($_SESSION['auth'])){ 
        $_SESSION['auth']=false; 
    }

    elseif(isset($_SESSION['auth']) && $_SESSION['auth']==true){ 
        echo "Bienvenido usuario</br></br>"; ?>
        <form method="post" action="cerrarSesion.php">
			<input type="submit" class="btn btn-primary" name="cerrar" value="Cerrar sesión">
		</form><?php
    }

    if(isset($_POST['enviar']) && $_POST['usuario']=="usuario" && $_POST['contrasenia']=="usuario"){ 
            $usuario=$_POST['usuario']; 
            $_SESSION['auth']=true; 
            echo "Bienvenido usuario</br></br>"; ?>
            <form method="post" action="cerrarSesion.php">
				<input type="submit" class="btn btn-primary" name="cerrar" value="Cerrar sesión">
			</form><?php       
    }

    else{ 
        if($_SESSION['auth']==false){?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            <label>Usuario </label> <input type="text" name="usuario"></br></br>
            <label>Contraseña </label> <input type="password" name="contrasenia"><br/><br/>
            <input type="submit" class="btn btn-primary" name="enviar" value="enviar">
            </form><?php
        }
    }

	include 'includes/footer.php';
?>