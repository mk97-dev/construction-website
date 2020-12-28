
<?php
if(isset($_POST['changeStatus']))
			{ 

                $db = mysqli_connect("localhost","root","","construction");

                if(!$db){
                    die("Connection failed: ".mysqli_connect_error());
                }
                    $worktobechanged = $_POST["workName"];
                    $status = $_POST["status"];
                   
                    if($status=="Completed"){
                        $statustobechanged = false;
                    }
                    elseif($status=="Not Completed"){
                        $statustobechanged = true;
                    }
                    $sqlChangeStatus = "UPDATE `schedule` SET
                    `status`='$statustobechanged' WHERE `workName` = '$worktobechanged';";
                    mysqli_query($db,$sqlChangeStatus);
                    header("location:manageSchedule2.php");    

            }
            ?>