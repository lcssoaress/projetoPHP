<?php
echo "EX:1"; 
echo "<br/>";

$emp = array(
array(25,12,35),
array(85,47,98),
array(32,38,105)
);

$emp2 = array(
array(98,65,35),
array(5,27,8),
array(74,14,3)
);

$emp3 = array(
array(),
array(),
array()
);



for ($Linha=0; $Linha < 3; $Linha++) { 
	for ($Coluna=0; $Coluna < 3; $Coluna++) { 
		$emp3[$Linha][$Coluna] = $emp[$Linha][$Coluna]+$emp2[$Linha][$Coluna];
	}
	
}

echo "<pre>";
print_r($emp3);
echo "<pre/>";

echo "EX:2"; 
echo "<br/>";

$emp4 = array(
array(),
array(),
array()
);

for ($Linha=0; $Linha < 3; $Linha++) { 
	for ($Coluna=0; $Coluna < 3; $Coluna++) { 
		$emp4[$Linha][$Coluna] = $emp[$Linha][$Coluna]+$emp2[$Linha][$Coluna]+$emp3[$Linha][$Coluna];
	}
	
}

echo "<pre>";
print_r($emp4);
echo "<pre/>";

 ?>