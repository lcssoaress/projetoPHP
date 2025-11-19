<?php 
$escolha = $_POST["esc"];
$deidara = 0;
$zetsu = 0;
$hidan = 0;
$kakuzu = 0;
$kisame = 0;
setcookie("esc", $escolha, time()+60);
if ($_COOKIE['esc'] == "Deidara") {
echo "Parabéns pelo voto!";
	$deidara++;
}else if ($_COOKIE['esc'] == "Zetsu") {
echo "Parabéns pelo voto!";
	$zetsu++;
}else if ($_COOKIE['esc'] == "Hidan") {
echo "Parabéns pelo voto!";
	$hidan++;
}else if ($_COOKIE['esc'] == "Kakuzu") {
echo "Parabéns pelo voto!";
	$kakuzu++;
}else if ($_COOKIE['esc'] == "Kisame") {
echo "Parabéns pelo voto!";
	$kisame++;
}else{
echo "Selecione um dos membros da akatsuki!";

}
	


 ?>