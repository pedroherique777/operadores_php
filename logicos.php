<?php

echo "<h1>Operadores Logicos</h1>";  
$valorA =2;
$valorB = 3;
$valorC = 2;
echo "Valores de referencia: A={$valorA} B={$valorB} C={$valorC}";
echo "<br><hr><br>";

echo "<h3> OR </h3>";
echo "<h6>Verdadeiro quando A ou B forem iguais a C.</h6>";
echo "<br>";
if ($valorA or $valorB == $valorC){
    $igual = 'verdadeiro';
}
else {
    $igual= 'falso';
}
echo "Se A ou B = {$valorC} o resutado é {$igual}.";
echo "<br><hr><br>";

echo "<h3> XOR </h3>";
echo "<h6>Verdadeiro se A ou B forem iguais a C porem não ao mesmo tempo.</h6>";
echo "<br>";

if ($valorA xor $valorB == $valorC){
    $igual = 'verdadeiro';
}
else {
    $igual= 'falso';
}
echo "Se A ou B forem iguais a {$valorC} mas não ao mesmo tempo, o resultado é {$igual}.";
echo "<br><hr><br>";


echo "<h3>Não (!)</h3>";
echo "<h6>Quando um valor não é igual ao resultado</h6>";
echo "<br>";

if (!$valorB == $valorC){
    $igual = 'verdadeiro';
}
else {
    $igual= 'falso';
}
echo "Se B não for igual {$valorC} ele é {$igual}";

echo "<br><hr><br>";

echo "<h3> E (&&)</h3>";
echo "<h6>Quando os dois valores são iguais ao resultado</h6>";
echo "<br>";

if ($valorA && $valorB == $valorC){
    $igual = 'verdadeiros';
}
else {
    $igual = "falsos";
}
echo "Se A e B são iguais a {$valorC} eles são {$igual}.";

echo "<br><hr><br>";

