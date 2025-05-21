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