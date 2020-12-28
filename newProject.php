<!DOCTYPE html>
<html>
    <head>
        <title>Cite Contruction Management</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>

    <body>
    <header>
              <h1>Construction Management</h1>

</header>
      <div class = "wrapper">
          
    <div class="btn">
      <span class="fas fa-bars"></span>
    </div>
    <?php include ('sideMenuBar.html');?>
            </div>
                <div class="content">
                
                <div class="sectionhome">
  <form action="" method = "post" name = "addNewProject" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Project Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="projectName" placeholder="project name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Location</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="location" placeholder="Location..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Contract</label>
      </div>
      <div class="col-75">
        <input type="file" id="lname" name="contract" placeholder="Contract" accept="application/pdf,application/vnd.ms-excel" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Map</label>
      </div>
      <div class="col-75">
        <input type="file" id="lname" name="map" placeholder="Map"  required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Category">Client Name</label>
      </div>
      <div class="col-75">
        <select id="Category" name="clientName" required>
            <option value="NULL">NULL</option>
        <?php
         $db = mysqli_connect("localhost","root","","construction");

         if(!$db){
             die("Connection failed: ".mysqli_connect_error());
         }
        
$sql = mysqli_query($db, "SELECT clientName From clients");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['clientName'] ."'>" .$row['clientName'] ."</option>" ;
}
?>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="duration">Duration (Months)</label>
      </div>
      <div class="col-75">
        <input type="text" id="duration" name="duration" placeholder="Duration" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="budget">Total Budget (Pkr)</label>
      </div>
      <div class="col-75">
        <input type="number" id="budget" name="totalBudget" placeholder="Budget in Pkr..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Date Started</label>
      </div>
      <div class="col-75">
        <input type="date" id="lname" name="dateStarted" placeholder="Duration" required>
      </div>
    </div>
    
    
    <div class="row">
      <input type="submit" value="Submit" name = "submit">
    </div>
  </form>
</div>
<?php
                   
			if(isset($_POST['submit']))
			{
                $projectName = $_POST['projectName'];
                $contractName = $_FILES['contract']['name'];
                $location = $_POST['location'];
                $duration = $_POST['duration'];
                $clientName = $_POST['clientName'];
                $totalBudget = $_POST['totalBudget'];
                $dateStarted = $_POST['dateStarted'];
                $map = $_FILES['map']['name'];

                $destination = 'uploads/'.$contractName;
                $destinationMap = 'uploads/'.$map;
                $extension = pathinfo($contractName, PATHINFO_EXTENSION);
                $extensionMap = pathinfo($map, PATHINFO_EXTENSION);

                $file = $_FILES['contract']['tmp_name'];
                $fileMap = $_FILES['map']['tmp_name'];
                $size = $_FILES['contract']['size'];
                $sizeMap = $_FILES['map']['size'];
                if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
                  echo "You file extension must be .zip, .pdf or .docx";
              } elseif ($_FILES['contract']['size'] > 100000000) { // file shouldn't be larger than 100Megabyte
                  echo "File too large!";
              } else {
                  // move the uploaded (temporary) file to the specified destination
                  if (move_uploaded_file($file, $destination) && move_uploaded_file($fileMap, $destinationMap)) {
                    $sql="INSERT INTO projects (projectName,location,contract,map,clientName,duration,status,budget,date) 
                    VALUES 
                    ('$projectName','$location','$contractName','$map','$clientName','$duration','Not Completed','$totalBudget','$dateStarted')";
                    
              }
            }
                
				
                

				if(mysqli_query($db,$sql)){
                    

                    }
                    elseif(mysqli_errno($db) == 1062) {
                        echo "duplicate entry no need to insert into DB<br>";
                    }
                        else{
                         echo "db insertion error:".$sql."<br>";
                }
            
               
				
            
            }
		?>
                </div>
                
         
                
            </section>
         
        <footer><br>
                

            </footer>
           
    </body>
</html>

<style>
/*
html5doctor.com Reset Stylesheet
v1.6.1
Last Updated: 2010-09-17
Author: Richard Clark - http://richclarkdesign.com
Twitter: @rich_clark
*/

body{
          height:100%;
          width:100%;
          background:#1b1b1b;
      }
      header{
    height:80px;
display : inline-block;
    width: 100%;
    text-align: center;
    margin-top:5px;
   
}
.wrapper{
    width:100%;
    height: calc(100% - 80px);
}
table.redTable {
  border: 2px solid #A40808;
  background-color: #EEE7DB;
  width: 100%;
  left: 128px;
    position: relative;
    top: 19px;
  text-align: center;
  border-collapse: collapse;
}
table.redTable td, table.redTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.redTable tbody td {
  font-size: 13px;
}
table.redTable tr:nth-child(even) {
  background: #F5C8BF;
}
table.redTable tbody td:hover {
  color: red;
}
table.redTable thead {
  background: #A40808;
}
table.redTable thead th {
  font-size: 19px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
  border-left: 2px solid #A40808;
}
table.redTable thead th:first-child {
  border-left: none;
}
input[type=text],input[type=date],input[type=file],input[type=number], select, textarea{
    width: 500px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
    height: 50px;
    display: inline-block;
    
  }
  
  /* Style the label to display next to the inputs */
  label {
    padding: 12px 12px 12px 0;
   
    margin-left: 12px;
    color: rgb(86 65 65);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 24px;
  }
  .row {
      margin-left : 25px;
      margin-right : 25px;
  }
  
  /* Style the submit button */
  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    height: 50px;
    width: 100px;
    position: relative;
    top: 10px;
    right: 60px;
    

  }
  
  /* Style the container */
  .container {
    border-radius: 5px;
    
    padding: 40px;
    height: 100%;
  }
  
  /* Floating column for labels: 25% width */
  .col-25 {
    float: left;
    width: 25%;
    margin-top: 17px;
  }
  
  /* Floating column for inputs: 75% width */
  .col-75 {
    float: left;
    width: 75%;
    margin-top: 10px;
  }
  
  /* Clear floats after the columns */
 
  
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
    </style>