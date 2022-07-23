<?php
require '../DB/connection.php';
try{
    $signos = $connection->query('SELECT * FROM signos')->fetchAll();
}catch(Exception $error){
    echo '<p>Lo sentimos, algo ha fallado.</p>';
}