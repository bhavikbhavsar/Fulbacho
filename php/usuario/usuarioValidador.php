<?php
		require 'usuarioValidadorException.php';
	
		class UsuarioValidador{
			
			public static function validar(Usuario $user){
					
				if(empty(trim($user->nombre)))
					throw new UsuarioValidadorException('El nombre no puede estar en blanco');
				
				if(empty(trim($user->apellido)))
					throw new UsuarioValidadorException('El apellido no puede estar en blanco');
			}
		}
	
?>