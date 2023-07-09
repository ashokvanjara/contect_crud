<?php

include "conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM details WHERE id=$id";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    echo "delted";
} else {
    echo "false";
}
header("location:read.php");

?>