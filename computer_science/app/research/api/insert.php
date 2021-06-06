<?php
session_start();
require("../../../Database/index.php");

// ข้อมูลนักเรียน
$name_teacher = $_SESSION["name_teacher"];
$id_student = $_SESSION["no_std"];
$name_lastname = $_SESSION["name"] . ' ' . $_SESSION["Lastname"];
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

$date = date('d/m/Y');
$format_date = explode("/", $date);
$year = explode(" ", $format_date[2]);
$years = number_format($format_date[2] + 543);
$format_year = explode(",", $years);
$year_s = $format_year[0] . $format_year[1];
$m = explode(" ", $format_date[1]);
switch ($format_date[1]) {

    case '01':
        $month = "มกราคม";
        break;
    case '02':
        $month = "กุมภาพันธ์";
        break;
    case '03':
        $month = "มีนาคม";
        break;
    case '04':
        $month = "เมษายน";
        break;
    case '05':
        $month = "พฤษภาคม";
        break;
    case '06':
        $month = "มิถุนายน";
        break;
    case '07':
        $month = "กรกฎาคม";
        break;
    case '08':
        $month = "สิงหาคม";
        break;
    case '09':
        $month = "กันยายน";
        break;
    case '10':
        $month = "ตุลาคม";
        break;
    case '11':
        $month = "พฤศจิกายน";
        break;
    case '12':
        $month = "ธันวาคม";
        break;
}
$date = 'วันที่ ' . $format_date[0] . ' เดือน ' . $month . ' พ.ศ. ' . $year_s;

$edit = isset($_GET["edit"]) ? $_GET["edit"] : '';
$teacher = $_SESSION["name_teacher"];

if ($edit == 1) {
    $sql_edit_topic = "UPDATE Topic 
    SET date='" . $date . "',
    Name_teacher='" . $teacher . "',
    NameProjectTH='" . $NameProjectTH . "',
    NameProjectEng='" . $NameProjectEng . "',
    importance='" . $importance . "',
    objective='" .  $objective . "',
    Principle='" . $Principle . "',
    plan_work='" . $plan_work . "',
    limit_work='" . $limit_work . "',
    benefit='" . $benefit . "',
    vocabulary='" . $vocabulary . "'
    WHERE id_student = '" . $id_student . "'";

    // ระยะเวลากิจกรรมแก้ไข
    $activity = $_POST["activity"];
    $date = $_POST["date"];
    $sql_edit_date_event = "UPDATE date_event 
    SET Date='" . $date . "',
    Ativity='" . $activity . "'
    WHERE id_student = '" . $id_student . "'";

    // รอบสถานะ
    $sql_round = "SELECT Round_Edit FROM Topic_status WHERE id_student = '" . $id_student . "'";
    $result_round = $conn->query($sql_round);
    $row_round = $result_round->fetch_assoc();
    $round_edit = $row_round["Round_Edit"] + 1;

    // สถานะ
    $sql_edit_status = "UPDATE Topic_status
     SET Name_teacher='" . $teacher . "',
     Status ='ยังไม่อนุมัติ',
     Round_Edit = $round_edit
     WHERE id_student = '" . $id_student . "'";

    if ($conn->query($sql_edit_topic) === TRUE) {
        if ($conn->query($sql_edit_date_event) === TRUE) {
            if ($conn->query($sql_edit_status) === TRUE) {
                $_SESSION["edit_topic"] = 1;
                header('location: ../../');
            } else {
                echo "Error: " . $sql_edit_status . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql_edit_date_event . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql_edit_topic . "<br>" . $conn->error;
    }
} else {
    $sql_Topic = "INSERT INTO Topic (date,
                            id_student,
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
VALUES('" . $date . "',
       '" . $id_student . "',
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
    $sql_date_event_odd = "INSERT INTO date_event (id_student,
                                                Date,
                                                Ativity)
                            VALUES ('" . $id_student . "',
                            '" . $date . "',
                            '" . $activity . "'
                            )";

    // สถานะ
    $sql_status = "INSERT INTO Topic_status (id_student,
                                        Name_teacher,
                                        Status,
                                        Round_Edit)
                                        VALUES ('" . $id_student . "',
                                        '" . $name_teacher . "',
                                        'ยังไม่อนุมัติ',
                                        0
                                        )";

    // ความคืบหน้า
    $sql_update_status = "INSERT INTO status (id_student,
                                        Status,
                                        Level)
                                        VALUES ('" . $id_student . "',
                                        'รอที่ปรึกษาอนุมัติ',
                                        1
                                        )";

    if ($conn->query($sql_Topic) === TRUE) {

        if ($conn->query($sql_date_event_odd) === TRUE) {

            if ($conn->query($sql_status) === TRUE) {

                // กรณีที่มีหลาย ตาราง
                if ($conn->query($sql_update_status) === TRUE) {
                    $count = 2;
                    while (isset($_POST["activity" . $count])) {

                        $activity_event = $_POST["activity" . $count];
                        $date_event = $_POST["date" . $count];
                        $sql_date_event_event = "INSERT INTO date_event (id_student,
                                                Date,
                                                Ativity)
                            VALUES ('" . $id_student . "',
                            '" . $date_event . "',
                            '" . $activity_event . "'
                            )";
                        if ($conn->query($sql_date_event_event) === TRUE) {
                            $count++;
                            echo '<script>window.location.href = "../../";</script>';
                        } else {
                            echo 'มันไม่เข้าอ่ะ';
                            exit;
                        }
                    }
                    header('location: ../../');
                }
            }
        } else {
            echo "Error: " . $sql_date_event_odd . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql_Topic . "<br>" . $conn->error;
    }
}
$conn->close();
