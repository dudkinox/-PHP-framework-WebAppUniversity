<?php
session_start();

require('../Database/index.php');
$_SESSION["account_login"] = $_POST["username"];
$_SESSION["password_login"] = $_POST["password"];
$ID = mysqli_real_escape_string($conn, $_SESSION["account_login"]);
$Password = mysqli_real_escape_string($conn, $_SESSION["password_login"]);
$Password = md5($Password);
// $url = 'http://whitehurricane.000webhostapp.com/service.php';
// $json = file_get_contents($url);
// $json = json_decode($json);
// $number = count($json);

$sql_id = "SELECT * FROM Login 
        WHERE Username = '" . $ID . "'";
$result_id = $conn->query($sql_id);
$sql_pass = "SELECT * FROM Login 
        WHERE Password = '" . $Password . "' 
        AND Username = '" . $ID . "'";
$result_pass = $conn->query($sql_pass);
if ($result_id->num_rows > 0) {
    if ($result_pass->num_rows > 0) {
        $row = $result_pass->fetch_assoc();
        $_SESSION["type"] = $row["Level"];
        $_SESSION["pre"] = $row["pre"];
        $_SESSION["name"] = $row["Firstname"];
        $_SESSION["Lastname"] = $row["Lastname"];
        $_SESSION["no_std"] = $row["no_std"];
        header('location: ../app/');
    } else {
        $_SESSION["alert_password"] = 1;
        header('location: ../../paper/');
    }
} else {
    $_SESSION["alert_login"] = 1;
    header('location: ../../paper/');
}
// for ($i = 0; $i < $number; $i++) {
//     if ($ID == $json[$i]->Username) {
//         if ($Password == $json[$i]->Password) {
//             $_SESSION["type"] = $json[$i]->Level;
//             $_SESSION["pre"] = $json[$i]->pre;
//             $_SESSION["name"] = $json[$i]->Firstname;
//             $_SESSION["Lastname"] = $json[$i]->Lastname;
//             $_SESSION["no_std"] = $json[$i]->no_std;

//             header('location: ../app/');
//             exit;
//         } else {
//             $_SESSION["alert_password"] = 1;
//             header('location: ../../paper/');
//             exit;
//         }
//     }
// }
