<?php 
if ($_SERVER['REQUEST_METHOD']== 'POST') {
$primeiroNome = $_POST['primeiroNome'];
$sobreNome = $_POST['sobreNome'];
$escolhaPets = $_POST['escolhaPets'];

echo "$primeiroNome "."$sobreNome "."$escolhaPets";

echo '<a href="../index.php">Voltar</a>';
	
}else{
	echo "é Get";
}



 ?>