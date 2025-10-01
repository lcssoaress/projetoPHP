<?php 
echo "EX3";
echo "<br/>";

$aluno = array(
array("Joao", 4),
array("Lucas", 7),
array("Rafael", 5),
array("Guilherme", 10),
array("Leticia", 3),
array("Ceap", 8),
array("kaffer", 4),
array("Marcelly", 7),
array("Kamilly", 6),
array("Chaves", 10)
);


print_r($soma);

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
array("joao","são paulo",18,"M"),
array("joao","santos",18,"M"),
array("joao","são paulo",18,"M"),
array("joao","são paulo",18,"M"),
array("joao","são paulo",18,"M"),
array("joao","são paulo",18,"M"),
array("joao","são paulo",18,"M"),
);


foreach ($cadastro as $key => $value) {
	echo "<br/>";
	echo $key . "=>" . $value . "\n";



}

 ?>