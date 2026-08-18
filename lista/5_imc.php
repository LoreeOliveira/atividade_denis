<?php
// Criamos uma função que faz a Conta do IMC
function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}

// Criar uma Variável
$meuPeso = 56;
$minhaAltura = 1.56;
$resultadoIMC = calcularIMC($meuPeso, $minhaAltura);

// Colocar os valores
if ($resultadoIMC < 18.5) {
    $classificacao = "Abaixo do Peso";
} elseif ($resultadoIMC < 25) {
    $classificacao = "Peso normal";
} elseif ($resultadoIMC < 30) {
    $classificacao = "Sobrepeso";
} else {
    $classificacao = "Obesidade";
}
 // Exibimos a mensagem na tela
echo "Seu IMC é: $resultadoIMC <br>";
echo "Classificação: $classificacao";
?>
