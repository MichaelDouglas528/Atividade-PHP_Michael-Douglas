<?php
/*5. Escreva um programa em PHP para somar todos os números pares num
intervalo de 10 a 500 e apresentar a soma.*/
$inicio = 10;
$fim = 500;
$soma = 0;

for ($i = $inicio; $i <= $fim; $i++) {
    if ($i % 2 === 0) { 
        $soma += $i; 
    }
}

echo "A soma de $inicio a $fim é: $soma";
?>
