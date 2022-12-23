<?php
$servername = "localhost";
$username = "root";
$HPassword = "";
$database = "customer2";
$conn = new mysqli($servername, $username, $HPassword,$database);


    $id =(int) $_GET['id'];
    $sql = "DELETE FROM game where ID = $id ";
    mysqli_query($conn,$sql);
    header("location:danhsach.php");

?>