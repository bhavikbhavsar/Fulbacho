<?php

	class UsuarioLoginException extends Exception{
		function __construct($message = 'Usuario o contraseņa incorrectos'){
			parent::__construct($message);
		}
	}

?>