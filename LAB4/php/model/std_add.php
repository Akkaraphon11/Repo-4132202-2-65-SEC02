<?php
$id = $_GET['std_id'];
$id = $_GET['std_name'];
$id = $_GET['std_sname'];

require "condb.php";

try{
    $sql = "INSERT INTO td_student VALUES('$std_id','$std_name','$std_sname')"
     $result = mysqli_query($link,$sql);
    echo "Affeceted : " . mysqli_affected_rows($link);
}catch (Exception $e) {
    echo $e . "Error no :" . mysqli_errno($link);
}


