<?php 
require_once("../../config/session.php");
require_once("../../library/validations.php");
require_once("../../model/model.php");

function register_controller($fname, $lname, $username, $email, $password)
{
    try {
        if (check_alphabet($fname, 'First Name')) {
            if (check_alphabet($lname, 'Last Name')) {
                if (valid_username($username, 'Username')) {
                    if (valid_email ($email, 'Email Address')) {
                        if (validate_password($password, 'Password')) {
                            # code...
                        }
                    }
                }
            }
        }
    } catch (\Exception $error) {
        $_SESSION['error'] = $error->getMessage();
        header('location:../../view/main/register.php');
        return;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
} else {
    $_SESSION['error'] = "Unauthorized Action, Please refresh the page and register";
    header('location:../../view/main/register.php');
    return;
}
