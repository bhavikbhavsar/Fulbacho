<?php

	class UsuarioLoginException extends Exception{
		function __construct($message = 'Usuario o contrase�a inv�lidos'){
			parent::__construct($message);
		}
	}

?>