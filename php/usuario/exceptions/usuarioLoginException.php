<?php

	class UsuarioLoginException extends Exception{
		function __construct($message = 'Usuario o contraseña inválidos'){
			parent::__construct($message);
		}
	}

?>