<?php
	class Usuario{
		private $_usuario;
 		private $_pass;

 		public function __construct($usuario,$pass)
 		{
 			$this->_usuario = $usuario;
 			$this->_pass = $pass;
 		}

 		public function getUsuario(){
 			return $this->_usuario;
 		}

 		public function getPass(){
 			return $this->_pass;
 		}
	}