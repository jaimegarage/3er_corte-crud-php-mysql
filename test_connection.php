<?php
include_once 'Database.php';

try {
    $database = new Database();
    $connection = $database->connect();

    if ($connection) {
        echo "<h1 style='color: green; text-align: center;'>Conexión exitosa a la base de datos</h1>";
    } else {
        echo "<h1 style='color: red; text-align: center;'>Error: No se pudo conectar a la base de datos</h1>";
    }
} catch (PDOException $e) {
    echo "<h1 style='color: red; text-align: center;'>Error: " . $e->getMessage() . "</h1>";
}
?>
