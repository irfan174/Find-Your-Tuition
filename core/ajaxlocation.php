<?php

include_once 'dbconnection.php';
$obj = new dbconnect();
$conn = $obj->connect();

$search = "";
if (isset($_GET['search']))
    $search = $_GET['search'];

if ($conn != null) {
    $query = "select * from tutors where area_name like '%$search%'";

    $pdostmt = $conn->query($query);
    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);
    if (count($table) == 0) {
        echo "<tr><td colspan='10' style='text-align:center;'>No tutor Found!!!</td></tr>";
    } else {
        $htmlcode = "";
        foreach ($table as $row) {
            $htmlcode .= "<tr class='unread'>"
                . "<td class='view-message' style='width: 16%;'><a href='user.php?id=$row[0]'>$row[1]</a></td>"
                . "<td class='view-message' style='text-align: center'>$row[2]</td>"
                . "<td class='view-message' style='text-align: center'>$row[4]</td>"
                . "<td class='view-message' style='text-align: center'>$row[5] </td>"
                . "<td class='view-message' style='text-align: center'>$row[6] </td>"
                . "<td class='view-message' style='text-align: center'>$row[9]</td>"
                . "</tr>";
        }
        echo $htmlcode;
    }
} else {
    echo "<tr><td colspan='10' style='text-align:center;'>No tutor Found!!!</td></tr>";
}
?>
