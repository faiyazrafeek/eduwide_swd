<?php 
include("connection.php");
    $id = $_POST['id'];
    $q =  "DELETE FROM students WHERE id = '$id'";

    mysqli_query($conn, $q);

?>