<?php
session_start();
require('../Database/index.php');
$ID = $_SESSION["account_login"];
$Password = $_SESSION["password_login"];
$sql = "SELECT email, password FROM login WHERE email = '" . $ID . "' AND password = '" . $Password . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    header('location: ../app/');
} else {
    echo '
    <script>
        alert("การเข้าระบบไม่ถูกต้อง");
        window.location.href = "../";
    </script>
    ';
}
