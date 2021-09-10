<?php

    echo "<h2> El nombre es: ".$_POST['nombre']."</h2>";
    echo "<h2> Su apellido es: ".$_POST['apellido']."</h2>";
    echo "<h2> Su edad es: ".$_POST['edad']."</h2>";
    echo "<h2> Usted es de: ".$_POST['ciudad']."</h2>";
    echo "<h2> Su teléfono es: ".$_POST['telefono']."</h2>";
    echo "<h2> Su correo es: ".$_POST['correo']."</h2>";
    echo "<h2> Su estado civíl es: ".$_POST['estado']."</h2>";

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>

    <body>
        <form method="post" action="formularioRegistro.php">

        <label for=""> Escriba su nombre: </label>
        <input style="border-radius: 10%" type="text" name="nombre">

        <hr>

        <label for=""> Escribe sus apellidos: </label>
        <input style="border-radius: 10%" type="text" name="apellido">

        <hr>

        <label for=""> Seleccione su ciudad: </label>

        <select name="ciudad">
                <option>Guaymas</option>
                <option>Hermosillo</option>
                <option>Cajeme</option>       
                <option>Empalme</option>   
                <option>Guadalajara</option>
                <option>Culiacán</option>
                <option>Huatabámpo</option>
                <option>Sahuaripa</option>
            </select>

        <hr>

        <label for=""> Escriba su edad </label>
        <input style="border-radius: 10%" type="text" name="edad">

        <hr>

        <label for=""> Escribe su teléfono: </label>
        <input style="border-radius: 10%" type="text" name="telefono">

        <hr>

        <label for=""> Escriba su correo: </label>
        <input style="border-radius: 10%" type="email" name="correo">

        <hr>

        <label for=""> Seleccione su estado civíl: </label>
        <br>

        <input type="radio" name="estado" value="Soltero">  <label for="estado">Soltero</label>
        <br>
        <input type="radio" name="estado" value="Casado">  <label for="estado">Casado</label>
        <br>

        <hr>

        <button type="submit"> Enviar </button>

        </form>
    </body>

</html>