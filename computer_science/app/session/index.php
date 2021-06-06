<?php
session_start();
$research = isset($_GET["research"]) ? $_GET["research"] : '';
$name = isset($_GET["name"]) ? $_GET["name"] : '';

if ($research == 1) {
    $_SESSION["name_teacher"] = $name;
    header("location: ../research");
}
