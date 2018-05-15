<?php 
		$nome1 = $_GET['1name'];
		$nome2 = $_GET['2name'];
		$nome3 = $_GET['3name'];
		$nome4 = $_GET['4name'];
		$nome5 = $_GET['5name'];
		
		$criar = fopen ("arquivo2.txt", "w");

		$nome01 = fwrite($criar, $nome1."\r\n");
		$nome02 = fwrite($criar, $nome2."\r\n");
		$nome03 = fwrite($criar, $nome3."\r\n");
		$nome04 = fwrite($criar, $nome4."\r\n");
		$nome05 = fwrite($criar, $nome5."\r\n");
		fclose($criar);

		echo readfile("arquivo2.txt");

		?>