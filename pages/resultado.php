<?php
if (isset($_POST['btn2'])) {
    $id = $_POST['signoform'];
    require '../DB/connection.php';
    $signos2 = $connection->query('SELECT * FROM signos where id ="' . $id . '"')->fetchAll();


    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just Zodiac</title>
    <link rel="stylesheet" type="text/css" href="../css/resultado.css">
    <link rel="shortcut icon" href="../favicon.png">
</head>

<body>

    <!-- Div donde se muestra el nombre del signo del zodiaco escogido por el usuario -->

    <div class="bloque">
        <h3 class="titulobloque">TU SIGNO ES</h3>
        <p class="textobloque">
            <?php
 foreach ($signos2 as $signo2) {
    echo $signo2['nombre'];
};
?>
        </p>
    </div>

    <!-- Div donde se muestra el tipo del signo del zodiaco escogido por el usuario -->


    <div class="bloque">
        <h3 class="titulobloque">TIPO DE SIGNO</h3>
        <p class="textobloque">
            <?php
 foreach ($signos2 as $signo2) {
    echo $signo2['tipo'];
};
?>
        </p>
    </div>


    <!-- Div donde se muestra las cualidades del signo del zodiaco escogido por el usuario -->

    <div class="bloque">
        <h3 class="titulobloque">CUALIDADES DE TU SIGNO</h3>
        <p class="textobloque">
            <?php
 foreach ($signos2 as $signo2) {
    echo $signo2['cualidades'];
};
?>
        </p>
    </div>


    <!-- Div donde se muestra la afinidad del signo del zodiaco escogido por el usuario con el resto de signos -->

    <div class="bloque">
        <h3 class="titulobloque">TU AFINIDAD CON OTROS SIGNOS</h3>
        <p class="textobloque">
            <?php
 foreach ($signos2 as $signo2) {
    echo $signo2['afinidad'];
};
?>
        </p>
    </div>

    <!-- Div donde se muestra el futuro del signo del zodiaco escogido por el usuario -->


    <div class="bloque">
        <h3 class="titulobloque">ESTE ES TU FUTURO</h3>
        <p class="textobloque">
            <?php
 foreach ($signos2 as $signo2) {
    echo $signo2['futuro'];
};
?>
        </p>
    </div>

    <?php

};
?>
    <button class="boton" type="button"><a class="enlace" href="formulario.php">SABER EL FUTURO DE OTRO SIGNO</a></button>

</body>

</html>