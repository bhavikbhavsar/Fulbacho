<?php


	require '../usuario/usuarioDAOImple.php';

	
	
	$mail = $_REQUEST['mail'];
	$password = $_REQUEST['password'];
	
	
	$dao = new UsuarioDAOImple();
	
	try{
		$dao->login($mail, $password);
		
		echo "Login correcto";
		
	}catch(UsuarioLoginException $e){
		echo $e->getMessage();
	}
	catch(Exception $e){
		echo "UPS! Ha ocurrido un problema: " . $e->getMessage();
	}
	
	

?>