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
  
  
  <article class="listar">
	<form method="post" action="validaprodutos.php" enctype="multipart/form-data">

		Nome:
		<input type="text" name="nome" required></br></br>
		Descrição: 
		<textarea name="descricao" required></textarea> </br></br>
		Preço: 
		<input type="number" name="preco" required></br></br>
		Imagem: 
		<input type="file" name="imagem" accept="image/jpeg" required></br></br>
		Quantidade: 
		<input type="number" name="quantidade" required></br></br>
		Tipo: 
		<select name="tipo" onmousedown="document.querySelector('#fake').remove()">
			<option id="fake">Grupo</option>
			<option value="1">Arduino</option>
			<option value="2">Eletronica</option>
			<option value="3">Embarcados</option>
			<option value="4">Kits</option>
		</select>
		</br></br>

		<input type="submit" value="CADASTRAR PRODUTO">		
	</form>
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
