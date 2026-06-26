<?php

// mesma coisa do c também
echo "\n";
echo "       For\n";

// valor da variavel inicial | condição |  
 for ($i = 1; $i <= 10; $i++) {
    // codigo
    echo "$i ";

  // se a condição não for satisfeita,o codigo é executado denovo até satisfazer 

} 

echo "\n";
echo "\n  While\n";



$j = 1;

 while($j <= 5){
    // aqui só tem a condição que funciona da mesma maneira do for
   echo "$j "; 
   $j++;
   // por esta variavel de progressão para que o codigo não se repita infinitamente
}


echo "\n";
echo "\nForeach\n";


// esse aqui é exclusivo do php,ele não existe no C
// funciona com arrays e com outros tipos de daods dentro dele

$array = [1, 2, 3, 17];

foreach ($array as $value) {
    // array com os valores | a variavel que vai receber esses valores
    echo "$value ";
}
/* ele age como um for e while,no quesito de repetição,mas ele so acaba quando todos
os elementos forem "declarados" e executa o codigo com esse valor declarado

"as" = como 

ele vai em ordem sequencial do array
*/ 

echo "\n\n";
?>
