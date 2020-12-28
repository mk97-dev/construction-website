<?php
 $db = mysqli_connect("localhost","root","","construction");
             
                      if(!$db){
                          die("Connection failed: ".mysqli_connect_error());
                      }
if (isset($_GET['contractName'])){
                $contractName = $_GET['contractName'];
                echo $contractName." downloaded.";
                $contractres = mysqli_query($db,"SELECT * FROM `projects` WHERE contract = '$contractName'");
                $rowContract = mysqli_fetch_assoc($contractres);
                $filepath = 'uploads/' . $rowContract['contract'];
                if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $rowContract['contract']));
        readfile('uploads/' .$rowContract['contract']);
        header("location:projectsOverview3.php"); 
      }
  }
  if (isset($_GET['mapName'])){
    $mapName = $_GET['mapName'];
    echo $mapName." downloaded.";
    $mapres = mysqli_query($db,"SELECT * FROM `projects` WHERE map = '$mapName'");
    $rowMap = mysqli_fetch_assoc($mapres);
    $filepath = 'uploads/' . $rowMap['map'];
    if (file_exists($filepath)) {
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($filepath));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize('uploads/' . $rowMap['map']));
readfile('uploads/' .$rowMap['map']);
header("location:projectsOverview3.php"); 
}
}

      ?>