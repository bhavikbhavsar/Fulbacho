<?php

	require 'usuario.php';

	interface UsuarioDAO{
		
		public function registrar(Usuario $user);
		public function eliminar($id);
		
	}

?>