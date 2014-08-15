<?php

	require 'usuario/usuarioDAOImple.php';

	
	$user = new Usuario();
	
	$user->nombre = 'Don Ramón ';
	$user->apellido = 'Valdes';
	
	$dao = new UsuarioDAOImple();
	$dao->registrar($user);

?>
