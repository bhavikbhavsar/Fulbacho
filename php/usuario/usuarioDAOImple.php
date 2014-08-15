<?php

	require 'usuarioDAO.php';
	
	class UsuarioDAOImple implements UsuarioDAO{
		
		public function registrar(Usuario $user) {
			echo 'Se registro: ' . $user->nombre;
		}
		
		
		public function eliminar($id){
			echo 'Se elimino: ' . $id;
		}
	}

?>