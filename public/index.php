<?php
include_once '../controllers/UserController.php';

$controller = new UserController();
$users = $controller->getAllUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Lista de Usuarios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <div class="center-button">
    <a href="create.php" class="btn">Agregar Usuario</a>
    </div>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Creado el</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']) ?></td>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['created_at']) ?></td>
                    <td>
                        <a href="delete.php?id=<?= $user['id'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <footer>
    <p>Creado por JAIME GAVIRIA <br> IUTCM <br> LENGUAJE DE PROGRAMACIÓN III <br> CORTE III</p>
    </footer>
</body>
</html>