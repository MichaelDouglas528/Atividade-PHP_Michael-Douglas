<?php
/*3. Faça um programa em PHP que defina uma variável com o peso e a altura
de uma pessoa. Calcule e mostre o IMC*/
$peso = 70; // Peso em quilogramas
$altura = 1.75; // Altura em metros

// Cálculo do IMC
$imc = $peso / ($altura * $altura);

echo "O IMC é: " . $imc;
?>
