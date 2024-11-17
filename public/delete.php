<?php
include_once '../controllers/UserController.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $controller = new UserController();
    $controller->deleteUser($id);
    header('Location: index.php');
    exit;
}
?>
