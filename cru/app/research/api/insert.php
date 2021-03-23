<?php
session_start();
require("../../../Database/index.php");

// ข้อมูลนักเรียน
$name_student = $_SESSION["account_login"];
$sql_data_student = "SELECT * FROM login WHERE email = '" . $name_student . "'";
$result_data_student = $conn->query($sql_data_student);
$row_data_student = $result_data_student->fetch_assoc();
$name_teacher = $_SESSION["name_teacher"];
$id_student = $row_data_student["id_student"];
$name_lastname = $row_data_student["name"];
// ข้อมูล
$NameProjectTH = $_POST["NameProjectTH"];
$NameProjectEng = $_POST["NameProjectEng"];
$importance = $_POST["importance"];
$objective = $_POST["objective"];
$Principle = $_POST["Principle"];
$plan_work = $_POST["plan_work"];
$limit_work = $_POST["limit_work"];
$benefit = $_POST["benefit"];
$vocabulary = $_POST["vocabulary"];

$sql_Topic = "INSERT INTO Topic (id_student,
                            Name_teacher,
                            NameProjectTH,
                            NameProjectEng,
                            importance,
                            objective,
                            Principle,
                            plan_work,
                            limit_work,
                            benefit,
                            vocabulary)
VALUES('" . $id_student . "',
       '" . $name_teacher . "', 
       '" . $NameProjectTH . "', 
       '" . $NameProjectEng . "', 
       '" . $importance . "', 
       '" . $objective . "', 
       '" . $Principle . "', 
       '" . $plan_work . "',
       '" . $limit_work . "',
       '" . $benefit . "',
       '" . $vocabulary . "'
        )";

// ระยะเวลากิจกรรม
$activity = $_POST["activity"];
$date = $_POST["date"];
$sql_date_event = "INSERT INTO date_event (id_student,
                                        Date,
                                        Ativity)
                    VALUES ('" . $id_student . "',
                    '" . $date . "',
                    '" . $activity . "'
                    )";

// สถานะ
$sql_status = "INSERT INTO Topic_status (id_student,
                                        Name_teacher,
                                        Status)
                                        VALUES ('" . $id_student . "',
                                        '" . $name_teacher . "',
                                        'ยังไม่อนุมัติ'
                                        )";
if ($conn->query($sql_Topic) === TRUE) {
    if ($conn->query($sql_date_event) === TRUE) {
        if ($conn->query($sql_status) === TRUE) {
            header('location: ../../?approve=1');
        }
    } else {
        echo "Error: " . $sql_date_event . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql_Topic . "<br>" . $conn->error;
}

$conn->close();
