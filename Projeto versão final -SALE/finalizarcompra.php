
<?php
include("conexao.php");

$consulta = "SELECT * FROM produtos";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Carrinho de compra</title>
<link rel="icon" href="imagem/sale.png">
<link href="css/responsivo.css" rel="stylesheet" type="text/css">
<link href="css/animacaoimg.css" rel="stylesheet" type="text/css">
<link href="css/menulateral.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="geral">

<div id="topo">
	<div id="menu">
			<nav id="menutopo">
		<ul>
           <a href="index.php"><li>HOME</li></a>
            <a href="login.php"><li>LOGIN</li></a>
            <a href="usu_cad.php"><li>CADASTRE-SE</li></a>
        </ul>
    </nav></div>
    <a href="index.php"><div id="logomarca">
		<img src="imagem/sale.png">
	</div>
</a>
</div>
<br>
<a href="index.php">SAIR</a>
<br>

<div align="center">
   <br>
   <img src="imagem/carrinho.png" width="50px">
   <br><br>
   <?php echo "<script src='js/js.js'></script>";?>
   <button onclick="fc()">FINALIZAR COMPRA<button>
   </div>  

<br><br>



<footer id="rodape">
SALE - Peças e Acessórios<br>
63660-000, Centro, Tauá - CE<br>
(88) 9.9697-0026<br>
&copy <a href="https://www.facebook.com/marla.leite.1">Marla Leite</a>
</footer>
      
        
</div> 
</body>
</html>