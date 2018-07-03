<?php
include("../conexao.php");
$id = $_GET['id'];
$consulta = "SELECT * FROM produtos WHERE ID = $id;";
$listar = $mysqli->query($consulta) or die($mysqli->error);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PRODUTOS</title>
<link rel="icon" href="../imagem/sale.png">
<link href="css/responsivo.css" rel="stylesheet" type="text/css">
<link href="css/menulateral.css" rel="stylesheet" type="text/css">

<style type="text/css">
	form{width: 600px; margin-right: 0px;}

.cadprod{ background-color:#eeeeee; width: 724px; float: left;}
.cadprod h2{text-align: center; margin: 10px 0;}


</style>

</head>

<body>
<div id="geral">

<div id="topo">
	<div id="menu">
		<nav id="menutopo">
		<ul>
           <a href="usu_list.php"><li>USUARIOS</li></a>
           <a href="prod_list.php"><li>PRODUTOS</li></a>
        </ul>
    </nav>
	</div>
	
    <a href="usu_list.php"><div id="logomarca">
		<img src="../imagem/sale.png">
	</div>
</a>
</div>
 
  <article class="cadprod">
<?php while($dado = $listar->fetch_array()){?>
	<form method="post" action="updateprodutos.php">
		<input type="hidden" id="cNum" class="input" name="id" value="<?php echo $dado["id"];?>">
		Nome:
		<input type="text" name="nome" value="<?php echo $dado["nome"];?>"></br></br>
		Descrição: 
		<textarea name="descricao" placeholder="<?php echo $dado["descricao"];?>" request></textarea> </br></br>
		Preço: 
		<input type="number" name="preco" value="<?php echo $dado["preco"];?>"></br></br>
		Imagem: 
		<input type="file" name="imagem" accept="image/jpeg"></br></br>
		Quantidade: 
		<input type="number" name="quantidade" value="<?php echo $dado["quantidade"];?>"></br></br>
		Tipo: 
		<select name="tipo" onmousedown="document.querySelector('#fake').remove()">
			<option disabled selected id="fake">Grupo</option>
			<option value="1">Arduino</option>
			<option value="2">Eletronica</option>
			<option value="3">Embarcados</option>
			<option value="4">Kits</option>
		</select>
		</br></br>

		<input type="submit" value="CADASTRAR PRODUTO">		
	</form>
<?php }?>
</article>

<footer id="rodape">
SALE - Peças e Acessórios<br>
63660-000, Centro, Tauá - CE<br>
(88) 9.9697-0026<br>
&copy <a href="https://www.facebook.com/marla.leite.1">Marla Leite</a>
</footer>
</div>
</body>
</html>
