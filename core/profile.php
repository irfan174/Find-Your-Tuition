<?php session_start(); ?>
<?php include 'database.php' ?>
<?php
if ($_SESSION["type"] == "student") {
    $sql = "UPDATE students SET student_name='" . $_GET["name"] . "', area_name='" . $_GET["area"] . "', address='" . $_GET["address"] . "', age=" . $_GET["age"] . ", class='" . $_GET["class"] . "', student_group='" . $_GET["student_group"] . "', medium='" . $_GET["medium"] . "', institute='" . $_GET["institute"] . "', phone=" . $_GET["phone"] . ", lat=" . $_GET["lat"] . ", lng=" . $_GET["lng"] . ", student_password='" . $_GET["student_password"] . "' WHERE student_id=" . $_SESSION['id'];
} else {
    $sql = "UPDATE tutors SET tutor_name='" . $_GET["name"] . "', area_name='" . $_GET["area"] . "', address='" . $_GET["address"] . "', age=" . $_GET["age"] . ", class='" . $_GET["class"] . "', background='" . $_GET["medium"] . "', lat=" . $_GET["lat"] . ", lng=" . $_GET["lng"] . ", institute='" . $_GET["institute"] . "', phone=" . $_GET["phone"] . ", tutor_password='" . $_GET["tutor_password"] . "' WHERE tutor_id=" . $_SESSION['id'];

}

mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: ../routes/profile.php");

?>