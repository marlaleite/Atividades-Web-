<?php
include("../conexao.php");
$id = $_GET['id'];
$consulta = "SELECT * FROM clientes WHERE ID = $id;";
$listar = $mysqli->query($consulta) or die($mysqli->error);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CADASTRE-SE</title>
<link rel="icon" href="../imagem/sale.png">
<link href="css/responsivo.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">

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
  	<?php while($dado = $listar->fetch_array()){?>
	<form method="post" class="formulario" action="updateusuario.php">
		<fieldset class="fieldPai">
			<legend id="fieldPai">Cadastro de Usuário</legend>
			
			<fieldset><legend>Dados Usuario</legend>
			<input type="hidden" id="cNum" class="input" name="id" value="<?php echo $dado["id"];?>">
			<br>
			<label for="cNome">Nome:</label><br>
			<input type="text" id="cNome" placeholder="Nome" class="input" name="nome" value="<?php echo $dado["nome"];?>" required>
			<br>
			<label for="cSNome">Sobrenome:</label><br>
			<input type="text" id="cSNome" placeholder="Sobrenome" class="input" name="sobrenome" value="<?php echo $dado["sobrenome"];?>"required>
			<br>
			<label for="cEmail">E-Mail:</label><br>
			<input type="email" id="cEmail" placeholder="E-mail"  class="input" name="email" value="<?php echo $dado["email"];?>" required>
			<br>

			<label for="cSenha">Senha:</label><br>
			<input type="password" id="cSenha" placeholder="Informe a senha"  class="input" name="senha" value="<?php echo $dado["senha"];?>"required>
			<label for="cSenha2">Repita a senha:</label><br>
			<input type="password" id="cSenha2" placeholder="Confirme a senha"  class="input" name="senha2" value="<?php echo $dado["senha2"];?>"required>

			<br>
			<label for="cTel">Telefone</label><br>
			<input type="tel" id="cTel" placeholder="(XX) X.XXXX-XXXX" class="input" name="tel" value="<?php echo $dado["telefone"];?>"required>
			<br>
			<label for="cData">Data Nascimento</label><br>
			<input type="date" id="cData" name="data" value="<?php echo $dado["datanascimento"];?>"required>
	
			</fieldset>
			
			<fieldset><legend>Sexo</legend>
			
			<input type="radio" id="cMasc" value="M" name="sexo" required><label for="cMasc">Masculino</label>
			<br>
			<input type="radio" id="cFem" value="F" name="sexo" required><label for="cFem">Feminino</label>
			</fieldset>
			
			<fieldset><legend>Endereço</legend>
			
			<label for="cRua">Rua:</label><br>
			<input type="text" id="cRua" placeholder="Nome da Rua" class="input"name="rua" value="<?php echo $dado["rua"];?>"required>
			<br>
			<label for="cNum">Numero:</label><br>
			<input type="number" id="cNum" placeholder="Numero" min="1" max="9999" class="input" name="num" value="<?php echo $dado["num"];?>"required>
			<br>
			<label for="cBairro">Bairro:</label><br>
			<input type="text" id="cBairro" placeholder="Bairro" class="input" name="bairro" value="<?php echo $dado["bairro"];?>"required>
			</fieldset>
			
			<button type="submit" class="btn">CADASTRAR</button>
		</fieldset>
	<?php }?>
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