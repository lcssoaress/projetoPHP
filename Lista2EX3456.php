<?php 
echo "EX3";
echo "<br/>";

$nota = 0;
$maior = 0;
$media = 0;
$alunos = array('lucas' => 7,'marcio' => 10,'jessica' => 6,'rafael' => 4,'leticia' => 9,'pedro' => 7,'joao' => 3,'felipe' => 6,'sergio' => 9,'marcela' => 2);





foreach ($alunos as $key => $value) {
	$media = $media + $value;
}

foreach ($alunos as $key => $value) {
	$nota = $nota + $value;
}

for ($c=0; $c < 10; $c++) { 
	if ($nota > $maior) {
	$maior = $maior + $nota;
}
}




$media = $media / 10;

echo "A média da nota dos alunos é: $media.";

echo "<br/>O aluno com maior nota é: $maior.";


echo "<br/>";
echo "EX4";
echo "<br/>";

$meses = ["","janeiro","fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro"];


print_r($meses[1]);

echo "<br/>";
echo "EX5";
echo "<br/>";

$cadastro = array(
array ("joao","são paulo",18,"M"),
array ("pedro","santos",18,"M"),
array("joao","santos",18,"M"),
array("marcia","são paulo",18,"M"),
array("rodrigo","santos",18,"M"),
array("fabio","são paulo",18,"M"),
array("laercio","santos",18,"M"),
array("felipe","são paulo",18,"M"),
array("joao","santos",18,"M"),
array("joao","são paulo",18,"M"),
);


foreach ($cadastro as $key => $value) {
	echo "<br/>";
	echo $key . "=>" . $value . "\n";



}

 ?>