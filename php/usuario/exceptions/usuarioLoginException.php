<?php

	class UsuarioLoginException extends Exception{
		function __construct($message = '<p class="error">Usuario o contraseña incorrectos</p>'){
			parent::__construct($message);
		}
	}

?>