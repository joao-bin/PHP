<?php # Tag de abertura de um script php.

# Declaração da Função seguido do parâmetro que terá o argumento informado pelo usuário ao chamar a função.
function hello_user( string $nome){

    echo "Olá, $nome. Seja bem vindo à Declaração de Funções em PHP.";

}

hello_user("Pedro");

 function equacaoSegundoGrau ($a, $b, $c) {
# Declaração do caso em que o "A" não pode ser zero.
   if ($a == 0) {
    return " O coeficiente 'a' não pode ser zero.";
   }
# Calculo do Determinante (Delta).
   $delta = ($b*$b) - (4 * $a * $c);
# Declaração do caso em que delta nao pode ser negativo, caso sim, não existem soluções reais.
   if ($delta < 0){
    return "Delta é negativo, logo não existem raízes reais para esta equação.";
   }
# Declaração dos parâmetros que definem as raizes.
   $x1 = (-$b +sqrt($delta)) / (2 * $a);
   $x2 = (-$b - sqrt($delta)) / (2 * $a);
# Retorno da Função.
   return "Raiz x1: $x1 | Raiz x2: $x2";
 }
# Função chamada com os argumentos -1, -5 e 6.
 echo equacaoSegundoGrau(1, -5, 6);
# tag de fechamento de um script php ?> 
