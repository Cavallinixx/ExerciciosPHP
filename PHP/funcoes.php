<?php
    $num1 = 0;
    $num2 = 0;
    $num3 = 0;
    $palavra = "";
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
    function poNeZe($num1){
        if ($num1 == 0){
            return "O número informado é ZERO!!";
        }if ($num1 < 0){
            return "O número informado é NEGATIVO!!";
        }else{
            return "O número é POSITIVO!!";
        }
    }
    function tabuada($num1){
        $i = 1;
        $msg = "";
        while ($i <=10){
            $resultado = $num1 * $i;
            $msg .= "<br>".$num1." X ".$i." = ".$resultado;
            
            $i++;
        }
        return $msg;
    }

    function somarAteNum($num1){
        $soma = 0;
        
        
            for($i = 1; $i <= $num1; $i++){
                $soma += $i;
                echo "Adicionando: $i, Soma atual: $soma\n";
            }
            return $soma;
          
    }

    function numPrimo($num1){
        if($num1 <= 1){
            return "O número não é primo";
        }
        
        $primo = true;
        
        for($i = 2; $i <= sqrt($num1); $i++){
            if ($num1 % $i == 0){
                $primo = false;
                break;
            }
        }
        
        if ($primo) {
            return "O número $num1 é primo.";
        } else {
            return "O número $num1 não é primo.";
        }
    }

    function palindromo($palavra){
        
    
        if ($palavra == strrev($palavra)) {
            return "A palavra '$palavra' é um palíndromo.";
        } else {
            return "A palavra '$palavra' não é um palíndromo.";
        }
    }
    
   
    

    
   
    /*
    //Imprimir dos dados na tela
    echo "<br>A soma dos números é: ".somar(5,6);
    echo "<br>A subtração dos números é: ".parImpar(5,6);
    echo "<br>A subtração dos números é: ".idade(5,6);
    
    
    */


?>