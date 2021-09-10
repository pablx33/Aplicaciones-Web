<?php

if (isset($_GET["nombre"])) {
    $r = $_GET;

$nombre = $r["nombre"];
$nombre2 = $r["nombre2"];    
$edad = $r["edad"];
$edad2 = $r["edad2"];
$resultado;

    if ($edad > $edad2) {
        $resultado = $nombre ." es mayor a " .$nombre2;
    } elseif ($edad < $edad2) {
        $resultado = $nombre2 ." es mayor a " .$nombre;
    } else {
        $resultado = $nombre ." y " .$nombre2 ." tienen la misma edad";
    }   
    }

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comparar edades</title>
    </head> 

    <body>
        
        <form method="get" action="edades.php">
        
            <label for=""> Escribe un nombre: </label>
            <input style="border-radius: 10%" type="text" name="nombre">

            <label for=""> Escribe su edad: </label>
            <input style="border-radius: 10%" type="number" name="edad">

            <hr>

            <label for=""> Escribe un nombre: </label>
            <input style="border-radius: 10%" type="text" name="nombre2">

            <label for=""> Escribe su edad: </label>
            <input style="border-radius: 10%" type="text" name="edad2">

            <hr>

            <button type="submit"> Enviar </button>

        </form>

        <h2 style="font-size: 15px;"><?php echo $resultado; ?></h2>

    </body>

</html>