<?php 
$escolha = $_POST["esc"];
setcookie("esc", $escolha, time()+60);
echo "$escolha";
 ?>