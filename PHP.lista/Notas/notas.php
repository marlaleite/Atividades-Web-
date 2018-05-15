<?php
		$nome = $_GET['nome'];
		$disciplina = $_GET['disciplina'];

		$nota1 = $_GET['nota1'];
		$nota2 = $_GET['nota2'];
		$nota3 = $_GET['nota3'];

		$media = ($nota1 + $nota2 +$nota3)/3;

		echo "" . $nome;
		echo ", na discipina".$disciplina;
		echo " sua media final é: ".$media. "<br";
	?>