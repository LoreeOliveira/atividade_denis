<?php
// Nota dos 5 alunos
$notas = [7, 8, 9, 6, 5];
$soma = 0;

// Pega a primeira nota do vetor para começar a comparar
$maiorNota = $notas[0];
$menorNota = $notas[0];

foreach ($notas as $nota) {
    // Soma todas as notas para depois calcular a média
    $soma += $nota;

    // Verificar se a nota atual é a maior
    if ($nota > $maiorNota) {
        $maiorNota = $nota;
    }

    // Verificar se a nota atual é a menor
    if ($nota < $menorNota) {
        $menorNota = $nota;
    }
} 

// Calcular a média (depois de somar todas as notas)
$media = $soma / 5;

// Exibir os Resultados
echo "<h2>Resultados da Média</h2>";
echo "Média da Turma: $media <br>";
echo "Maior Nota: $maiorNota <br>";
echo "Menor Nota: $menorNota <br>";
?>

