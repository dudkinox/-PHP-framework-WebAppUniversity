<?php
session_start();
$id = $_SESSION["user"];
$password = $_SESSION["password"];
$conn = new mysqli("localhost", "id15931951_data", "O#BrvX-uI?iO<>i2", "id15931951_project");
$sql = "SELECT id, password FROM login WHERE id = '".$id."' AND password = '".$password."'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    include "home.php";
}else{
    echo '
        <script>
            alert("รหัสผิด");
            window.location.href = "../../../";
        </script>
    ';
}