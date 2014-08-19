<?php


	class UsuarioRegistradoException extends Exception{
		function __construct($message = 'El usuario ya se encuentra registrado'){
			parent::__construct($message);
		}
	}

?>