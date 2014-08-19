<?php

	require 'usuarioDAO.php';
	require 'usuarioValidador.php';
	require '../db/db.php';
	require 'exceptions/usuarioRegistradoException.php';
	
	class UsuarioDAOImple implements UsuarioDAO{
		
		public function registrar(Usuario $user) {
			UsuarioValidador::validar($user);
				
			$connection = DB::getInstance()->getStartedConnection();
			
			self::filter($user, $connection);
			
			$connection->query("CALL fulbacho.registrarUsuario('" .
											$user->nombre . "', '" . 
											$user->apellido . "', '" .
											$user->mail . "', '" . 
											$user->password . "', '" .
											$user->sexo . "')");
			
			if($connection->error){
				if($connection->errno == 1062)
					throw new UsuarioRegistradoException();
				else 
					throw new DbException($connection->error);
			}
		}
		
		
		//HAY QUE SACAR ESTA FUNCION DE ACA
		private function filter(Usuario $user, $connection){
			$user->nombre = $connection->real_escape_string($user->nombre);
			$user->apellido = $connection->real_escape_string($user->apellido);
			$user->mail = $connection->real_escape_string($user->mail);
			$user->password = $connection->real_escape_string($user->password);
			$user->sexo = $connection->real_escape_string($user->sexo);
		}
		
		
		public function eliminar($id){
			echo 'Se elimino: ' . $id;
		}
		
		public function login($mail, $password){
			try {
				if(!($result = DB::getInstance()->executeQuery("CALL fulbacho.login('". $mail . "', '" . $password . "')")))
					throw new UsuarioLoginException();

				if(!($row = $result->fetch_array(MYSQLI_NUM)))
					throw new UsuarioLoginException();
				
				$usuario = self::createUsuario($row);
					
				return $usuario;
			}catch (DbException $e){
				//DEFINIR QUE HACER CON ESTA EXCEPCION
				echo $e->getMessage();
			}
		}
		
		private function createUsuario($row){
			$usuario = new Usuario();
			
			$usuario->id = $row[0];
			$usuario->nombre = $row[1];
			$usuario->apellido = $row[2];
			$usuario->mail = $row[3];
			
			return $usuario;
		}
	}

?>