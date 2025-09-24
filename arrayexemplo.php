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

$num = array(1, 2, 3, 4, 5);

$nome6["MA"] = "maria";
$nome6["PE"] = "pedro";
$nome6["JO"] = "joao";

echo "<pre>";
var_dump($nome6);
echo "<pre/>";
 ?>