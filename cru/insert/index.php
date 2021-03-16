<?php
require("../Database/index.php");
$name = isset($_GET["fullname"]) ? $_GET["fullname"] : '';
$email = isset($_GET["email"]) ? $_GET["email"] : '';
$password = isset($_GET["password"]) ? $_GET["password"] : '';
$id_student = isset($_GET["fullname"]) ? $_GET["fullname"] : '';
$TEL = isset($_GET["tel"]) ? $_GET["tel"] : '';
$Address = isset($_GET["address"]) ? $_GET["address"] : '';
$sql = "INSERT INTO login(name, password, email, id_student, Type, TEL, Address) 
VALUES ('" . $name . "', '" . $password . "', '" . $email . "', '" . $id_student . "', 'student', '" . $TEL . "', '" . $Address . "')";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->close();
echo '
<script>
    alert(' . $Address . ');
    window.location.href = "../";
</script>
';
