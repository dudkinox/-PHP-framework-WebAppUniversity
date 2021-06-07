<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require("../../../Database/index.php");

$ID = isset($_GET["id"]) ? $_GET["id"] : '';

$sql = "SELECT * FROM date_event WHERE id_student = '" . $ID . "'";
$result = $conn->query($sql);
$numrow = mysqli_num_rows($result);

if ($numrow > 0) {
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }

    echo json_encode($arr);
} else {
    echo "null";
}
