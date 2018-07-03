
<?php
include("conexao.php");

$consulta = "SELECT * FROM produtos";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arduino</title>
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
    <nav id="menulateral">
		<ul>
          <a href="arduino.php"><li>Arduino</li></a>
          <a href="eletronica.php"><li>Eletronica</li></a>
          <a href="embarcados.php"><li>Embarcados</li></a>
          <a href="kits.php"><li>Kits</li></a>
		</ul>
	</nav>    
  
  <section id="produtos">
<!--
1 arduino
2 Eletronica 
3 embarcados
4 Kits
	-->

        <h2>PRODUTOS</h2>
        
 <?php while($dado = $con->fetch_array()){
		if ($dado["tipo"] == 1){
 	?>    

     <div class="imgBox">
		<?php echo '<img width="60px" src="data:image/jpeg;base64,'.base64_encode( $dado['imagem'] ).'"/>';?>
		<div class="container">
			<div class="content">
				<h3><?php echo $dado["nome"];?></h3>
				<p><?php echo $dado["descricao"];?></p>
				<p><?php echo "R$ ";echo $dado["preco"];echo ",00"?></p>
				<p><?php echo $dado["quantidade"];?></p>
				<a href="finalizarcompra.php">COMPAR</a>
				</p>
			</div>
		</div>
	</div>
	<?php }}?>
  </section>


  <section id="pub">
  	PUBLICIDADE
  	<img src="imagem/pub/russia.gif">
  	<img src="imagem/pub/cc.gif">
  	<img src="imagem/pub/spf.gif">
  	<img src="imagem/pub/intel.gif">
  </section>
   
   
   
   
    
<footer id="rodape">
SALE - Peças e Acessórios<br>
63660-000, Centro, Tauá - CE<br>
(88) 9.9697-0026<br>
&copy <a href="https://www.facebook.com/marla.leite.1">Marla Leite</a>
</footer>
      
        
</div> 
</body>
</html>