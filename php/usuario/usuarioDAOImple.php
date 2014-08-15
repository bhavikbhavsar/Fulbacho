<?php

	require 'usuarioDAO.php';
	require 'usuarioValidador.php';
	
	class UsuarioDAOImple implements UsuarioDAO{
		
		public function registrar(Usuario $user) {
			try {
				UsuarioValidador::validar($user);
				
				echo 'Se registro: ' . $user->nombre;
				
			} catch (UsuarioValidadorException $e) {
				echo $e->getMessage();
			}
		}
		
		
		public function eliminar($id){
			echo 'Se elimino: ' . $id;
		}
	}

?>