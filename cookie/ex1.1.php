<?php 
$escolha = $_POST["esc"];
setcookie("esc", $escolha, time()+60);
if (isset($_COOKIE['esc'])== "") {

	echo "Escolha um membro!";
}else{
	
}

 ?>