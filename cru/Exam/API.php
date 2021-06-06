<?php
session_start();
require("../Database/index.php");

$edit = isset($_GET["edit"]) ? $_GET["edit"] : '';
$delete = isset($_GET["delete"]) ? $_GET["delete"] : '';
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$check = isset($_GET["check"]) ? $_GET["check"] : '';
$project = isset($_GET["project"]) ? $_GET["project"] : '';

// get is_student
$sql_id_student = "SELECT id_student FROM login WHERE email = '" . $_SESSION["account_login"] . "'";
$result_id_student = $conn->query($sql_id_student);
$row_id_student = $result_id_student->fetch_assoc();
$id_pass = $row_id_student["id_student"];

if ($project == 1) {
    $allowedExts = array("doc", "docx", "pdf");
    $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if ((($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"))
        && in_array($extension, $allowedExts)
    ) {
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
        } else {
            echo "Upload: " . $_FILES["file"]["name"] . "<br />";
            echo "Type: " . $_FILES["file"]["type"] . "<br />";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
            echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

            if (file_exists("File/" . $_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . " already exists. ";
            } else {
                move_uploaded_file(
                    $_FILES["file"]["tmp_name"],
                    "File/" . $_FILES["file"]["name"]
                );
                $sql = "INSERT INTO Filetopic (ID_student, File, Rounds) 
               VALUES ('" . $id_pass . "',
                    'File/" . $_FILES["file"]["name"] . "',
                    0
                    )";
                if ($conn->query($sql) === TRUE) {
                    echo '
                <script>
                    alert("เพิ่มเอกสารทุกบทเรียบร้อยแล้ว!");
                    window.location.href = "../Exam";
                </script>
                ';
                } else {
                    echo '
                <script>
                    alert("เว็บไซต์มีปัญหา! โปรเเจ้งรายงานปัญหามาที่เพจ");
                    window.location.href = "../Exam";
                </script>
                ';
                }
            }
        }
    } else {
        echo "Invalid file";
    }
} else if ($delete == 1) {
    if ($check == '') {
        echo '
            <script>
                var check = confirm("ยืนยันการลบการแก้ไขรอบที่ : ' . $edit . '");
                if(check == true){
                    window.location.href += "&check=1";
                  }else{
                    window.location.href += "&check=0";
                    }
            </script>
            ';
    } else if ($check == '1') {
        $sql_delete = "DELETE FROM exam_log 
        WHERE idpass = '" . $id . "'
        AND Round_edit = '" . $edit . "'";
        if ($conn->query($sql_delete) === TRUE) {
            echo '
            <script>
                alert("ลบเรียบร้อยแล้ว!");
                window.location.href = "../Exam/";
            </script>
                ';
        } else {
            echo '
            <script>
                alert("เว็บไซต์มีปัญหา! โปรเเจ้งรายงานปัญหามาที่เพจ");
                window.location.href = "../Exam/";
            </script>
        ';
        }
    } else {
        header('location: ../Exam/');
    }
} else if ($edit == 1) {
    if (isset($_POST["doc_type"])) {

        // get number = edit
        $sql_round_exam = "SELECT * FROM exam WHERE idpass='" . $id_pass . "'";
        $result_round_exam = $conn->query($sql_round_exam);
        $row_round_exam = $result_round_exam->fetch_assoc();
        $round_edit = number_format($row_round_exam["Round_edit"]) + 1;

        $sType = $row_round_exam["type"];
        $sDate_picker = $row_round_exam["date_picker"];
        $sSername = $row_round_exam["sername"];
        $sNamelastname = $row_round_exam["namelastname"];
        $sIdpass = $row_round_exam["idpass"];
        $sComment = $row_round_exam["comment"];
        $sMidterm = $row_round_exam["midterm"];
        $sYear = $row_round_exam["year"];
        $sTeam = $row_round_exam["team"];
        $sNumber = $row_round_exam["number"];
        $sDoc_type = $row_round_exam["Doc_type"];
        $sRound_edit = $row_round_exam["Round_edit"];
        $sStatus = $row_round_exam["status"];

        $type = $_POST["type"];
        $date_picker = $_POST["date_picker"];
        $sername = $_POST["sername"];
        $name_lastname = $_POST["name_lastname"];
        $id_pass = $_POST["id_pass"];
        $comment = $_POST["comment"];
        $midterm = $_POST["midterm"];
        $year = $_POST["year"];
        $group = $_POST["group"];
        $number = $_POST["number"];
        $doc_type = $_POST["doc_type"];

        // edit
        $update = "UPDATE exam SET type='" . $type . "',
                                    date_picker = '" . $date_picker . "',
                                    comment = '" . $comment . "',
                                    midterm = " . $midterm . ",
                                    year = " . $year . ",
                                    team = " . $group . ",
                                    number = '" . $number . "',
                                    Round_edit = " . $round_edit . "
                               WHERE idpass='" . $id_pass . "'";

        $date_edit = date("d-m-Y");
        // keep log edit
        $sql_keep = "INSERT INTO exam_log (date_edit,
                        type, 
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
                        Round_edit,
                        status
                        )
                    VALUES ('" . $date_edit . "',
                    '" . $sType . "',
                    '" . $sDate_picker . "',
                    '" . $sSername . "',
                    '" . $sNamelastname . "',
                    '" . $sIdpass . "',
                    '" . $sComment . "',
                    " . $sMidterm . ",
                    " . $sYear . ",
                    " . $sTeam . ",
                    '" . $sNumber . "',
                    '" . $sDoc_type . "',
                    " . $sRound_edit . ",
                    '" . $sStatus . "'
                    )";
        if ($conn->query($sql_keep) === TRUE) {
            if ($conn->query($update) === TRUE) {
                echo '
                <script>
                    alert("แก้ไขเอกสารเรียบร้อย!");
                    window.location.href = "../Exam/";
                </script>
                ';
            } else {
                echo '
                <script>
                    alert("เว็บไซต์มีปัญหา! โปรเเจ้งรายงานปัญหามาที่เพจ update");
                    window.location.href = "../Exam/";
                </script>
                ';
            }
        } else {
            echo '
                <script>
                    alert("เว็บไซต์มีปัญหา! โปรเเจ้งรายงานปัญหามาที่เพจ");
                    window.location.href = "../Exam/";
                </script>
                ';
        }
    }
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
                        Round_edit,
                        status
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
0,
2
)";
    if ($conn->query($sql) === TRUE) {
        header('location: ../Exam/');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
