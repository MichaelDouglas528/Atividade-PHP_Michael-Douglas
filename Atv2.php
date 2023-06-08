<?php
/*2. Faça um programa PHP que defina uma constante PI com valor 3.141592.
Crie uma variável, atribua um valor que represente o raio de uma esfera.
Calcule e apresente sua área e seu volume, dados pelas fórmulas:
*/
define("PI", 3.141592); // Definindo a constante PI

$raio = 5; // Valor do raio da esfera

// Cálculo da área da esfera
$area = 4 * PI * pow($raio, 2);

// Cálculo do volume da esfera
$volume = (4/3) * PI * pow($raio, 3);

echo "O resultado da área da esfera: " . $area . "<br>";
echo "O resultado do volume da esfera: " . $volume . "<br>";
?>
