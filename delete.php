<?php
include('db.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = '$id'";
    $result = $mysqli->query($sql);
    if(! $result){
        die("Deleting failed");
    }
    $mysqli->close();
    header('Location:index.php');

}