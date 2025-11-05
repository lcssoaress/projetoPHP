<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado do Quiz</title>
<?php
session_start();

$respostas = [
  'q1' => 'a',
  'q2' => 'a',
  'q3' => 'b',
  'q4' => 'b',
  'q5' => 'a',
  'q6' => 'b',
  'q7' => 'b',
  'q8' => 'a',
  'q9' => 'b',
  'q10' => 'a'
];
$usuario = $_SESSION + $_POST;
$pontos = 0;
foreach ($respostas as $pergunta => $respostaCerta) {
  if (isset($usuario[$pergunta]) && $usuario[$pergunta] === $respostaCerta) {
    $pontos++;
  }
}
?>
</head>
<body>
  <h1>Resultado do Quiz</h1>
  <p><?php echo $_SESSION['nome'] ?> Você acertou <strong><?php echo $pontos; ?></strong> de 10 perguntas!</p>

<?php 
if ($pontos == 10) {
	echo "Parabéns! Você acertou tudo!";
}elseif ($pontos >= 7) {
	echo "Muito bem! Você foi ótimo!";
}elseif ($pontos >= 4) {
	echo "Ah, que pena, quase lá.";
}elseif ($pontos >= 1) {
	echo "Estude mais e tente novamente";
}else{
	echo "Você errou tudo, tente novamente.";
}
 ?>


  
  
 
 
  <a href="nome.php">Refazer o quiz</a>
</body>
</html>

<?php

session_destroy();
?>