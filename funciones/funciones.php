<?php

	function sumar($numero){
		if($numero==0){
			return 0;
		}

		else{
			return sumar((int)($numero /10)) + ($numero%10);
		}
	}

	function invertir($numero){
		echo ($numero%10);
        if((int)($numero/10)!=0)
             invertir((int)($numero/10));
	}

	function iniciales($nombre,$apellidos){
		$iniciales="";
		$partes = explode(' ',$nombre);

		for($i=0;$i<count($partes);$i++)
			$iniciales .= substr($partes[$i],0,1).".";
		
		$partes = explode(' ',$apellidos);
		for($i=0;$i<count($partes);$i++)
			$iniciales .= substr($partes[$i],0,1).".";

		return $iniciales;
	}

	function validarContrasena($contrasena,&$tipoError){
		$esValida=true;

		if(strlen($contrasena)<8){
			$tipoError="La contraseña debe tener al menos 8 caracteres";
			$esValida=false;
		}

		if (!preg_match('`[a-z]`',$contrasena)){
			if($esValida==true){
				$tipoError="La contraseña debe tener al menos una letra minúscula";
				$esValida=false;
			}
		}

		if (!preg_match('`[A-Z]`',$contrasena)){
			if($esValida==true){
				$tipoError="La contraseña debe tener al menos una letra mayúscula";
				$esValida=false;
			}
		}

		if (!preg_match('`[0-9]`',$contrasena)){
			if($esValida==true){
				$tipoError="La contraseña debe tener al menos un número";
				$esValida=false;
			}
		}
		return $esValida;

	}
?>