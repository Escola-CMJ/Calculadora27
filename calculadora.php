<?php
	$BD_ip = "127.0.0.1";
	$BD_nome = "calculadora";
	$BD_usuario = "root";
	$BD_senha = "";
	include "config/conexao.php";

	if(@!$_POST['calcular']){
		echo "calculou?";
	}
//realiza consulta no banco de dados
  /*$consulta  = $conexao->query("SELECT * FROM pessoa");
  while ($linha = $consulta->fetch()) {
    echo $linha['nome']." - CPF: ".$linha['cpf']."<br>";
  }*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculadora com BD</title>
</head>
<body>
	<form method="post" action="/27/calculadora.php">
		<h1>Calculadora</h1>
		<div>
			<input name="val_a" type="text">
			<select name="op">
				<option value="+">+</option>
			</select>
			<input type="text" name="val_b">			
		</div>
		<button name="calcular">Calcular</button>
		<p id="resposta"></p>
	</form>
</body>
</html>