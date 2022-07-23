<?php
require '../DB/connection.php';
try{
//     Esta variable se llama signos porque la tabla se llama de la misma forma, es la variable a utilizar para que me salga el select con options en el idex
    $signos = $connection->query('SELECT * FROM signos')->fetchAll();
}catch(Exception $error){
    echo '<p>Lo sentimos, algo ha fallado.</p>';
}
