<?php

	require 'usuario/usuarioDAO.php';

	$user = new Usuario();
	
	$user->nombre = 'Don Ramón';
	
	$dao = new UsuarioDAO();
	$dao->registrar($user);

?>
