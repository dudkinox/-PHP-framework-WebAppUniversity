<?php
$conn = mysqli_connect("localhost", "id15931951_data", "O#BrvX-uI?iO<>i2", "id15931951_project");

$id_student = isset($_GET["id"]) ? $_GET["id"] : '';
$Project_Name = $_POST["Project_Name"];
$Teacher_name = isset($_GET["name"]) ? $_GET["name"] : '';

// Check connection
$sql = "INSERT INTO Topic (ID_student, Name_teacher, Research, Status) 
    VALUES ('" . $id_student . "', '" . $Teacher_name .  "', '" . $Project_Name . "', 'ยังไม่อนุมัติ')";

$allow = array('pdf');
$temp = explode(".", $_FILES['fileproject']['name']);
$extension = end($temp);
$upload_file = $_FILES['fileproject']['name'];
move_uploaded_file($_FILES['fileproject']['tmp_name'], "Pdf/" . $_FILES['fileproject']['name']);
$qry = mysqli_query($conn, "INSERT INTO Filetopic (ID_student ,File,Rounds)VALUES('" . $id_student . "' , '" . $upload_file . "', '1')");
if ($qry && $conn->query($sql) === TRUE) {
    header('Location: https://cru-com-sci.000webhostapp.com/app/?approve=1');
} else {
    echo "Error: " . $qry . "<br>" . $conn->error;
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// $allowedExts = array("pdf");
// $temp = explode(".", $_FILES["pdf_file"]["name"]);
// $extension = end($temp);
// $upload_pdf=$_FILES["pdf_file"]["name"];
// move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"uploads/pdf/" . $_FILES["pdf_file"]["name"]);
// $sql=mysqli_query($con,"INSERT INTO `Table Name`(`pdf_file`)VALUES($upload_pdf')");
// if($sql){
// 	echo "Data Submit Successful";
// }
// else{
// 	echo "Data Submit Error!!";
// }
