<?php

	require 'usuario.php';
	require 'usuarioLoginException.php';

	interface UsuarioDAO{
		
		public function registrar(Usuario $user);
		public function eliminar($id);
		public function login($mail, $password);
		
	}

?>