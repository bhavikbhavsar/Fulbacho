<?php

	require 'usuario/usuarioDAO.php';

	$user = new Usuario();
	
	$user->nombre = 'Don Ram�n';
	
	$dao = new UsuarioDAO();
	$dao->registrar($user);

?>
