<?php
	
	require '../../php/usuario/usuarioDAOImple.php';
	if(isset($_POST['nombre'])){
		
		$user = new Usuario();
		
		$user->nombre = $_REQUEST['nombre'];
		$user->apellido = $_REQUEST['apellido'];
		$user->mail = $_REQUEST ['mail'];
		$user->password = $_REQUEST ['password'];
		$user->sexo = $_REQUEST['sexo'];
		
		$dao = new UsuarioDAOImple ();
		
		try {
			$dao->registrar($user);
			
			echo "Usuario registrado";
			
		}catch(UsuarioValidadorException $e){
			echo $e->getMessage();
		}catch (UsuarioRegistradoException $e){
			echo $e->getMessage();	
		}catch(DbException $e){
			echo "UPS! Ha ocurrido un problema en la base de datos: " . $e->getMessage ();
		}catch (Exception $e ) {
			//ACA DEBERIAMOS REALIZAR UN LOG
			echo "UPS! Ha ocurrido un problema: " . $e->getMessage ();
		}
	
	}

?>