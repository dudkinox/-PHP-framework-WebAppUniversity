<?php
session_start();
require('../../../Database/index.php');
if (!$conn) {
    echo "มีปัญหาบางอย่างขัดข้องในการเชื่อมต่อ โปรดติดต่อกีตาร์";
} else {
    $comment = isset($_GET["comment"]) ? $_GET["comment"] : '';
    $approve = isset($_GET["approve"]) ? $_GET["approve"] : '';
    $id_student = isset($_GET["id_student"]) ? $_GET["id_student"] : '';
    if ($comment == 1) {
        // Name teacher 
        $Name_teacher = $_SESSION["name"] . " " . $_SESSION["Lastname"];
        $showid = $_SESSION["no_std"];
        $id_student = $_POST["id_student"];
        $topic = $_POST["topic"];
        $compose_textarea = $_POST["compose_textarea"];

        $sql = "INSERT INTO comment (ID_student, Comment, Teacher_Name, Topic, level)
        VALUES ('" . $id_student . "', '" . $compose_textarea . "', '" . $Name_teacher . "', '" . $topic . "', 1)";

        $sql_edit_status = "UPDATE Topic_status 
                SET Status='รอแก้ไข' 
                            WHERE id_student = '" . $id_student . "'";

        if ($conn->query($sql) === TRUE) {
            if ($conn->query($sql_edit_status) === TRUE) {
                $_SESSION["comment"] = 1;
                header('location: ../../../app');
            } else {
                echo "มีบางอย่างผิดพลาด !" . $sql_edit_status . "<br>" . $conn->error;
            }
        } else {
            echo "มีบางอย่างผิดพลาด !" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    } else if ($comment == 3) {
        // Name teacher 
        $Name_teacher = $_SESSION["name"] . " " . $_SESSION["Lastname"];
        $showid = $_SESSION["no_std"];
        $id_student = $_POST["id_student"];
        $topic = $_POST["topic"];
        $compose_textarea = $_POST["compose_textarea"];

        $sql = "INSERT INTO comment (ID_student, Comment, Teacher_Name, Topic, level)
             VALUES ('" . $id_student . "', '" . $compose_textarea . "', '" . $Name_teacher . "', '" . $topic . "', 3)";

        $sql_edit_status = "UPDATE exam_progress
                     SET status='ยื่นสอบก้าวหน้าครั้งที่ 2' 
                                 WHERE id_student = '" . $id_student . "'";

        $update_Status = "UPDATE status
                    SET Status='กำลังดำเนินการสอบก้าวหน้าครั้งที่ 2',
                        Level = 4
                    WHERE id_student = '" . $id_student . "'";

        if ($conn->query($sql) === TRUE) {
            if ($conn->query($sql_edit_status) === TRUE) {
                if ($conn->query($update_Status) === TRUE) {
                    $_SESSION["comment"] = 1;
                    header('location: ../../../app?page=3');
                } else {
                    echo "มีบางอย่างผิดพลาด !" . $update_Status . "<br>" . $conn->error;
                }
            } else {
                echo "มีบางอย่างผิดพลาด !" . $sql_edit_status . "<br>" . $conn->error;
            }
        } else {
            echo "มีบางอย่างผิดพลาด !" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    } else if ($comment == 4) {
        // Name teacher 
        $Name_teacher = $_SESSION["name"] . " " . $_SESSION["Lastname"];
        $showid = $_SESSION["no_std"];
        $id_student = $_POST["id_student"];
        $topic = $_POST["topic"];
        $compose_textarea = $_POST["compose_textarea"];

        $sql = "INSERT INTO comment (ID_student, Comment, Teacher_Name, Topic, level)
             VALUES ('" . $id_student . "', '" . $compose_textarea . "', '" . $Name_teacher . "', '" . $topic . "', 4)";

        $sql_edit_status = "UPDATE exam_progress2
                     SET status='รอแก้ไข' 
                     WHERE id_student = '" . $id_student . "'";
        if ($conn->query($sql) === TRUE) {
            if ($conn->query($sql_edit_status) === TRUE) {
                $_SESSION["comment"] = 1;
                header('location: ../../../app?page=4');
            } else {
                echo "มีบางอย่างผิดพลาด !" . $sql_edit_status . "<br>" . $conn->error;
            }
        } else {
            echo "มีบางอย่างผิดพลาด !" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    } else if ($approve == 1 && $id_student != '') {
        $sql_status = "UPDATE status SET Status='กำลังดำเนินการสอบเสนอหัวข้อ', Level = 2 WHERE id_student='" . $id_student . "'";
        $sql_status_appreove = "UPDATE Topic_status SET Status='อนุมัติแล้ว' WHERE id_student='" . $id_student . "'";
        if ($conn->query($sql_status) === TRUE) {
            if ($conn->query($sql_status_appreove) === TRUE) {
                $_SESSION["approve"] = 1;
                header('location: ../../../app');
            } else {
                echo "มีบางอย่างผิดพลาด !" . $sql_status_appreove . "<br>" . $conn->error;
            }
        } else {
            echo "มีบางอย่างผิดพลาด !" . $sql_status . "<br>" . $conn->error;
        }
    } else if ($approve == 3 && $id_student != '') {
        $sql_status = "UPDATE status SET Status='กำลังดำเนินการส่งเล่มวิจัย', Level = 5 WHERE id_student='" . $id_student . "'";
        $sql_status_appreove = "UPDATE exam_progress SET Status='อนุมัติแล้ว' WHERE id_student='" . $id_student . "'";
        if ($conn->query($sql_status) === TRUE) {
            if ($conn->query($sql_status_appreove) === TRUE) {
                $_SESSION["approve"] = 1;
                header('location: ../../../app?page=3');
            } else {
                echo "มีบางอย่างผิดพลาด !" . $sql_status_appreove . "<br>" . $conn->error;
            }
        } else {
            echo "มีบางอย่างผิดพลาด !" . $sql_status . "<br>" . $conn->error;
        }
    } else if ($approve == 4 && $id_student != '') {
        $sql_status = "UPDATE status SET Status='กำลังดำเนินการส่งเล่มวิจัย', Level = 5 WHERE id_student='" . $id_student . "'";
        $sql_status_appreove = "UPDATE exam_progress2 SET Status='อนุมัติแล้ว' WHERE id_student='" . $id_student . "'";
        if ($conn->query($sql_status) === TRUE) {
            if ($conn->query($sql_status_appreove) === TRUE) {
                $_SESSION["approve"] = 1;
                header('location: ../../../app?page=4');
            } else {
                echo "มีบางอย่างผิดพลาด !" . $sql_status_appreove . "<br>" . $conn->error;
            }
        } else {
            echo "มีบางอย่างผิดพลาด !" . $sql_status . "<br>" . $conn->error;
        }
    } else {
        // "ติดต่อฐานข้อมูลเรียบร้อยแล้ว"
        $ID = $_SESSION["account_login"];
        $Password = md5($_SESSION["password_login"]);
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
                echo "< lang = 'javascript'>alert('แก้ไขข้อมูลเรียบร้อย'); window.location.href = '../../?profile=1'; </>";
            } else {
                echo 'มีปัญหาวว่ะ';
            }
        } else {
            echo '
        เชื่อมไม่ติด' . $ID . '
      ';
        }
    }
}
