<?php

echo "<h1>Operadores Relacionais</h1>";  
$valorA =2;
$valorB = 3;
$valorC = 1;
echo "Valores de referencia: A={$valorA} B={$valorB} C={$valorC}";
echo "<br><hr><br>";

echo "<h3>Igualdade (==)</h3>";
if ($valorA == $valorB){
    $igual = 'verdadeiro';
}
else {
    $igual= 'falso';
}
echo "Na comparação {$valorA}=={$valorB} o resutado é {$igual}.";
echo "<br><hr><br>";

echo "<h3>Diferente de (!=)</h3>";

if ($valorA != $valorB){
    $igual = 'verdadeiro';
}
else {
    $igual= 'falso';
}
echo "Na comparação {$valorA} != {$valorB} o resutado é {$igual}.";
echo "<br><hr><br>";


echo "<h3>Maior que (>)</h3>";

if ($valorA > $valorB){
    $igual = 'verdadeiro';
}
else {
    $igual= 'falso';
}
echo "Na comparação {$valorA} > {$valorB} o resutado é {$igual}.";

echo "<br><hr><br>";

echo "<h3>Maior ou igual (>=)</h3>";

if ($valorA >= $valorB){
    $igual = 'verdadeiro';
}
else {
    $igual= 'falso';
}
echo "Na comparação {$valorA} >= {$valorB} o resutado é {$igual}.";

echo "<br><hr><br>";

echo "<h3>Menor(<)</h3>";

if ($valorA < $valorB){
    $igual = 'verdadeiro';
}
else {
    $igual= 'falso';
}
echo "Na comparação {$valorA} < {$valorB} o resutado é {$igual}.";

echo "<br><hr><br>";

echo "<h3>Maior ou igual (<=)</h3>";

if ($valorA <= $valorB){
    $igual = 'verdadeiro';
}
else {
    $igual= 'falso';
}
echo "Na comparação {$valorA} <= {$valorB} o resutado é {$igual}.";

