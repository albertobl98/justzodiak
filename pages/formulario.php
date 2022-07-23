<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just Zodiac</title>
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    <link rel="shortcut icon" href="../favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>

    <!-- Aquí comenzaría el formulario que va a reflejar los datos según su relleno -->

    <h1 class="titulo">Just Zodiac</h1>
    <h2 class="subtitulo">Introduce tus datos para saber todo sobre tu signo y tu futuro</h2>
    <form method="POST" name="formulario" class="form1">
        <label for="">
            <span class="textoform">Nombre</span>
            <input class="inputform" type="text" id="Nombre" placeholder="Inserte su nombre" required>
        </label>

        <label>
            <span class="textoform">Apellido</span>
            <input class="inputform" type="text" id="Apellido" placeholder="Inserte su Apellido" required>
        </label>

        <button type="button" name="btn" id="btn">Averigua Tu Futuro</button>
    </form>

    <!-- Aquí se almacena la respuesta de ayax y el segundo formulario con los distintos signos recogidos desde la base de datos -->

    <div style="display:none;" id="futuroForm">
        <p id="respuesta">

        </p>
        <form action="resultado.php" method="post" class="form2">
            <div>
                <select name="signoform" id="signoform">
                    <?php
    
                include 'select.php';
                foreach ($signos as $signo) {
                    echo '<option class="signosoption" value="' . $signo['id'] . '">' . $signo['nombre'] . '</option>';
                }
                ?>
                </select>
            </div>
            <button name="btn2" id="btn2">CONTINUAR</button>
        </form>
    </div>



</body>
<!-- Esta es la parte de javascript y ajax que la he utilizado para que en resultados se muestre el nombre y el apellido -->
<script src="../js/script.js"></script>

</html>
