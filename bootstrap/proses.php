<?php
include 'model.php';
if (isset($_POST['daftar'])) {
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $model = new Model();
    $model->insert($user, $email, $pass);
    header('location:index.php');
}
