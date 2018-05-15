
        <?php 
		$peso = $_GET['peso'];
		$altura = $_GET['altura'];
		
		$resut1 = $altura*$altura;
		$resut2 = $peso/$resut1;
		
		$resuttotal = number_format($resut2);
		
		echo "Seu IMC e:"." ".$resuttotal.", ";

		if ($resuttotal < 16) {
			echo "Voce esta com Desnutrição";
		}
		if ($resuttotal > 16 && $resuttotal <= 17){
			echo "Voce esta com Desnutrição Moderada";
		}
		if ($resuttotal > 17 && $resuttotal <= 18.5) {
			echo "Voce esta com Desnutrição Leve";
		}
		if ($resuttotal >18.5 && $resuttotal <= 25) {
			echo "Voce esta Saudavel!";
		}
		if ($resuttotal > 25 && $resuttotal <=30) {
			echo "Voce esta com Sobrepeso";
		}
		if ($resuttotal > 30) {
			echo "Voce esta com Obesidade";
		}
		?>
