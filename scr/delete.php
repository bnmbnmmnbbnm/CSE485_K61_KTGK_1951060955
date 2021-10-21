<?php
include("connect.php");
$patientid = $_GET['patientid'];
$sql = "DELETE FROM PATIENT WHERE patientid = $patientid";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    header("location: index.php");
} else {
    header("location: index.php");
}