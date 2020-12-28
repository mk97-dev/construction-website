<!DOCTYPE html>
<html>
    <head>
        <title>Cite Contruction Management</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./sidemenu/sideMenuBarStyle.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script>
function downloadPdf() {
  $(".downloadbtn").hide();
    var HTML_Width = $(".downloadableDiv").width();
    var HTML_Height = $(".downloadableDiv").height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width + (top_left_margin * 2);
    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    html2canvas($(".downloadableDiv")[0]).then(function (canvas) {
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
        for (var i = 1; i <= totalPDFPages; i++) { 
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        }
        pdf.save("ResourceReport.pdf");
       
    });
}
      </script>
    
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
                
                <div class="sectionHome">
  <form action="" method = "post" name = "showResourceDetail">
    <div class="row">
      <div class="col-25">
        <label for="Category">Project Name</label>
      </div>
      <div class="col-75">
        <select id="projectName" name="projectName" required>
            <option value="NULL">NULL</option>
        <?php
         $db = mysqli_connect("localhost","root","","construction");

         if(!$db){
             die("Connection failed: ".mysqli_connect_error());
         }
        
$sql = mysqli_query($db, "SELECT projectName From projects");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['projectName'] ."'>" .$row['projectName'] ."</option>" ;
}
?>
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="lname">time</label>
      </div>
      <div class="col-75">
      <select id="time" name="time" required>
            <option value="NULL">NULL</option>
            <option value="Daily">Daily</option>
            <option value="Weekly">Weekly</option>
            <option value="Monthly">Monthly</option>
            </select>
        
      </div>
    </div>
    
    
    <div class="row">
    <div class="col-25">
      <input type="submit" value="Submit" name = "submit">
      </div>
    </div>
  </form>

<?php
 $db = mysqli_connect("localhost","root","","construction");

 if(!$db){
     die("Connection failed: ".mysqli_connect_error());
 }
                   
			if(isset($_POST['submit']))
			{       
        $projectName = $_POST['projectName'];
        $time = $_POST['time'];
        echo "<script type='text/javascript'>"; 
        echo "document.getElementById('projectName').value ='$projectName';";
        echo "document.getElementById('time').value ='$time';";
        
        echo "</script>";
        
                if($time=="Daily"){
                    $res = mysqli_query($db,"SELECT * FROM `resourcesDaily` where `date`= CURRENT_DATE AND `projectName`='$projectName';");
                }
                elseif($time=="Weekly"){
                    $res = mysqli_query($db,"SELECT * FROM `resourcesDaily` where `date` >= CURRENT_DATE- INTERVAL 7 DAY AND `projectName`='$projectName';");
                }
                elseif($time=="Monthly"){
                    
                }
                elseif($time == "NULL"){
                  $res = mysqli_query($db,"SELECT * FROM `resourcesDaily` where `projectName`='$projectName';");
                }
                
                if (mysqli_num_rows($res) == 0) { 

                    echo"<h2>NO DATA TO SHOW KINDLY ADD DAILY DATA FIRST.</h2>";
                 } else { 
                //TABLE
                echo "<div class = 'downloadableDiv'>";
                echo "<h2 > RESOURCE DETAIL </h2>";
                echo"<table class='redTable'>";
                echo"<thead>";
                echo"<tr>";
                echo"<th>Resource Name</th>";
                echo"<th>Project Name</th>";
                echo"<th>Quantity</th>";
                echo"<th>Unit</th>";
                echo"<th>Date</th>";
                echo"</tr>";
                echo"</thead>";
                
                while ($row = mysqli_fetch_assoc($res)){
                    echo "<tr >";
                    echo"<td>";echo$row['resourceName'];echo"</td>";
                    echo"<td>";echo$row['projectName'];echo"</td>";
                    echo"<td>";echo$row['quantity'];echo"</td>";
                    echo"<td>";echo$row['unit'];echo"</td>";
                    echo"<td>";echo$row['date'];echo"</td>";
                    echo"</tr>";
                }
                echo"</table>";
                echo "</div>";
                echo "<div class = 'downloadBtnDiv'>";
                echo "<button onclick='downloadPdf()' id='downloadbtn' class = 'downloadBtn' ></button>";
                 }
            
               
				
            
            }
		?>
                </div>
                
         
         
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
form{
  height: 35%;
    width: 100%;
}
.sectionHome{
  height: 100%;
    width: 100%;
    margin-left : 5px;
    margin-top : 10px;
}
.downloadableDiv{
  width: 88%;
    height: fit-content;
    float: left;
    margin-top: 10px;
    

}
.downloadBtnDiv{
  height : 80%;
  width : 9%;
  float : right;
}
.wrapper{
    width:100%;
    height: calc(100% - 80px);
}
table.redTable {
  border: 2px solid #A40808;
  background-color: #EEE7DB;
  width: 100%;
    /*left: 29px;*/
    position: relative;
   /* top: 19px;*/
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
input[type=text],input[type=date],input[type=file],input[type=email],input[type=number], select, textarea{
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
    
    left: 260px;
    

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
    width: 53%;
    margin-top: 10px;
  }
  .downloadBtn{
    background-image: url(assets/printBtn2.png);
    position: relative;
    top: 38px;
    
    left: -40px;
    height: 30px;
    width: 30px;
    /* border: blue; */
    border-color: tomato;
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