  <?php 
		$salario = $_GET['calcsalario'];
		$vendas = $_GET['vendas'];
		
		$comissao = $vendas * 0.04;
		$salariofinal = $salario + $comissao;
		
		echo " A comisao calculada é: R$ ".$comissao. "<br>";
		
		echo "Seu salario final é: R$ ".$salariofinal. "<br>";
			
		?>
           