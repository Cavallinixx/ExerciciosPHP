<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Cálculos</h1>
    <form method="POST">
    <?php 
        include 'funcoes.php';//Conectando com o arquivo de funções.
    ?>

        <label>Primeiro Número: </label>
        <input type="number" id="num1" name="num1"/><br><br>

        <label>Segundo Número: </label>
        <input type="number" id="num2" name="num2"/><br><br>

        <label>Terceiro Número: </label>
        <input type="number" id="num3" name="num3"/><br><br>

        <button> Calcular
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                
            ?>        
        </button><br><br>

        
        <textArea rows="100" cols="40" readOnly>
            <?php
                echo "\nExercício 1: ".somar($num1,$num2). 
                "\nExercício 2: ".parImpar($num1).
                "\nExercício 3: ".idade($num1).
                "\nExercício 4: ".dobrar($num1).
                "\nExercício 5: ".conversaoCelcius($num1).
                "\nExercício 6: ".maiorNum($num1,$num2,$num3);
                
        
            ?>
        </textArea>
    </form>
</body>
</html>