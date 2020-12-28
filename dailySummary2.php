<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Construction HTML-5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder-logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparent">
            <div class="main-header ">
                
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <!-- logo-1 -->
                                    <a href="index.html" class="big-logo"><img src="assets/logo2.png" alt=""></a>
                                    <!-- logo-2 -->
                                    <a href="index.html" class="small-logo"><img src="assets/logo2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                   
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="portfolio.php">Portfolio</a></li>
                                            <li><a href="projectsOverview3.php">Project</a>
                                                <ul class="submenu">
                                                    <li><a href="projectsOverview3.php">Overview</a></li>
                                                    
                                                    <li><a href="newProject.php">New Project</a></li>
                                                   
                                                </ul></li>

                                            <li><a href="progressManagement.html">Progress Management</a>
                                                <ul class="submenu">
                                                    <li><a href="manageSchedule2.php">Schedule</a></li>
                                                    <li><a href="manageLabor2.php">Workforce</a></li>
                                                    <li><a href="manageResources2.php">Resource</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Report</a>
                                                <ul class="submenu">
                                                    <li><a href="dailySummary2.php">Daily Report</a></li>
                                                    <li><a href="weeklySummary.php">Weekly Report</a></li>
                                                    <li><a href="monthlySummary.php">Monthly Report</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li><a href="#">History</a>
                                                <ul class="submenu">
                                                    <li><a href="performanceEvaluation.php">Performance</a></li>
                                                    <li><a href="manageAccident2.php">Accidents</a></li>
                                                    
                                                </ul></li>
                                                <li><a href="clientSearch.php">Clients</a>
                                                     <ul class="submenu">
                                                    <li><a href="clientSearch.php">Search Client</a></li>
                                                    <li><a href="newClient.php">New Client</a></li>
                                                    
                                                </ul>
                                               </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                           
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- slider Area Start-->
       
        <!-- slider Area End-->

        <!-- main menu area-->
        <section class="project-area  section-padding30">
            <div class="container">
               <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3">
                                <div class="front-text">
                                    <h2 class="">Daily Summary</h2>
                                </div>
                                <span class="back-text">Gellary</span>
                            </div>
                        </div>
                        <form action="" method = "post" name = "showProject" enctype="multipart/form-data">
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
                     <input type="submit" value="Submit" name = "submit">
                   </div>
                 </div>
                 
               </form>
                        
                                <!--Nav Button  -->                                            
                                
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
               </div>
               <?php

if(isset($_POST['submit'])){
    $totalDues = 0;
    $totalResourcesCost = 0;
    $totalAccidentCost = 0;
    $projectName = $_POST['projectName'];
    $duration = "Daily";
    $laborDuesQuery = mysqli_query($db,"SELECT * FROM `dailyreport` WHERE projectName = '$projectName' AND `Date` = CURRENT_DATE;");
        echo "<script type='text/javascript'>"; 
 echo "document.getElementById('projectName').value ='$projectName'";
 echo "</script>";
 while ($row = mysqli_fetch_assoc($laborDuesQuery)){

    $laborDue = $row['dailyDues'];
    $totalDues = $totalDues + $laborDue;

 }

 $resourcesCostQuery = mysqli_query($db,"SELECT * FROM `resourcesdaily` WHERE projectName = '$projectName' AND `date`= CURRENT_DATE;");
 while ($row = mysqli_fetch_assoc($resourcesCostQuery)){

    $resourcesCost = $row['price'];
    $totalResourcesCost = $totalResourcesCost + $resourcesCost;

 }
 $AccidentsCostQuery = mysqli_query($db,"SELECT * FROM `accidents` WHERE projectName = '$projectName' AND `date`= CURRENT_DATE;");
 while ($row = mysqli_fetch_assoc($AccidentsCostQuery)){

    $accidentCost = $row['budgetWasted'];
    $totalAccidentCost = $totalAccidentCost + $accidentCost;

 }

                echo "<div class='row'>";
                echo " <div class='col-12'>";
                        
                        echo " <div class='tab-content active' id='nav-tabContent'>";
                            
                            echo "  <div class='tab-pane fade active show' id='nav-home' role='tabpanel' aria-labelledby='nav-home-tab'>";           
                            echo "   <div class='project-caption'>";
                            echo "    <div class='row'>";
                            echo "       <div class='col-lg-4 col-md-6'>";
                            echo "          <div class='single-project mb-30'>";
                            echo "                <p>This is the total expense of all the labor work for Today. For More Detail report.</p>";
                            
                            echo "<div class='col-xl-2 col-lg-2 col-md-3'>";
                            echo "  <div class='header-right-btn f-right d-none d-lg-block' id='detailsBtn'>";
                            echo "        <a href='laborCostMonthly.php?projectName=".$projectName."&duration=".$duration."' class='btn'>View Details</a>";
                            echo "   </div>";
                            echo " </div>";
                            echo "                <h2>Labor Expenses</h2>";
                            echo "                <h2> Total Labor Cost   : ".$totalDues."</h2>";
                            echo "             </div>";
                            echo "         </div>";
                            echo "         <div class='col-lg-4 col-md-6'>";
                            echo "             <div class='single-project mb-30'>";
                            echo "                <p>This is the total expense of all the resources ordered Today. For More Detail report.</p>";
                            
                            echo "<div class='col-xl-2 col-lg-2 col-md-3'>";
                            echo "  <div class='header-right-btn f-right d-none d-lg-block' id='detailsBtn'>";
                            echo "        <a href='resourcesCostMonthly.php?projectName=".$projectName."&duration=".$duration."' class='btn'>view Details</a>";
                            echo "   </div>";
                            echo " </div>";
                            
                            echo "                <h2> Total Resources Cost   : ".$totalResourcesCost."</h2>";
                            echo "          </div>";
                            echo "      </div>";
                            echo "      <div class='col-lg-4 col-md-6'>";
                            echo "          <div class='single-project mb-30'>";
                            echo "                <p>This is the total expense of all the accidents for Today. For More Detail report.</p>";
                            
                            echo "<div class='col-xl-2 col-lg-2 col-md-3'>";
                            echo "  <div class='header-right-btn f-right d-none d-lg-block' id='detailsBtn'>";
                            echo "        <a href='accidentsCostMonthly.php?projectName=".$projectName."&duration=".$duration."' class='btn'>View Details</a>";
                            echo "   </div>";
                            echo " </div>";
                            echo "                <h2> Total Accident Cost   : ".$totalAccidentCost."</h2>";
                            echo "          </div>";
                            echo "      </div>";
                                        
                                        
                            echo "  </div>";
                            echo "</div>";
                            echo "</div>";

                            
                            
                           echo "</div>";
                        echo"</div>";
}
                        ?>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area Start -->
        
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="assets/js/wow.min.js"></script>
		<script src="assets/js/animated.headline.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="assets/js/jquery.sticky.js"></script>
               
        <!-- counter , waypoint -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>

        <!-- contact js -->
        <script src="assets/js/contact.js"></script>
        <script src="assets/js/jquery.form.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <style>
            .project-img img{
                height:250px;
            }
            .col-lg-6{
                width: 100%;
                text-align: center;
                
            }
            .col-md-6{
                border-style: solid;
    border-color: burlywood;
    border-radius: 5px;
    border-width: thick;
            }
            .row{
                justify-content: center;
                margin-left: 10px;
                margin-right: 10px;
            }
            form{
  height: 20%;
    width: 100%;
}
#detailsBtn {
    float: none;
    position : relative;
    left : 280px;
}
          
            input[type=submit] {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    margin-left : 10px;
    height: 50px;
    width: 100px;
    margin-top : 10px;
    

  }
            
            .col-25 {
    float: left;
    width: 25%;
    margin-top: 17px;
  }
  .nice-select {
      width :100%;
  }
  label {
    padding: 12px 12px 12px 0;
   
    margin-left: 12px;
    color: rgb(86 65 65);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 24px;
  }
  /* Floating column for inputs: 75% width */
  .col-75 {
    float: left;
    width: 75%;
    margin-top: 10px;
  }
            @media (min-width: 992px){
.col-lg-6 {
    
    flex: 0 0 100%;
    max-width: 100%;
}
            }
        </style>
        
    </body>
</html>