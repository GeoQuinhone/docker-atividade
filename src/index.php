<?php
$mysqli = new mysqli('db', 'geovaneuser', 'geovanepass', 'exampledb');

if ($mysqli->connect_errno) {
    echo "Falha na conexão: " . $mysqli->connect_error;
    exit();
}

echo "Conexão bem-sucedida!\n";

phpinfo();
?>
