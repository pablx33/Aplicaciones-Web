<?php

$enviado = false;

    if (isset($_GET["operador"])) {
        $enviado = true;
        $r = $_GET;

        $operador = $r["operador"];
        $num1 = $r["num1"];
        $num2 = $r["num2"];

        switch ($operador) {
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
            case '/':
                $resultado = $num1 / $num2;
                break;
            case '*':
                $resultado = $num1 * $num2;
                break;
            
            default:
                $resultado = "¡No sé qué color es ese!";
                break;
        }
    }


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora</title>
    </head>

    <body>

        <h1>Calculadora:</h1>
        
        <form method="get" action="switchCalculadora.php">

            <label for=""> Escribe el número 1 </label>
            <input style="border-radius: 10%" type="text" name="num1">

            <label for=""> Escribe el número 2 </label>
            <input style="border-radius: 10%" type="text" name="num2">

            <select name="operador">
                <option>+</option>
                <option>-</option>
                <option>/</option>       
                <option>*</option>   
            </select>

            <button type="submit"> Enviar </button>

        </form>

        <?php if($enviado){ ?>

        <hr>

        <h3><?php echo "El resultado es: " .$resultado; ?></h3>

        <?php } ?>
        
    </body>

</html>