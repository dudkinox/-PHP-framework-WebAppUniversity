<?php
require('../../Database/index.php');

// insert && edit
$insert = isset($_GET["insert"]) ? $_GET["insert"] : '';
if ($insert == 1) {
    $name = $_POST["name"];
    $password = md5($_POST["password"]);
    $email = $_POST["email"];
    $id_student = $_POST["id_student"];
    $type = $_POST["type"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];

    // edit
    if ($_POST["edit_hidden"] != '') {
        $sql_edit = "UPDATE login SET 
            name = '" . $name . "', 
            password = '" . $password . "',
            email = '" . $email . "',
            id_student = '" . $id_student . "',
            Type = '" . $type . "',
            TEL = '" . $tel . "',
            Address = '" . $address . "'
            WHERE login.email = '" . $email . "'";
        if ($conn->query($sql_edit) == TRUE) {
            echo '
                <script>
                    alert("แก้ไขเรียบร้อยแล้ว!!");
                    window.location.href = "../";
                </script>
                ';
        }
    } else {
        // insert
        $sql_insert = "INSERT INTO login (name, password, email, id_student, Type, TEL, Address)
VALUES ('$name', '$password', '$email', '$id_student', '$type', '$tel', '$address')";

        if ($conn->query($sql_insert) === TRUE) {

            header("location: ../ ");
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
// delete
$delete = isset($_GET["delete"]) ? $_GET["delete"] : '';
$key = isset($_GET["key"]) ? $_GET["key"] : '';
$check = isset($_GET["check"]) ? $_GET["check"] : '';
if ($delete == 1) {
    if ($key != '') {
        if ($check == '') {
            echo '
              <script>
                  var check = confirm("ยืนยันการลบ ID : ' . $key . '");
                  if(check == true){
                      window.location.href += "&check=1";
                    }else{
                      window.location.href += "&check=0";
                      }
              </script>
              ';
        }
        if ($check == '1') {
            $sql_delete = "DELETE FROM login WHERE id_student = '" . $key . "'";
            if ($conn->query($sql_delete) == TRUE) {
                header('location: ../');
            } else {
                echo '
            <script>
              alert("ลบข้อมูลไม่สำเร็จ!!");
              window.location.href = "../";
            </script>
            ';
            }
        } else {
            echo '<script>window.location.href = "../";</script>';
        }
    }
}
// excel impot
$excel = isset($_GET["excel"]) ? $_GET["excel"] : '';
if ($excel == 1) {
    $type = $_POST["type"];
    require_once '../../lib/PHPExcel-1.8/Classes/PHPExcel.php';
    $filename = $_FILES['file_excel']['name'];
    $excel = $_FILES['file_excel']['tmp_name'];
    $folder = '../../file/';
    move_uploaded_file($excel, $folder . $filename);
    $data = PHPExcel_IOFactory::load($folder . $filename);
    $data->setActiveSheetIndex(0);
    $i = 2;
    $INSERT = "";
    while ($data->getActiveSheet()->getCell('A' . $i)->getValue() != "") {
        $name = $data->getActiveSheet()->getCell('A' . $i)->getValue();
        $password = md5($data->getActiveSheet()->getCell('B' . $i)->getValue());
        $email = $data->getActiveSheet()->getCell('C' . $i)->getValue();
        $id_student = $data->getActiveSheet()->getCell('D' . $i)->getValue();
        $TEL = $data->getActiveSheet()->getCell('E' . $i)->getValue();
        $Address = $data->getActiveSheet()->getCell('F' . $i)->getValue();
        $INSERT = "INSERT Into login (name, password, email, id_student, Type, TEL, Address) 
          values(
              '" . $name . "'
            , '" . $password . "'
            , '" . $email . "'
            , '" . $id_student . "'
            , '" . $type . "'
            , '" . $TEL . "'
            , '" . $Address . "'
          )";
        $stmt = $conn->prepare($INSERT);
        $stmt->execute();
        $i++;
    }
    $stmt->close();
    $conn->close();
    echo '
      <script>
      alert("เพิ่มรายการแล้ว");
        window.location.href = "../";
      </script>
      ';
}
