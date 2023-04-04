<?php
require_once("../../config/session.php");
require_once("../../library/validations.php");
require("../../model/model.php");


function login_controller($email, $password)
{
    try {
        if (valid_email ($email, 'Email Address')) {
            if (validate_password($password, 'Password')) {
                # code...
            }
        }
    } catch (\Exception $error) {
        $_SESSION['error'] = $error->getMessage();
        header('location:../../view/main/login.php');
        return;
    }
}




if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $_SESSION['email'] = $email;
} else {
    $_SESSION['error'] = "Unauthorized Action, Please refresh the page and login";
    header('location:../../view/main/login.php');
    return;
}
