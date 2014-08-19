<?php

	require '../usuario/usuarioDAOImple.php';
	
	$dao = new UsuarioDAOImple();
	
	try{
		$usuario = $dao->login('eddie@gmail.com', '1234');
		echo '<p> Login exitoso </p>';
		
		echo "Id: " . $usuario->id . "<br>";
		echo "Nombre: " . $usuario->nombre . "<br>";
		echo "Apellido: " . $usuario->apellido . "<br>";
		echo "Mail: " . $usuario->mail . "<br>";
		
	}catch(UsuarioLoginException $e){
		echo $e->getMessage();
	}
	
	

?>