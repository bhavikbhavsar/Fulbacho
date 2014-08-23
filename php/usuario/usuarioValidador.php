<?php
		require 'exceptions/usuarioValidadorException.php';
	
		class UsuarioValidador{
			
			public static function validar(Usuario $user){
					
				if(self::estaVacio($user->nombre))
					throw new UsuarioValidadorException('El nombre no puede estar en blanco');
				
				if(self::estaVacio($user->apellido))
					throw new UsuarioValidadorException('El apellido no puede estar en blanco');
				
				if(self::estaVacio($user->mail))
					throw new UsuarioValidadorException('El email no puede estar en blanco');
				
				if(!filter_var($user->mail, FILTER_VALIDATE_EMAIL))
					throw new UsuarioValidadorException('El email no tiene un formato v�lido');
				
				if(self::estaVacio($user->password))
					throw new UsuarioValidadorException('La contrase�a no puede estar en blanco');
				/*
				 * La función empty permite expesiones a partir de la version 5.5
				 * */				
// 				if(empty(trim($user->nombre)))
// 					throw new UsuarioValidadorException('El nombre no puede estar en blanco');
// 				if(empty(trim($user->apellido)))
// 					throw new UsuarioValidadorException('El apellido no puede estar en blanco');
// 				if(empty(trim($user->mail)))
// 					throw new UsuarioValidadorException('El email no puede estar en blanco');
// 				if(!filter_var($user->mail, FILTER_VALIDATE_EMAIL))
// 					throw new UsuarioValidadorException('El email no tiene un formato válido');
// 				if(empty(trim($user->password)))
// 					throw new UsuarioValidadorException('La contraseña no puede estar en blanco');
				
			}
			
			private function estaVacio($string){
				$stringLimpio = trim($string);
				return empty($stringLimpio);
			}
		}
	
?>