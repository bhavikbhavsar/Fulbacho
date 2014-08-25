<?php

	class UsuarioLoginException extends Exception{
		function __construct($message = 'Usuario o contraseña incorrectos'){
			parent::__construct($message);
		}
	}

?>