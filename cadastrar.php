<?php 
$nome = $_POST['nome'] ;
$email = $_POST['email'] ;

if ($nome == "lucas" && $email == 'soares@gmail.com') {
	echo("<table>");
	echo "<tr>";
	echo "<td>";
	echo("<strong>cadastrado corretamente </strong>");
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo("<strong>aguarde entrada!</strong>");
	echo "</td>";
	echo "</tr>";
	echo("</table>");
}else {
	echo "senha ou usuario incorretos";
}


 ?>