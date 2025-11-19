<?php 
$escolha = $_POST["esc"];
$deidara = 0;
$zetsu = 0;
$hidan = 0;
$kakuzu = 0;
$kisame = 0;
setcookie("esc", $escolha, time()+60);
if ($_COOKIE['esc'] == "Deidara") {
$msg = "Parabéns pelo voto!";
	
}else if ($_COOKIE['esc'] == "Zetsu") {
$msg = "Parabéns pelo voto!";
	
}else if ($_COOKIE['esc'] == "Hidan") {
$msg = "Parabéns pelo voto!";
	
}else if ($_COOKIE['esc'] == "Kakuzu") {
$msg = "Parabéns pelo voto!";
	
}else if ($_COOKIE['esc'] == "Kisame") {
$msg = "Parabéns pelo voto!";
	
}else{
$msg = "você ja votou uma vez!";

}

echo "$msg";

echo "<a href="location:ex1.php">Voltar</a>";


 ?>