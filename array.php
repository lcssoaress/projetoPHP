<?php 
$alunos=array("joao","maria","jose");

echo "Alunos: $alunos[0]/"."$alunos[1]/"."$alunos[2]";

echo "</br></br>";

$idade=array("18", "23", "16");

echo "Idade: $idade[0]/"."$idade[1]/"."$idade[2]";

echo "</br></br>";

$sexo=array("Masculino", "Feminino", "Masculino");

echo "Sexo: $sexo[0]/"."$sexo[1]/"."$sexo[2]";

echo "</br></br>";

$email []="joao@gmail.com";
$email []="maria@gmail.com";
$email []="jose@gmail.com";
echo "</br>";
echo "<pre>";
print_r($email);
echo "</pre>";
echo "</br>";
echo "<pre>";
var_dump($email);
echo "</pre>";

$aluno=array("osvaldo",26,"osvaldo@gmail.com",25.5,true);

echo "<pre>";
var_dump($aluno);
echo "</pre>";


echo "<pre>";
print_r($aluno);
echo "</pre>";

for ($i=0; $i < 6; $i++) { 
$vetor[$i] = 12;
}
for ($i=0; $i < 6; $i++) { 
echo "O valor do vetor: ". $vetor[$i] ."</br>";
}
 ?>
