<?php

/*
echo"ola mundo!<br>";


$ano_informado = 1995;
$ano_atual = date("Y");
$idade = $ano_atual - $ano_informado;

if($idade >= 18){
    echo "maior de idade 18. sua idade é $idade";
}else{
    "menor de idade 18. sua idede é $idade";
}
    
*/

/*
dada as ntos de 4 provas e a media para ser aprovada de ano sendo 7.
calcular se o aluno atingiu a media e informar se o mesmo foi aprovado.
dica: media aritimetica.

tema de casa: calcular tambem as medias poderada e harmonica.
*/


$mediaEscola = 7;

$prova1 = 9;
$prova2 = 7;
$prova3 = 2;
$prova4 = 2;

$mediaAluno = ($prova1 + $prova2 + $prova3 + $prova4) / 4;

if ($mediaAluno >= $mediaEscola) {
    echo "O aluno foi aprovado com a media: $mediaAluno";
} else {
    echo "O aluno foi reprovado tendo a sua media: $mediaAluno menor que a media da escola: $mediaEscola";
}


// Criar uma calculadora


$operador = "/";
$valor1 = 30;
$valor2 = 15;
$resultado = 0;


if ($operador == "+") {
    $resultado = $valor1 + $valor2;
} else if ($operador == "-") {
    $resultado = $valor1 - $valor2;
} else if ($operador == "*") {
    $resultado = $valor1 * $valor2;
} else if ($operador == "/") {
    $resultado = $valor1 / $valor2;
} else {
    echo "operador invalido";
}

echo "<br>Resultado: $resultado";
 
//switch case 

$operador = "+";
$valor1 = 30;
$valor2 = 15;
$resultado = 0;

switch($operador) {
    case "+":
        $resultado = $valor1 + $valor2;
    break;
    case "-":
        $resultado = $valor1 - $valor2;
    break;
    case "*":
        $resultado = $valor1 * $valor2;
    break;
    case "/":
        $resultado = $valor1 / $valor2;
    break;
    default:
        echo "operador invalido";
    break;
}

// ler 3 valores (A,B e C) e informar se eles sao iguais.

$valorA = 10;
$valorB = 10;
$valorC = 10;


if ($valorA == $valorB && $valorA == $valorC) {
    echo "os 3 valores sao iguais.";
} else {
    echo "os 3 valores sao diferentes.";
}



/*ler 3 valores(A, B e C) e informar ao usuario qual tipo de triangulo ele forma,
ou se não forman nenhum triangulo.
triangulos a considerar: equilateros, isocles e escaleno 

*/

/*$A = 10;
$B = 10;
$C = 10;



$multiplicador = 5;

for ($i = 0 ; $i <= 10; $i++){
    $RESULTADO = $MULTIPLICADOR * $I;
    echo "$multiplicador * $i = $resultado" . "<br>:";
}
*/


/*$contadorPares = 0;

for ($numero = 2; $contadorPares < 20; $numero++) {
    $resto = $numero % 2;
    $par = $resto == 0;

    if ($par) {
        echo "o numero $numero é par! <br>";
        $contadorPares++;
    }
}

*/

// criar uma contagem regressiva de 10 - 0

// encontrar os 5 primeiros numeros primos

$quantidadePrimos = 0;
$numero = 2;
  echo "os 5 primeiros numeros sao: <br>";

  while ($quantidadePrimos < 5) {
    $sePrimo = true;

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $sePrimo = false;
             break;
        }
    } if ($sePrimo) {
    echo $numero . "<br>";
    $quantidadePrimos++;
   }
    $numero++;
  }
