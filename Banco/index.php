<!DOCTYPE html>
<html>
<head>
	<title>Conta Banco</title>
</head>
<body>
	<pre>
	<?php 
		require_once "Model.php";
		//creusa
		$contaCreusa = new contaBanco("creusa");
		echo "\n";
		$contaCreusa->abrirConta("CP");
		echo "\n";
		$contaCreusa->setNumConta(123);
		echo "\n";
		$contaCreusa->depositar(500);
		echo "\n";
		$contaCreusa->sacar(630);
		echo "\n";
		$contaCreusa->pagarMensal();
		echo "\n";
		$contaCreusa->fecharConta();
		echo "\n";
		//Jose
		$contaJose = new contaBanco("Jose");
		echo "\n";
		$contaJose->abrirConta("CC");
		echo "\n";
		$contaJose->setNumConta(321);
		echo "\n";
		$contaJose->depositar(300);
		echo "\n";
		$contaJose->sacar(100);
		echo "\n";
		$contaJose->pagarMensal();
		echo "\n";
		$contaJose->fecharConta();
		echo "\n";

		print_r($contaCreusa);
		echo "\n";

		print_r($contaJose);
		echo "\n";
	 ?>
	</pre>
</body>
</html>