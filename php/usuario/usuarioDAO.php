<?php

	include 'usuario.php';

	class UsuarioDAO{
		
		public function registrar(Usuario $user) {
			echo 'Se registro: ' . $user->nombre;
		}
	}

?>