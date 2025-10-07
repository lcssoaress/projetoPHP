<?php 
/*
1 - Faça um algoritmo que determine o maior entre N números. A condição de
parada é a entrada de um valor 0, ou seja, o algoritmo deve ficar calculando o
maior até que a entrada seja igual a 0 (ZERO). 
*/
echo "<br/><br/>";
echo "EX1";
echo "<br/><br/>";
$maior = 0;
$saida=0;
$num1=1;
	while($saida != 0){
                    if ($num1 > $maior) {
                $maior = $num1;
             echo "\n$maior";
            }
            $num1++;
        }
         echo "Saindo do sistema...";

/*2. Faça um algoritmo que conte de 1 a 100 e a cada múltiplo de 10 emita uma
mensagem: “Múltiplo de 10”	*/
echo "<br/><br/>";
echo "EX2";
echo "<br/><br/>";
$cont=0;
while ($cont<100) {
    $cont++;
    if (($cont%10)==0) {
        echo "<br/>$cont Múltiplo de 10";
    }else{
        echo "<br/>$cont";
    }
    }

/*3. Uma rainha requisitou os serviços de um monge e disse-lhe que pagaria qualquer
preço. O monge, necessitando de alimentos, indagou à rainha sobre o
pagamento, se poderia ser feito com grãos de trigo dispostos em um tabuleiro de
xadrez, de tal forma que o primeiro quadro deveria conter apenas um grão e os
quadros subsequentes, o dobro do quadro anterior. A rainha achou o trabalho
barato e pediu que o serviço fosse executado, sem se dar conta de que seria
impossível efetuar o pagamento. Faça um algoritmo para calcular o número de
grãos que o monge esperava receber.*/

echo "<br/><br/>";
echo "EX3";
echo "<br/><br/>";

$num1=1;

for ($cont=0; $cont<64; $cont++){
    echo ("<br/>Grãos: $num1");
    $num1 = $num1 * 2;
}

 ?>