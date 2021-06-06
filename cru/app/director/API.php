<?php
session_start();
$i = 0;
$data = [];
foreach ($_POST["select_teacher"] as $option) {
    $data[$i] = $option;
    $i++;
}
if ($i > 3 || $i < 3) {
    echo $i . "มากกว่าหรือน้อยกว่า 3";
} else {
    require("../../Database/index.php");
    $sql_id_student = "SELECT id_student FROM login WHERE email = '" . $_SESSION["account_login"] . "'";
    $result_id_student = $conn->query($sql_id_student);
    $row = $result_id_student->fetch_assoc();
    $sql_insert = "INSERT INTO director (id_student, Director_1, Director_2, Director_3)
VALUES ('" . $row["id_student"] . "', '" . $data[0] . "', '" . $data[1] . "', '" . $data[2] . "')";
    if ($conn->query($sql_insert) === TRUE) {
        header("location: ../");
    } else {
        echo '<script>alert("ดูเหมือนจะเคยเพิ่มไปแล้ว!!");window.location.href = "../";</script>';
    }
    $conn->close();
}
