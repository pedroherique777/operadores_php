<?php
echo "<h1>Operadores Artiméticos</h1><hr>";
$numeroA = 10;
$numeroB = 5;
echo"<br>";
//SOMA
echo "<h3>Operador SOMA (+)</h3>";
$soma = $numeroA + $numeroB;
echo " A soma de ".$numeroA." e ".$numeroB." é igual a ".$soma;
echo "<br><hr><br>";

//SUBTRAÇÃO
echo "<h3>Operador de SUBTRAÇÃO (-) </h3>";
$subtrai = $numeroA - $numeroB;
echo "Ao subtrair {$numeroB} de numero {$numeroB} o resultado é: {$subtrai}";
echo "<br><hr><br>";

//MULTIPLICAÇÃO
echo "<h3>Operador MULTIPLICAÇÃO (*)</h3>";
$multiplica = $numeroA * $numeroB;
echo "Ao multiplicar {$numeroA} e {$numeroB} o resultado é: {$multiplica}";
echo "<br><hr><br>";

//DIVSÃO
echo "<h3>Operador de Divisão(/) </h3>";
$div = $numeroA / $numeroB;
echo "Ao realizar a divisão do numero {$numeroA} e {$numeroB} o resultado é: {$div}";

//MODULO
echo "<h3>Operador Módulo (%)</h3>";
$mod = $numeroA % $numeroB;
echo "Ao realizar a divisão do numero {$numeroA} e {$numeroB} o Módulo é: {$mod}";
echo "<br><hr><br>";

//POTENCIA 
echo "<h3>Operador de Exponenciação (**)</h3>";
$expo= $numeroA ** $numeroB;
echo "Ao realizar a exponeniação do numero {$numeroA} e {$numeroB} o resultado é: {$expo}";
echo "<br><hr><br>";
?>