<?php 
	//Pedro Guilherme Barauna 01/07/2019.

	require_once "Controlador.php";

	//inicio da classe contaBanco
	class contaBanco implements Controlador{
		//ATRIBUTOS.
		public $numConta;
		protected $tipo;
		private $dono;
		private $saldo;
		private $status;

		//MÉTODOS ESPECIAIS.

		//inico do __cotruct.
		public function __construct ($dono){
			$this->setDono($dono);
			echo "Conta criada com sucesso";
		}
		//fim do __contruct.

		//inicio de todos os getters and setters.
		public function getNumConta() {
		    return $this->numConta;
		}	 
		public function setNumConta($numConta) {
		    $this->numConta = $numConta;
		}
		public function getTipo() {
		    return $this->tipo;
		}
		public function setTipo($tipo) {
		    $this->tipo = $tipo;
		}
		public function getDono() {
		    return $this->dono;
		}
		 
		public function setDono($dono) {
		    $this->dono = $dono;
		}
		public function getSaldo() {
		    return $this->saldo;
		}
		public function setSaldo($saldo) {
		    $this->saldo = $saldo;
		}
		public function getStatus() {
		    return $this->status;
		}		 
		public function setStatus($status) {
		    $this->status = $status;
		}
		//fim de todos os getters and setters.

		//DEMAIS MÉTODOS.

		//inicio função abrirConta.
		public function abrirConta($tipo){
				if ($this->getStatus()){
					echo "Conta já está aberta!";
				}
				else {
					if ($this->getSaldo() < 0){
						echo "não é possivel abrir a conta em débito";
					}
					elseif ($this->getSaldo() > 0){
						echo "não é possivel abrir a conta em crédito";
					}
					else {
						if ($tipo == "CC"){
							$this->setStatus(true);
							$this->setTipo($tipo);
							$this->setSaldo(50);
							echo "Conta aberta com sucesso!";
						}	
						elseif ($tipo == "CP") {
							$this->setStatus(true);
							$this->setTipo($tipo);
							$this->setSaldo(150);
							echo "Conta aberta com sucesso!";
						}
					}
				}	
			}
			//fim função abrir conta.

		//inicio função fecharConta.
		public function fecharConta (){
			if ($this->getSaldo() < 0){
				echo "não é possivel fechar a conta em débito";
			}
			elseif ($this->getSaldo() > 0){
				echo "não é possivel fechar a conta em crédito";
			}
			else {
				$this->setStatus(false);
				echo "Conta fechada com sucesso!";
			}
		}
		//fim da função fecharConta.

		//inicio da função depositar.
		public function depositar($valor){
			if ($this->getStatus()){
				$this->setSaldo($this->getSaldo() + $valor);
				echo "Deposito de $valor efetuado com sucesso na conta de ". $this->getDono();
			}
			else {
				echo "Conta está fechada, não é possivel depositar!";
			}



		}
		//fim da função depositar.




		//inicio da função depositar.
		public function sacar($valor){
			if ($this->getStatus()){
				if ($valor <= $this->getSaldo()){ 
					$this->setSaldo($this->getSaldo() - $valor);
					echo "Saque de $valor autorizado na conta de " . $this->getDono();
				}
				else {
					echo "Saldo insuficiente!";
				}
			}
			else {
				echo "Não é possivel sacar com a conta fechada!";
			}
			
		}
		//fim da função depositar.


		//inicio da função pagarMensal.
		public function pagarMensal(){
			if ($this->getStatus()){
				if ($this->getTipo() == "CC"){
					$this->setSaldo($this->getSaldo() - 12);
					echo "Mensalidade paga, foi debitado 12 reais da conta de ". $this->getDono();
				}
			
				elseif($this->getTipo() == "CP") {
					$this->setSaldo($this->getSaldo() - 20);
					echo "Mensalidade paga, foi debitado 20 reais da conta de ". $this->getDono();
				}
			}
		}
		//fim da função pegarMensal


	}
	//fim da classe fechar conta.






 ?>