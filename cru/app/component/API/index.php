<?php
session_start();
require('../../../Database/index.php');
if (!$conn) {
    echo "มีปัญหาบางอย่างขัดข้องในการเชื่อมต่อ โปรดติดต่อกีตาร์";
} else {
    // echo "ติดต่อฐานข้อมูลเรียบร้อยแล้ว"
    $ID = $_SESSION["account_login"];
    $Password = $_SESSION["password_login"];
    $id_student = $_POST["id_student"];
    $name_student = $_POST["name_student"];
    $email_student = $_POST["email_student"];
    $address_student = $_POST["address_student"];
    $tel_student = $_POST["tel_student"];

    if ($ID != '') {
        $sql = "UPDATE login SET name='" . $name_student . "'
    ,email='" . $email_student . "'
    ,id_student='" . $id_student . "'
    ,TEL='" . $tel_student . "'
    ,Address='" . $address_student . "'
  WHERE password = '" . $Password . "'";

        if ($conn->query($sql) == TRUE) {
            echo "<script lang = 'javascript'>alert('แก้ไขข้อมูลเรียบร้อย'); window.location.href = '../../?profile=1'; </script>";
        } else {
            echo 'มีปัญหาวว่ะ';
        }
    } else {
        echo '
        เชื่อมไม่ติด' . $ID . '
      ';
    }
}
