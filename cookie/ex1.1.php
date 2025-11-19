<?php 
$escolha = $_POST["esc"];
$deidara = 0;
$zetsu = 0;
$hidan = 0;
$kakuzu = 0;
$kisame = 0;

if (isset($_COOKIE['esc']) !== "") {
	setcookie("esc", $escolha, time()+60);
$msg = "Parabéns pelo voto!";
	
}else{
$msg = "você ja votou uma vez!";

}

echo "$msg";




 ?>

 <a href="ex1.php">Voltar para a tela de votação.</a>