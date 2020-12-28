<?php


if(isset($_POST['submit']))
 {
    $db = mysqli_connect("localhost","root","","construction");

    if(!$db){
        die("Connection failed: ".mysqli_connect_error());
    }
    
    $updateDues = $_POST['updateDuesValue'];
    $attendantName = $_GET['attendantName'];
    $duration = $_GET['duration'];
    $updateQuery = "UPDATE `weekreport` SET
    `TotalDues`=TotalDues-'$updateDues' WHERE Attendant = '$attendantName';";
    $updateRes = mysqli_query($db,$updateQuery);

    header("location:showAttendantDetail.php?attendantName=".$attendantName."&duration=".$duration); 
    
 } 

?>