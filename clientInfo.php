<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
        <title>Cite Contruction Management</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script type="text/javascript">
        function showDetail(URL){
            document.location.href=URL;
        }
        
        
    </script>
    <script>
function downloadPdf() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // for chrome e.t.c
  $(".downloadbtn").hide();
    var HTML_Width = $(".downloadableDiv").width();
    var HTML_Height = $(".downloadableDiv").height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width + (top_left_margin * 2);
    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
    var canvas_image_width = HTML_Width-10;
    var canvas_image_height = HTML_Height-10;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    html2canvas($(".downloadableDiv")[0]).then(function (canvas) {
        var imgData = canvas.toDataURL("image/jpeg", 2.0);
        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
        for (var i = 1; i <= totalPDFPages; i++) { 
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        }
        pdf.save("clientInfo.pdf");
       
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
            <div class = "content">
                <div class="sectionHome">
                <?php
                $db = mysqli_connect("localhost","root","","construction");

                if(!$db){
                    die("Connection failed: ".mysqli_connect_error());
                }
                if (isset($_GET['clientName'])){
                $clientName = $_GET['clientName'];
                
                }
                
                
               
             
                
              


$res = mysqli_query($db,"SELECT * FROM `clients` WHERE clientName = '$clientName'");
   



if (mysqli_num_rows($res) == 0) { 

    echo"<h2>NO DATA TO SHOW KINDLY ADD DAILY DATA FIRST.</h2>";
 } else { 
//TABLE
echo "<div class = 'downloadableDiv'>";
echo "<h2 > CLIENT INFORMATION </h2>";
echo"<table class='redTable'>";
echo"<thead>";
echo"<tr>";
echo"<th>Client ID</th>";
echo"<th>Client Name</th>";
echo"<th>Phone No</th>";
echo"<th>Email</th>";

echo"</tr>";
echo"</thead>";

while ($row = mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo"<td>";echo$row['clientId'];echo"</td>";
    echo"<td>";echo$row['clientName'];echo"</td>";
    echo"<td>";echo$row['phoneNo'];echo"</td>";
    echo"<td>";echo$row['email'];echo"</td>";
    echo"</tr>";
}
echo"</table>";
echo "</div>";
echo "<div class = 'downloadBtnDiv'>";
echo "<button onclick='downloadPdf()' id='downloadbtn' class = 'downloadBtn' ></button>";
 }

 

 if(isset($_POST['submit']))
 {
     
    
    $updateDues = $_POST['updateDuesValue'];
    $updateQuery = "UPDATE `weekreport` SET
    `TotalDues`=TotalDues-'$updateDues' WHERE Attendant = '$attendantName';";
    $updateRes = mysqli_query($db,$updateQuery);
    
 } 

?>
                
  
                </div>   
  

                
          
         
        <footer>
            <br>
               

            </footer>
</div>

      
    </body>
</html>
<script>
    function showRemainingyDues(){
            
        }
        function showPayDues(){
            document.getElementById('payDuesForm').style.visibility = "visible";
            
        }
        function updateDues(){
            return document.getElementById('showPayDuesText').value;
        }
    function showDetail(URL){
            document.location.href=URL;
        }
   
    </script>

  </body>
  <Style>
      #remainingDues{
          float:left;
      }
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
input[type=text],input[type=date], select, textarea{
    width: 280px;
    padding: 12px;
    margin-left:10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
    height: 50px;
    float:left;
    display: inline-block;
  }
  
  /* Style the label to display next to the inputs */
  label {
    padding: 12px 12px 12px 0;
   
    margin-left: 12px;
    color: rgb(255, 255, 255);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 24px;
  }
  .row {
      margin-left : 25px;
      margin-right : 25px;
  }
  
  /* Style the submit button */
  input[type=submit],input[type=button] {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    margin-left : 10px;
    height: 50px;
    width: 100px;
    float:left;
    

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