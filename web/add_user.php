<?php
include 'db.php';

$name = $_POST['full_name'];
$dept = $_POST['department'];
$roll = $_POST['roll_no'];
$phone = $_POST['phone'];

$sql = "INSERT INTO users (full_name, department, roll_no, phone)
VALUES ('$name','$dept','$roll','$phone')";

$conn->query($sql);
header("Location: view_users.php");
?>
