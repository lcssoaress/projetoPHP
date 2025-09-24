<?php 

$nome1 = "maria";
$nome2 = "joao";
$nome3 = "lucas";
$nome4 = "rafael";
$nome5 = "hermes";

echo "$nome1<br/>$nome2<br/>$nome3<br/>$nome4<br/>$nome5<br/>";


$nome = array("maria","joao","lucas","rafael","hermes" );

echo "Os nomes no Array</br>";

foreach ($nome as $nome) {
	echo "<br/>".$nome;
}



 ?>