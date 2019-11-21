<?php session_start();?>
<?php include 'database.php' ?>
<?php
$status = "pending";
$stmt = $conn->prepare("INSERT INTO request (student_id, tutor_id, status) VALUES (?, ?, ?)");
if ($_SESSION["type"] == "student")
{
    $stmt->bind_param("sss",  $_SESSION['id'],$_GET['to'],  $status);
}else {
    $stmt->bind_param("sss", $_GET['to'], $_SESSION['id'], $status);
}
$stmt->execute();
$stmt->close();
$conn->close();
header("Location: ../routes/profile.php");

?>