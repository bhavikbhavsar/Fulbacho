<?php

	require 'usuario/usuarioDAOImple.php';

	
	$user = new Usuario();
	
	$user->nombre = 'Don Ram�n ';
	$user->apellido = 'Valdes';
	
	$dao = new UsuarioDAOImple();
	$dao->registrar($user);

?>
