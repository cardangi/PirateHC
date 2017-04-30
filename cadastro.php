<?php

require 'config/config.php';

//valida campos e nao deixa passar em branco
if(isset($_POST{"nome"}) && !empty($_POST["nome"])){
	if(isset($_POST["email"]) && !empty($_POST["email"])){
		if(isset($_POST["senha"]) && !empty($_POST["senha"])){

			$nome  = addslashes($_POST["nome"]);
			$email = addslashes($_POST["email"]);
			$senha = md5(addslashes($_POST["senha"]));

			$sql = ("INSERT INTO users SET nome='$nome', email='$email', senha='$senha'");
			$db->query($sql);

			echo "Usuario $nome cadastrado com sucesso";

		}
	}		
}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro::PirateHC</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

		<div id="logo">
			<img src="imagens/logo.png" width="200" height="200">
		</div>

		<div id="form">
			<form method="post">

				<input type="text"     name="nome" placeholder="Nome"><br>
				<br>
				<input type="email"    name="email" placeholder="E-mail"><br>
				<br>
				<input type="password" name="senha" placeholder="Senha"><br>
				<br>
				<span id="button"><input type="submit"   value="Efetuar cadastro"></span>
			</form>

		</div>	
	</body>
</html>