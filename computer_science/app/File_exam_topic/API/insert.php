<?php
session_start();
require("../../../Database/index.php");
$id_student = $_SESSION["no_std"];

$api = isset($_GET["api"]) ? $_GET["api"] : '';
$option = isset($_GET["option"]) ? $_GET["option"] : '';

if ($api == 2) {
    // ชื่ออาจารย์
    $show_teacher_name = $_POST["show_teacher_name"];
    $director_show_name = $_POST["director_show_name"];
    $president_show_name = $_POST["president_show_name"];
    // ไฟล์กับวันที่
    $date = $_POST["date"];
    if (isset($_POST['enter'])) {
        $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder = "../../fileexam/";
        /* new file size in KB */
        $new_size = $file_size / 1024;
        /* new file size in KB */

        /* make file name in lower case */
        $new_file_name = strtolower($file);
        /* make file name in lower case */

        $final_file = str_replace(' ', '-', $new_file_name);

        if (move_uploaded_file($file_loc, $folder . $final_file)) {
            $sql = "INSERT INTO exam(
            id_student,
            exam_topic,
            date,
            teacher_name,
            director_name,
            president_name,
            status) 
  VALUES('" . $id_student . "',
      '" . $final_file . "',
      '" . $date . "',
      '" . $show_teacher_name . "' ,
      '" . $director_show_name . "' ,
      '" . $president_show_name . "',
      'อนุมัติ'
      )";
            // update status
            $sql_status = "UPDATE status SET  Status='กำลังดำเนินการสอบความก้าวหน้าครั้งที่ 1',Level=3 WHERE id_student = '" . $id_student . "'";
            if ($conn->query($sql) === TRUE) {
                if ($conn->query($sql_status) === TRUE) {
                    $_SESSION["alert_upload_file2"] = 1;
                    header("location: ../../?page=exam_dashboard");
                }
            }
        } else {
            echo "Error.Please try again";
        }
    }
} else if ($api == 3) {
    // ชื่ออาจารย์
    $show_teacher_name = $_POST["show_teacher_name"];
    $director_show_name = $_POST["director_show_name"];
    $president_show_name = $_POST["president_show_name"];
    // ไฟล์กับวันที่
    $date = $_POST["date"];
    if (isset($_POST['enter'])) {
        $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder = "../../fileexam/";
        /* new file size in KB */
        $new_size = $file_size / 1024;
        /* new file size in KB */

        /* make file name in lower case */
        $new_file_name = strtolower($file);
        /* make file name in lower case */

        $final_file = str_replace(' ', '-', $new_file_name);

        if (move_uploaded_file($file_loc, $folder . $final_file)) {
            $sql = "INSERT INTO exam_progress(
            id_student,
            progress_exam,
            date,
            teacher_name,
            director_name,
            president_name,
            status) 
  VALUES('" . $id_student . "',
      '" . $final_file . "',
      '" . $date . "',
      '" . $show_teacher_name . "' ,
      '" . $director_show_name . "' ,
      '" . $president_show_name . "',
      'ยังไม่อนุมัติ'
      )";

            // update status
            $sql_status = "UPDATE status SET Status='รออนุมัติ' WHERE id_student = '" . $id_student . "'";

            if ($conn->query($sql) === TRUE) {
                if ($conn->query($sql_status) === TRUE) {
                    $_SESSION["alert_upload_file3"] = 1;
                    header("location: ../../?page=exam_progress1");
                }
            }
        } else {
            echo "Error.Please try again";
        }
    }
} else if ($api == 4) {
    // ชื่ออาจารย์
    $show_teacher_name = $_POST["show_teacher_name"];
    $director_show_name = $_POST["director_show_name"];
    $president_show_name = $_POST["president_show_name"];
    // ไฟล์กับวันที่
    $date = $_POST["date"];
    if (isset($_POST['enter'])) {
        $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder = "../../fileexam/";
        /* new file size in KB */
        $new_size = $file_size / 1024;
        /* new file size in KB */

        /* make file name in lower case */
        $new_file_name = strtolower($file);
        /* make file name in lower case */

        $final_file = str_replace(' ', '-', $new_file_name);

        if (move_uploaded_file($file_loc, $folder . $final_file)) {
            $sql = "INSERT INTO exam_progress2(
               id_student,
               progress_exam,
               date,
               teacher_name,
               director_name,
               president_name,
               status) 
     VALUES('" . $id_student . "',
         '" . $final_file . "',
         '" . $date . "',
         '" . $show_teacher_name . "' ,
         '" . $director_show_name . "' ,
         '" . $president_show_name . "',
         'ยังไม่อนุมัติ'
         )";

            // update status
            $sql_status = "UPDATE status SET  Status='รออนุมัติสอบความก้าวหน้าครั้งที่ 2' WHERE id_student = '" . $id_student . "'";

            if ($conn->query($sql) === TRUE) {
                if ($conn->query($sql_status) === TRUE) {
                    $_SESSION["alert_upload_file4"] = 1;
                    header("location: ../../?page=exam_dashboard2");
                }
            }
        } else {
            echo "Error.Please try again";
        }
    }
} else if ($api == 5) {
    // ชื่ออาจารย์
    $show_teacher_name = $_POST["show_teacher_name"];
    // ไฟล์กับวันที่
    if (isset($_POST['enter'])) {
        // final
        $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder = "../../fileexam/";
        $new_size = $file_size / 1024;
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);

        // poster
        $file_poster = rand(1000, 100000) . "-" . $_FILES['file_poster']['name'];
        $file_loc_poster  = $_FILES['file_poster']['tmp_name'];
        $file_size_poster  = $_FILES['file_poster']['size'];
        $file_type_poster  = $_FILES['file_poster']['type'];
        $folder_poster  = "../../fileexam/";
        $new_size_poster  = $file_size_poster  / 1024;
        $new_file_name_poster  = strtolower($file_poster);
        $final_file_poster  = str_replace(' ', '-', $new_file_name_poster);

        if (move_uploaded_file($file_loc, $folder . $final_file)) {
            if (move_uploaded_file($file_loc_poster, $folder_poster . $final_file_poster)) {
                $sql = "INSERT INTO end_final(
                id_student,
                final,
                poster_final,
                teacher
                ) 
      VALUES('" . $id_student . "',
          '" . $final_file . "',
          '" . $final_file_poster . "' ,
          '" . $show_teacher_name . "' 
          )";

                // update status
                $sql_status = "UPDATE status SET Status='เล่มวิจัยเเละโปรเจคเสร็จสิ้น', Level = 6 WHERE id_student = '" . $id_student . "'";

                if ($conn->query($sql) === TRUE) {
                    if ($conn->query($sql_status) === TRUE) {
                        $_SESSION["alert_upload_file4"] = 1;
                        header("location: ../../?page=end_university");
                    }
                }
            }
        } else {
            echo "Error.Please try again";
        }
    }
} else if ($api == "edit" && $option != "end_project") {
    // ชื่ออาจารย์
    $show_teacher_name = $_POST["show_teacher_name"];
    $director_show_name = $_POST["director_show_name"];
    $president_show_name = $_POST["president_show_name"];
    // ไฟล์กับวันที่
    $date = $_POST["date"];
    if (isset($_POST['enter'])) {
        $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder = "../../fileexam/";
        /* new file size in KB */
        $new_size = $file_size / 1024;
        /* new file size in KB */

        /* make file name in lower case */
        $new_file_name = strtolower($file);
        /* make file name in lower case */

        $final_file = str_replace(' ', '-', $new_file_name);

        if (move_uploaded_file($file_loc, $folder . $final_file)) {
            $sql = "UPDATE exam_progress2 
                    SET date='" . $date . "',
                        progress_exam='" . $final_file . "',
                        status='ยังไม่อนุมัติ'
                    WHERE id_student='" . $id_student . "'";

            // update status
            $sql_status = "UPDATE status SET Status='รออนุมัติสอบความก้าวหน้าครั้งที่ 2' WHERE id_student = '" . $id_student . "'";

            // เปลี่ยนสถานะ
            $sql_exam_progress2_status = "UPDATE status SET Status='ยังไม่อนุมัติ' WHERE id_student = '" . $id_student . "'";

            if ($conn->query($sql) === TRUE) {
                if ($conn->query($sql_status) === TRUE) {
                    $_SESSION["alert_upload_file4"] = 1;
                    header("location: ../../?page=exam_dashboard2");
                }
            } else {
                echo "Error.Please try again";
            }
        }
    }
} else if ($api == "edit" && $option == "end_project") {
    // ชื่ออาจารย์
    $show_teacher_name = $_POST["show_teacher_name"];
    // ไฟล์กับวันที่
    if (isset($_POST['enter'])) {
        // final
        $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder = "../../fileexam/";
        $new_size = $file_size / 1024;
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);

        // poster
        $file_poster = rand(1000, 100000) . "-" . $_FILES['file_poster']['name'];
        $file_loc_poster  = $_FILES['file_poster']['tmp_name'];
        $file_size_poster  = $_FILES['file_poster']['size'];
        $file_type_poster  = $_FILES['file_poster']['type'];
        $folder_poster  = "../../fileexam/";
        $new_size_poster  = $file_size_poster  / 1024;
        $new_file_name_poster  = strtolower($file_poster);
        $final_file_poster  = str_replace(' ', '-', $new_file_name_poster);

        if (move_uploaded_file($file_loc, $folder . $final_file)) {
            if (move_uploaded_file($file_loc_poster, $folder_poster . $final_file_poster)) {
                $sql = "UPDATE end_final 
                    SET final='" . $final_file . "',
                        poster_final='" . $final_file_poster . "'
                    WHERE id_student = '" . $id_student . "'";

                if ($conn->query($sql) === TRUE) {
                    $_SESSION["alert_upload_file4"] = 1;
                    header("location: ../../?page=end_university");
                }
            }
        } else {
            echo "Error.Please try again";
        }
    }
}
