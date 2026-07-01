<?php

$valor = 220;

if($valor >= 500){
    echo "O valor de entrada foi de $valor, e o valor de desconto foi de 20%, valor final: " . $valor - ($valor * 20 / 100) . "R$";

} elseif($valor < 500 && $valor >= 200){
    echo "O valor de entrada foi de $valor, e o valor de desconto foi de 10%, valor final: " . $valor - ($valor * 10 / 100) . "R$";

} else{
    echo "Não recebe nenhum desconto, o valor final é de: R$$valor";
}

?>