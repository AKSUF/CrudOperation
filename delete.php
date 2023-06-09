<?php
include 'connect.php';

if(isset($_GET['deletedid'])){
    $id = $_GET['deletedid'];
    $sql = "DELETE FROM crud WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if($result){
    header('location:display.php');
    } else {
        die("Connection failed: " . mysqli_connect_error());
    }
}
?>