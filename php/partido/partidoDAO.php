<?php

	require 'partido.php';
	
	interface PartidoDAO{
	
		public function crearPartido(Partido $partido);
		public function eliminarPartido(Partido $partido);
	}

?>