<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CADASTRE-SE</title>
<link rel="icon" href="imagem/sale.png">
<link href="css/responsivo.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
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
  
  
  <article class="corpo">
	<form method="post" id="formulario" action="validacadastro.php">
		<fieldset class="fieldPai">
			<legend id="fieldPai">Cadastro de Usuário</legend>
			
			<fieldset><legend>Dados Usuario</legend>
			<label for="cNome">Nome:</label><br>
			<input type="text" id="cNome" placeholder="Nome" class="input" name="nome" required>
			<br>
			<label for="cSNome">Sobrenome:</label><br>
			<input type="text" id="cSNome" placeholder="Sobrenome" class="input" name="sobrenome" required>
			<br>
			<label for="cEmail">E-Mail:</label><br>
			<input type="email" id="cEmail" placeholder="E-mail"  class="input" name="email" required>
			<br>

			<label for="cSenha">Senha:</label><br>
			<input type="password" id="cSenha" placeholder="Informe a senha"  class="input" name="senha" required>
			<label for="cSenha2">Repita a senha:</label><br>
			<input type="password" id="cSenha2" placeholder="Confirme a senha"  class="input" name="senha2" required>

			<br>
			<label for="cTel">Telefone</label><br>
			<input type="tel" id="cTel" placeholder="(XX) X.XXXX-XXXX" class="input" name="tel" required>
			<br>
			<label for="cData">Data Nascimento</label><br>
			<input type="date" id="cData" name="data" required>
	
			</fieldset>
			
			<fieldset><legend>Sexo</legend>
			
			<input type="radio" id="cMasc" value="M" name="sexo" required><label for="cMasc">Masculino</label>
			<br>
			<input type="radio" id="cFem" value="F" name="sexo" required><label for="cFem">Feminino</label>
			</fieldset>
			
			<fieldset><legend>Endereço</legend>
			
			<label for="cRua">Rua:</label><br>
			<input type="text" id="cRua" placeholder="Nome da Rua" class="input"name="rua" required>
			<br>
			<label for="cNum">Numero:</label><br>
			<input type="number" id="cNum" placeholder="Numero" min="1" max="9999" class="input" name="num" required>
			<br>
			<label for="cBairro">Bairro:</label><br>
			<input type="text" id="cBairro" placeholder="Bairro" class="input" name="bairro" required>
			</fieldset>
			
			<button type="submit" class="btn">CADASTRAR</button>
				
	
		</fieldset>
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
