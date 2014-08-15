<?php

	require 'usuario/usuarioDAOImple.php';

	$user = new Usuario();
	
	$user->nombre = 'Don Ramón';
	
	$dao = new UsuarioDAOImple();
	$dao->registrar($user);

?>
