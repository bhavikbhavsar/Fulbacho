<?php

	require 'usuario/usuarioDAOImple.php';

	$user = new Usuario();
	
	$user->nombre = 'Don Ram�n';
	
	$dao = new UsuarioDAOImple();
	$dao->registrar($user);

?>
