<?php
include_once '../models/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function getAllUsers() {
        return $this->userModel->getAllUsers();
    }

    public function createUser($name, $email) {
        return $this->userModel->createUser($name, $email);
    }

    public function deleteUser($id) {
        return $this->userModel->deleteUser($id);
    }
}
?>
