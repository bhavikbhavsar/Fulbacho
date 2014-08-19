<?php


	class UsuarioRegistradoException extends Exception{
		function __construct($message = 'El email ya se encuentra registrado'){
			parent::__construct($message);
		}
	}

?>