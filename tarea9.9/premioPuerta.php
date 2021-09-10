<?php

    if (isset($_GET["premio"])) {
        $r = $_GET;

        $premio = $r["premio"];

        switch ($premio) {
            case '1':
                $resultado = "¡Su premio es una CABRA!";
                break;
            case '2':
                $resultado = "¡Su premio es un CARRO!";
                break;
            case '3':
                $resultado = "¡Su premio es una PIEDRA!";
                break;
            
            default:
                $resultado = "Nada jeje";
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
        <title>Puerta con premio</title>
    </head> 

    <body>
        
        <form method="get" action="premioPuerta.php">

            <label for=""> Seleccione su puerta </label>

                <select name="premio">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>       
                </select>

            <button type="submit"> Enviar </button>

        </form>

        <hr>

        <h2><?php echo $resultado; ?></h2>

    </body>

</html>