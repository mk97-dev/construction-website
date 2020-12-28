
    
               <?php
$db = mysqli_connect("localhost","root","","construction");
             
if(!$db){
    die("Connection failed: ".mysqli_connect_error());
}
$checkProcess = mysqli_query($db,"SELECT * FROM `schedule` WHERE projectName = '$projectName' AND `status` = 0;");
if (mysqli_num_rows($checkProcess) == 0) { 
   $message = "One or more processes needs to be finished!!!";
   echo "<h1>".$message."<h1>";
   sleep(1.5);
   header("location:projectsOverview3.php");
}


    $laborExpense = 0;
    $resourcesExpense = 0;
    $accidentExpense = 0;
    $projectName = $_GET['projectName'];
    
    $projectData = mysqli_query($db,"SELECT * FROM `projects` WHERE projectName = '$projectName';");
    $rowProjects = mysqli_fetch_assoc($projectData);
    $projectId = $rowProjects['projectId'];
    $totalBudget = $rowProjects['budget'];
    $dateStarted = $rowProjects['date'];
    $clientName = $rowProjects['clientName'];
    $dateCompleted = date("Y-m-d");
    $laborDuesQuery = mysqli_query($db,"SELECT * FROM `dailyreport` WHERE projectName = '$projectName';");
      
 while ($row = mysqli_fetch_assoc($laborDuesQuery)){

    $laborDue = $row['dailyDues'];
    $laborExpense = $laborExpense + $laborDue;


 }

 $resourcesCostQuery = mysqli_query($db,"SELECT * FROM `resourcesdaily` WHERE projectName = '$projectName';");
 while ($row = mysqli_fetch_assoc($resourcesCostQuery)){

    $resourcesCost = $row['price'];
    $resourcesExpense = $resourcesExpense + $resourcesCost;

 }
 $AccidentsCostQuery = mysqli_query($db,"SELECT * FROM `accidents` WHERE projectName = '$projectName';");
 while ($row = mysqli_fetch_assoc($AccidentsCostQuery)){

    $accidentCost = $row['budgetWasted'];
    $accidentExpense = $accidentExpense + $accidentCost;

 }

 $completeProjectSql="INSERT INTO `projectscompleted` (projectId,projectName,clientName,totalBudget,laborExpense,resourcesExpense,accidentExpense,dateStarted,dateCompleted) 
 VALUES 
 ('$projectId','$projectName','$clientName',$totalBudget,'$laborExpense','$resourcesExpense','$accidentExpense','$dateStarted','$dateCompleted');";
 $res = mysqli_query($db,$completeProjectSql) or trigger_error("Query Failed! SQL: $completeProjectSql - Error: ".mysqli_error($db), E_USER_ERROR);
 $updateQuery="UPDATE `projects` SET
                         `status`='completed' WHERE `projectName` = '$projectName';";

$updateRes = mysqli_query($db,$updateQuery);
$message = "Project Completed!!!";
echo "<h1>".$message."<h1>";
sleep(1.5);
header("location:projectsOverview3.php");


                        ?>
                    <!-- End Nav Card -->
                    