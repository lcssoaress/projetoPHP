<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comparações</title>
	<?php 
	session_start();
	$_SESSION['nome2'] = $_POST['nome2'];
    $_SESSION['idade2'] = $_POST['idade2'];
	$_SESSION['peso2'] = $_POST['peso2'];
	$_SESSION['altura2'] = $_POST['altura2'];
	 ?>
</head>
<body>
<b>
	<?php
 if ($_SESSION['altura2'] > 170) {

	echo $_SESSION['nome2']," é maior, tendo ", $_SESSION['altura2']," de altura.";
}else{
echo "Pessoa1 é maior.";
} 
echo "<br/>";
if ($_SESSION['idade2'] > 50) {

	echo $_SESSION['nome2']," é mais velho(a).";
}else{
echo "Pessoa1 é mais velha.";
} 
echo "<br/>";
if ($_SESSION['peso2'] > 80) {

	echo $_SESSION['nome2']," tem um peso maior que a Pessoa1.";
}else{
echo "Pessoa1 é mais pesada do que ", $_SESSION['nome2'];
} 
?>
	
</b>
</body>
</html>