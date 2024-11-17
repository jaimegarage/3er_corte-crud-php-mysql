<?php
include_once '../controllers/UserController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $controller = new UserController();
    $controller->createUser($name, $email);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Agregar Usuario</h1>
    <form method="POST" action="">
        <label>Nombre:</label>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <button type="submit">Agregar</button>
    </form>
    <footer>
    <p>Creado por JAIME GAVIRIA <br> IUTCM <br> LENGUAJE DE PROGRAMACIÓN III <br> CORTE III</p>
    </footer>
</body>
</html>
