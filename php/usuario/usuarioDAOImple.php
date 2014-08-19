<?php

	require 'usuarioDAO.php';
	require 'usuarioValidador.php';
	require '../db/db.php';
	
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