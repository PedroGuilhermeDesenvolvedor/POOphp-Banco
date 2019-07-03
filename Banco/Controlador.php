<?php 
	//Interface Controlador.Criada para o Model.
	interface Controlador {
		public function abrirConta($tipo);
		public function fecharConta();
		public function depositar($valor);
		public function sacar($valor);
		public function pagarMensal();
	}
 ?>