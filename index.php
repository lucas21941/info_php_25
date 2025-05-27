<?php

echo"ola mundo!<br>";


$ano_informado = 1995;
$ano_atual = date("Y");
$idade = $ano_atual - $ano_informado;

if($idade >= 18){
    echo "maior de idade 18. sua idade é $idade";
}else{
    "menor de idade 18. sua idede é $idade";
}


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