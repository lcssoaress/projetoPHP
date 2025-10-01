<?php 
$emp = array(

array(1,"Jose",4000),
array(2,"Maria",5000),
array(3,"Joao",3000),
);

/*
//usando for para organizar linha e coluna.

for ($Linha=0; $Linha < 3; $Linha++) { 
	for ($Coluna=0; $Coluna < 3; $Coluna++) { 
		echo $emp[$Linha][$Coluna]."  ";
	}
	echo "<br/>";

}

	*/

echo json_encode($emp);


$arr = [1,2,3,4,5];

foreach ($arr as $key => $value) {
	echo "<br/>";
	echo $key . "=>" . $value . "\n";



}
 ?>