<?php
	function comprobarVariablesSesion(){
		if(!isset($_SESSION['usuarios']))
       		$_SESSION['usuarios']=array();
	    
	    if(!isset($_SESSION['agentes']))
	        $_SESSION['agentes']=array();

	    if(!isset($_SESSION['multas']))
	        $_SESSION['multas']=array();
	    
	    if(!isset($_SESSION['perfil']))
	        $_SESSION['perfil']="invitado";
	}

    function comprobarFormulario(){
        if(isset($_POST['enviar']) && !empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
            $esAdmin=false;
            $arrayCredenciales=array();
            $file=fopen("credenciales.txt","r") or exit("No se puede abrir el fichero");

            while(!feof($file)) {
                $datos = fgetcsv( $file, 0, ":");
                array_push($arrayCredenciales, $datos[1]);
            }
            fclose($file);

            if($arrayCredenciales[0]==$_POST['usuario'] && $arrayCredenciales[1]==$_POST['contrasenia']){
                $_SESSION['perfil']="admin";
                $esAdmin=true;
            }

            if(!$esAdmin){
                foreach ($_SESSION['usuarios'] as $key => $value) {
                    if($_SESSION['usuarios'][$key]['usuario']==$_POST['usuario'] &&
                        $_SESSION['usuarios'][$key]['password']==$_POST['contrasenia']){
                        $_SESSION['perfil']=$_SESSION['usuarios'][$key]['perfil'];
                        $_SESSION['agenteActivo']=$_SESSION['usuarios'][$key]['usuario'];
                    }
                }
            }
        }
    }

	function mostrarMultas(){
		echo "<div class=\"table-responsive\">";
        echo "<table class=\"table table-striped table-bordered\">";
        echo "<thead style = \"color:#999; background-color: #333\">";
        echo "<th>Matrícula</th><th>Id Agente</th><th>Descripción</th><th>Fecha</th><th>Importe</th><th>Estado</th>";
        echo "<th>Acción</th>";
        echo "</thead>";
        echo "<tbody>";

        echo "<form method=\"get\" action=\"pagarMulta.php\">";
        foreach ($_SESSION['multas'] as $key => $value) {
          	echo "<tr><td>".$value['matricula']."</td>";
            echo "<td>".$value['id']."</td>";
          	echo "<td>".$value['descripcion']."</td>";
          	echo "<td>".$value['fecha']."</td>";
          	echo "<td>".$value['importe']."</td>";
          	echo "<td>".$value['estado']."</td>";
          	if($value['estado']=="pendiente")
                echo "<td><a class=\"btn btn-warning\" href=\"pagarMulta.php?indice=".$key."\">Pagar</a></td>";
            else
                echo "<td><a class=\"btn btn-warning disabled\" href=\"pagarMulta.php?indice=".$key."\">Pagar</a></td>";
            echo "</tr>";

        }
        echo "</form>";
        echo "</tbody>";
        echo "</table>";
   		echo "<div>";
	}

    function mostrarMultasAgente(){
        echo "<div class=\"table-responsive\">";
        echo "<table class=\"table table-striped table-bordered\">";
        echo "<thead style = \"color:#999; background-color: #333\">";
        echo "<th>Matrícula</th><th>Id Agente</th><th>Descripción</th><th>Fecha</th><th>Importe</th><th>Estado</th>";
        echo "<th>Acción</th>";
        echo "</thead>";
        echo "<tbody>";

        echo "<form method=\"get\" action=\"pagarMulta.php\">";
        foreach ($_SESSION['multas'] as $key => $value) {
            if($value['id']==obtenerIdAgente()){
                echo "<tr><td>".$value['matricula']."</td>";
                echo "<td>".$value['id']."</td>";
                echo "<td>".$value['descripcion']."</td>";
                echo "<td>".$value['fecha']."</td>";
                echo "<td>".$value['importe']."</td>";
                echo "<td>".$value['estado']."</td>";
                if($value['estado']=="pendiente")
                    echo "<td><a class=\"btn btn-warning\" href=\"pagarMulta.php?indice=".$key."\">Pagar</a></td>";
                else
                    echo "<td><a class=\"btn btn-warning disabled\" href=\"pagarMulta.php?indice=".$key."\">Pagar</a></td>";
                echo "</tr>";
            }
        }
        echo "</form>";
        echo "</tbody>";
        echo "</table>";
        echo "<div>";
    }

    function mostrarMultasPorMatricula($matricula){
        echo "<div class=\"table-responsive\">";
        echo "<table class=\"table table-striped table-bordered\">";
        echo "<thead style = \"color:#999; background-color: #333\">";
        echo "<th>Matrícula</th><th>Id Agente</th><th>Descripción</th><th>Fecha</th><th>Importe</th><th>Estado</th>";
        echo "<th>Acción</th>";
        echo "</thead>";
        echo "<tbody>";

        echo "<form method=\"get\" action=\"pagarMulta.php\">";
        foreach ($_SESSION['multas'] as $key => $value) {
            if($value['matricula']==$matricula){
                echo "<tr><td>".$value['matricula']."</td>";
                echo "<td>".$value['id']."</td>";
                echo "<td>".$value['descripcion']."</td>";
                echo "<td>".$value['fecha']."</td>";
                echo "<td>".$value['importe']."</td>";
                echo "<td>".$value['estado']."</td>";
                if($value['estado']=="pendiente")
                    echo "<td><a class=\"btn btn-warning\" href=\"pagarMulta.php?indice=".$key."\">Pagar</a></td>";
                else
                    echo "<td><a class=\"btn btn-warning disabled\" href=\"pagarMulta.php?indice=".$key."\">Pagar</a></td>";
                echo "</tr>";
            }
        }
        echo "</form>";
        echo "</tbody>";
        echo "</table>";
        echo "<div>";
    }

	function mostrarBotonAnadirAgente(){
		echo "<form method=\"post\" action=\"registroAgentes.php\">";
		echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"registroAgentes\" value=\"Registrar Agente\">";
        echo "</form> ";
	}

	function mostrarBotonAnadirMultas(){
		echo "<form method=\"post\" action=\"anadirMulta.php\">";
		echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"anadirMulta\" value=\"Añadir Multa\">";
        echo "</form> ";
	}

	function mostrarBotonesSalida(){
		echo "<form method=\"post\" action=\"logout.php\">";
        echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"out\" value=\"Logout\">";
        echo "</form> ";
        echo " <form method=\"post\" action=\"cerrarSesion.php\">";
        echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"cerrar\" value=\"Cerrar sesión\">";
        echo "</form></br></br>";  
	}

	function mostrarBotonesAdministracion(){
		echo "<form method=\"post\" action=\"validarAgentes.php\">";
        echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"validarAgentes\" value=\"Validar Agentes\">";
        echo "</form> ";
        echo " <form method=\"post\" action=\"informes.php\">";
        echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"informes\" value=\"Informes\">";
        echo "</form> ";  
	}

    function obtenerIdAgente(){
        if(isset($_SESSION['agenteActivo'])){
            foreach ($_SESSION['agentes'] as $key => $value) {
                if($value['usuario']==$_SESSION['agenteActivo'])
                    return $_SESSION['agentes'][$key]['id'];
            }
        }
    }

?>