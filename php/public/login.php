<?php


	require '../../php/usuario/usuarioDAOImple.php';

	//TODO: mejorar el if con clave del form para mayor seguridad.
	if(isset($_POST['mail'])){
		
	
		$mail = $_REQUEST['mail'];
		$password = $_REQUEST['password'];
		
		
		$dao = new UsuarioDAOImple();
		
		try{
			$dao->login($mail, $password);
			
			echo "Login correcto";
			
		}catch(UsuarioLoginException $e){
			echo $e->getMessage();
		}
		catch(DbException $e){
			echo $e->getMessage();
		}
		catch(Exception $e){
			echo "UPS! Ha ocurrido un problema: " . $e->getMessage();
		}
	}
	
	

?>