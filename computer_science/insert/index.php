<?php
require("../Database/index.php");

$sername = isset($_GET["sername"]) ? $_GET["sername"] : '';
$name = isset($_GET["fullname"]) ? $_GET["fullname"] : '';
$email = isset($_GET["email"]) ? $_GET["email"] : '';
$password = isset($_GET["password"]) ? $_GET["password"] : '';
$password = md5($password);
$id_student = isset($_GET["id_student"]) ? $_GET["id_student"] : '';
$TEL = isset($_GET["tel"]) ? $_GET["tel"] : '';
$Address = isset($_GET["address"]) ? $_GET["address"] : '';

$sql = "INSERT INTO login (sername, name, password, email, id_student, Type, TEL, Address) 
VALUES ('" . $sername . "', '" . $name . "', '" . $password . "', '" . $email . "', '" . $id_student . "', 'student', '" . $TEL . "', '" . $Address . "')";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->close();
header('location: ../');
