<?php
// Exemplos de condicionais - IF e Else

    $nota = -200 . PHP_EOL; //criação da variável
    echo "Nota -200 kkkkkk";

    if //condicional de verdadeiro ou falso 
    ($nota>=8){echo "\nAPROVADO";}
// Se o valor informado for maior ou igual a oito, o aluno é aprovado.

    else if($nota>=5 && $nota<=7){ 
    echo "\nRECUPERAÇÃO";
// Se o valor informado foir maior ou igual a cinco e menor ou igual a sete, o aluno fica de recuperação.
}

    else if($nota>=0 && $nota<=4){
    echo "\nREPROVADO";
// Se o valor informado for maior ou igual a zero e menor ou igual a quatro, o aluno é reprovado.
}
    else {echo "\nVALOR INVÁLIDO";}
// Se o valor informado na variável não se encaixar nas condições acima, o valor é dado como INVÁLIDO e o programa é finalizado.

    echo "\nPROGRAMA FINALIZADO";

?>