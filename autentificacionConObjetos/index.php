<?php
	session_start();
	require_once 'Usuario.php';
	include 'includes/header.php';
	include 'includes/body.php';

	class Index
	{
 		public function ejecutar()
 		{
 			$usuario = new Usuario('usuario', 'usuario');

 			if(!isset($_SESSION['auth'])){ 
		        $_SESSION['auth']=false; 
		    }

		    elseif(isset($_SESSION['auth']) && $_SESSION['auth']==true){ 
		        echo "Bienvenido usuario</br></br>"; ?>
		        <form method="post" action="cerrarSesion.php">
					<input type="submit" class="btn btn-primary" name="cerrar" value="Cerrar sesión">
				</form><?php
		    }

		    if(isset($_POST['enviar']) && $_POST['usuario']==$usuario->getUsuario() && $_POST['contrasenia']==$usuario->getPass()){ 
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
		 			
		 			
		}
	}

	$index = new Index();
	$index->ejecutar();
	include 'includes/footer.php';
?>