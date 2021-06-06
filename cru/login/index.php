<?php
session_start();

require('../Database/index.php');
$_SESSION["account_login"] = $_POST["username"];
$_SESSION["password_login"] = $_POST["password"];
$ID = mysqli_real_escape_string($conn, $_SESSION["account_login"]);
$Password = mysqli_real_escape_string($conn, $_SESSION["password_login"]);
$Password = md5($Password);
$url = 'http://whitehurricane.000webhostapp.com/service.php';
$json = file_get_contents($url);
$json = json_decode($json);
$number = count($json);

for ($i = 0; $i < $number; $i++) {
    if ($ID == $json[$i]->Username) {
        if ($Password == $json[$i]->Password) {
            $_SESSION["type"] = $json[$i]->Level;
            $_SESSION["name"] = $json[$i]->Firstname;
            $_SESSION["Lastname"] = $json[$i]->Lastname;
            $_SESSION["no_std"] = $json[$i]->no_std;

            header('location: ../app/');
            exit;
        } else {
            $_SESSION["alert_password"] = 1;
            header('location: ../../paper/');
            exit;
        }
    }
}
$_SESSION["alert_login"] = 1;
header('location: ../../paper/');
exit;
