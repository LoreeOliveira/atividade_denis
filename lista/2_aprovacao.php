<?php
echo "<h2>Notas</h2>";

// Classificar uma nota
$nota = 3;
$falta = 20;

// Verifica se o aluno foi aprovado
if ($nota >= 6 && $falta <= 15) {
    echo "Nota: Aprovado!";
    
} else {
    echo "Nota: Reprovado!";
}
?>
