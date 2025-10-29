<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bloqueando paginas por sessoes</title>
	<?php 
session_start()
$_SESSION['nome'] = $_POST['nome'];
$_SESSION['senha'] = $_POST['senha'];
	 ?>
</head>
<body>
<b>Funcionario</b> <?php echo $_SESSION['nome']; ?>, logado com sucesso. <br>
<b>Data de conexao </b> <?php echo date("d/m/y"); ?>
<b>Hora de conexao </b> <?php echo date("H:i:s"); ?>
<a href="index.php">Area do admin</a>
</body>
</html>
