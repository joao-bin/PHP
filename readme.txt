Declaração de Funções Definidas pelo Usuário.

Uma função é declarada e definida a partir do uso da keyword function que declara a função como todo.
    
| Formas de declarar uma função em PHP | 

// Forma 1:

    function name_function(parâmetros){ corpo da função}

//    Forma 2:

    function name_function(parâmetros)
    {
        
        corpo da função 
    
    }

| Estrutura de uma função em PHP

    > name_function(parâmetros)   

        - name_function: É nome da função que vem posteriomente a keyword function. 
        
        - (parâmetros): São os parâmetros da função que acompanham, em seguida, o nome da função.

        - {corpo da função}: É o corpo da função, onde é armazenado os scripts em que a função irá executar ao ser chamada.
    
    

    // O que são Parâmetros e Argumentos?
        
        > O parâmetro de uma função são variaveis/placeholder que irão armazenar algum tipo de dado.

        > O argumento de uma função é o valor real enviado para a função no momento de execução. São valores atribuidos às variáveis da função (aos parâmetros).

| Execução de uma Função em PHP

    > Para executar uma função/chamar uma função é necessário  usar o comando:

        name_function()

    > () : geralmente dentro do parentêses, é necessário informar um argumento para o parâmetro da função, caso não tenha entrada de dados na função.
 
| Múltiplos Parâmetros.

    > Uma função pode ter multiplos parâmetros os quais pode ser informados argumentos assim que a função é chamada (forma tradicional).



# Declaração de uma função com múltiplos parâmetros separados por ",".

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
