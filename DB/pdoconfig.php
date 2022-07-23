<?php
$host = 'localhost';
$dbname = 'justzodiak';
$username = 'alberto';
$password = '12345678Cei';

$options = [
    \PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE  => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES  => false
];