<?php
require("../Database/index.php");
$name = $_POST["name"];
$email = $_POST["account"];
$password = $_POST["password"];
$id_student = $_POST["id_student"];
$sql = "INSERT INTO login(name, password, email, id_student, Type) 
VALUES ('" . $name . "', '" . $password . "', '" . $email . "', '" . $id_student . "', 'student')";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->close();
echo '
<script>
    alert("สมัครสมาชิกเรียบร้อยแล้ว");
    window.location.href = "../";
</script>
';