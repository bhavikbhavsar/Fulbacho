<?php


	require '../usuario/usuarioDAOImple.php';
	
	$dao = New UsuarioDAOImple();
	
	$user = new Usuario();
	
	$user->nombre = "Don Ramón";
	$user->apellido = "Valdes";
	$user->mail = "don@gmail.com";
	$user->password = "1234";
	$user->sexo = "M";
	
	try{
		$dao->registrar($user);
	}catch (Exception $e){
		echo $e->getMessage();
	}
	

?>