<?php
	
	require 'partidoDAO.php';
	
	class ParidoDAOImple implements PartidoDAO{

		public function crearPartido(Partido $partido) {
			
			//validar()
			//armarquery()
			agregarPartido($partido->jugadoresInvitados);
		}
		
		
// 		agrega el partido a la lista de partidos de c/invitado
		private function agregarPartido ($invitados){
			foreach ($invitados as $invitado){
				$invitado->agregarPartido(self);
			}
		}
		
		public function eliminarPartido(Partido $partido){
			//queryEliminar;
			$invitados = $partido->jugadoresInvitados;
			foreach ($invitados as $invitado){
				$invitado->eliminarPartido(self);
			}
		}
		
	}
?>