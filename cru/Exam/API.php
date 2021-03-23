<?php

require("../Database/index.php");

$edit = isset($_GET["edit"]) ? $_GET["edit"] : '';

if ($edit == 1) {
} else {
    $type = $_POST["type"];
    $date_picker = $_POST["date_picker"];
    $format_date = explode("/", $date_picker);
    $year = explode(" ", $format_date[2]);
    $years = number_format($year[1] + 543);
    $format_year = explode(",", $years);
    $year_s = $format_year[0] . $format_year[1];
    $m = explode(" ", $format_date[1]);
    switch ($m[1]) {
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
    $date_picker = 'วันที่ ' . $format_date[0] . ' เดือน ' . $month . ' พ.ศ. ' . $year_s;
    $sername = $_POST["sername"];
    $name_lastname = $_POST["name_lastname"];
    $id_pass = $_POST["id_pass"];
    $comment = $_POST["comment"];
    $midterm = $_POST["midterm"];
    $year = $_POST["year"];
    $group = $_POST["group"];
    $number = $_POST["number"];
    $doc_type = $_POST["doc_type"];

    $sql = "INSERT INTO exam (type, 
                        date_picker, 
                        sername, 
                        namelastname, 
                        idpass, 
                        comment, 
                        midterm, 
                        year, 
                        team, 
                        number,
                        Doc_type,
                        Round_edit
                        )
VALUES ('" . $type . "', 
'" . $date_picker . "', 
'" . $sername . "', 
'" . $name_lastname . "', 
'" . $id_pass . "', 
'" . $comment . "', 
" . $midterm . ", 
" . $year . ", 
" . $group . ", 
'" . $number . "',
'" . $doc_type . "',
0
)";
    if ($conn->query($sql) === TRUE) {
        header('location: ../Exam/');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
