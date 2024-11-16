<?php
require_once 'app/models/User.php';

class UserController {

    public function index() {
        $userModel = new User();
        $users = $userModel->getAllUsers();
        require_once 'app/views/user/index.php';
    }

    public function create() {
        require_once 'app/views/user/create.php';
    }

    public function store($name, $email) {
        $userModel = new User();
        $userModel->createUser($name, $email);
        header('Location: /index.php');
    }

    public function edit($id) {
        $userModel = new User();
        $user = $userModel->getUserById($id);
        require_once 'app/views/user/edit.php';
    }

    public function update($id, $name, $email) {
        $userModel = new User();
        $userModel->updateUser($id, $name, $email);
        header('Location: /index.php');
    }

    public function delete($id) {
        $userModel = new User();
        $userModel->deleteUser($id);
        header('Location: /index.php');
    }
}
