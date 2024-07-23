<?php
    $num1 = 0;
    $num2 = 0;
    $num3 = 0;

    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim do somar

    function parImpar($num1){
        if ($num1 % 2 == 0){
            return " $num1 é PAR!";
        }else{
            return " $num1 é IMPAR!";
        }
    }//fim do subtrair

    function idade($num1){
        if($num1 >= 18){
            return "MAIOR DE IDADE.";
        }else{
            return "MENOR DE IDADE.";
        }
    }//fim do multiplicar

    function dobrar($num1){
        return "O dobro de $num1 é: ".$num1 * 2;
    }

    function conversaoCelcius($num1){
        return ($num1 * 1.8) + 32;
    }
    
    function maiorNum($num1,$num2,$num3){
        return max($num1,$num2,$num3);
    }
    /*
    //Imprimir dos dados na tela
    echo "<br>A soma dos números é: ".somar(5,6);
    echo "<br>A subtração dos números é: ".parImpar(5,6);
    echo "<br>A subtração dos números é: ".idade(5,6);
    
    */


?>