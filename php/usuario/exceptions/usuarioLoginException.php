<?php

	class UsuarioLoginException extends Exception{
		function __construct($message = 'Usuario o contrase�a incorrectos'){
			parent::__construct($message);
		}
	}

?>