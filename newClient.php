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
  <form action="" method = "post" name = "addNewProject">
    <div class="row">
      <div class="col-25">
        <label for="fname">Client Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="clientName" placeholder="Client name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Phone No.</label>
      </div>
      <div class="col-75">
        <input type="number" id="lname" name="phoneNo" placeholder="Phone Number..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="lname" name="email" placeholder="Email..." required>
      </div>
      
      
    </div>
    
    <div class="row">
      <input type="submit" value="Submit" name = "submit">
    </div>
  </form>
</div>
<?php
 $db = mysqli_connect("localhost","root","","construction");

 if(!$db){
     die("Connection failed: ".mysqli_connect_error());
 }
                   
 if(isset($_POST['submit']))
 {
           $clientName = $_POST['clientName'];
           $phoneNo = $_POST['phoneNo'];
           $email = $_POST['email'];
           $selectSql="SELECT * FROM clients WHERE `email` = '$email';";  
           $selectRes = mysqli_query($db,$selectSql);
           if(mysqli_num_rows($selectRes)==0){
   $sql="INSERT INTO clients (clientName,phoneNo,email)
           VALUES 
           ('$clientName','$phoneNo','$email')";
           mysqli_query($db,$sql);
           }
           else {
             echo "duplicate entry no need to insert into DB<br>";
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