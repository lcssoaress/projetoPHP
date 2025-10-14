<?php 
$nome = $_POST['nome'] ;
$email = $_POST['email'] ;

if ($nome == "lucas" && $email == 'soares@gmail.com') {
	echo("<table>");
	echo "<tr>";
	echo("<th><strong>cadastrado corretamente </strong></th>");
	echo "</tr>";
	echo("</table>");
}else {
	echo "senha ou usuario incorretos";
}


 ?>