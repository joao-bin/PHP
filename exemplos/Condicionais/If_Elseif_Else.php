<?php

$nota = 6;

// Em comparação a linguagem C,ela tem estrutura e funcionamento igual

if ($nota >= 7) {
    // esse o codigo é executado como resultado da primeira condição ser satisfeita
    echo "Aprovado";
} else if ($nota >= 5) {
    // esse codigo que é realizado a apartir a segunda condição ser satisfeita
    echo "Recuperação";
} else {
    // esse codigo que é realizado após nenhuma condição ser satisfeita
    echo "Reprovado";
}

?>
