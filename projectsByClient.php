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
        pdf.save("ResourcesMonthlyReport.pdf");
       
    });
}
      </script>
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
                <div class="header-top d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li>+(123) 1234-567-8901</li>
                                        <li>info@domain.com</li>
                                        <li>Mon - Sat 8:00 - 17:30, Sunday - CLOSED</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <!-- logo-1 -->
                                    <a href="index.html" class="big-logo"><img src="assets/logo2.png" alt=""></a>
                                    <!-- logo-2 -->
                                    <a href="index.html" class="small-logo"><img src="assets/img/logo/loder-logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                   
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="projectsOverview2.php">Projects</a>
                                                <ul class="submenu">
                                                    <li><a href="projectsOverview2.php">Overview</a></li>
                                                    <li><a href="newclient.php">New Client</a></li>
                                                    <li><a href="newProject.php">New Project</a></li>
                                                    <li><a href="">Construction Photo</a></li>
                                                </ul></li>

                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="addDailyReport.php">Progress Report</a>
                                                <ul class="submenu">
                                                    <li><a href="addDailyReport.php">New Report</a></li>
                                                    <li><a href="showDailyReport.php">Dues Report</a></li>
                                                    <li><a href="showWorkReport.php">Work Report</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Resources</a>
                                                <ul class="submenu">
                                                    <li><a href="addResource.php">New Resources</a></li>
                                                    <li><a href="showResourceDetail.php">Resources Detail</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li><a href="#">Schedule</a>
                                                <ul class="submenu">
                                                    <li><a href="newSchedule.php">Create New Schedule</a></li>
                                                    <li><a href="manageSchedule.php">Manage Current Schedule</a></li>
                                                    
                                                </ul></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="#" class="btn">Contact Now</a>
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
                                    <h2 class="">Project Information</h2>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content active" id="nav-tabContent">
                                    <!-- card ONE -->
                                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                        <div class="project-caption">
                                            <div class="row">
                                                <?php
$db = mysqli_connect("localhost","root","","construction");

if(!$db){
    die("Connection failed: ".mysqli_connect_error());
}
$clientName = $_GET['clientName'];

$res = mysqli_query($db,"SELECT * FROM `projects` WHERE `clientName` = '$clientName';");
if (mysqli_num_rows($res) == 0) { 

    echo"<h2>No Data to show.</h2>";
 } else { 
//TABLE
echo "<div class = 'downloadableDiv'>";
echo "<h2 >".$clientName." PROJECTS </h2>";
echo"<table class='redTable'>";
echo"<thead>";
echo"<tr>";
echo"<th>Project Id</th>";
echo"<th>Project Name</th>";
echo"<th>Location</th>";
echo"<th>Contract</th>";
echo"<th>Duration (Months)</th>";
echo"<th>Status</th>";
echo"<th>Budget</th>";
echo"<th>Date</th>";
echo"</tr>";
echo"</thead>";

while ($row = mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo"<td>";echo$row['projectId'];echo"</td>";
    echo"<td>";echo$row['projectName'];echo"</td>";
    echo"<td>";echo$row['location'];echo"</td>";
    echo"<td>";echo$row['contract'];echo"</td>";
    echo"<td>";echo$row['duration'];echo"</td>";
    echo"<td>";echo$row['status'];echo"</td>";
    echo"<td>";echo$row['budget'];echo"</td>";
    echo"<td>";echo$row['date'];echo"</td>";
    echo"</tr>";
}
echo"</table>";
echo "</div>";
echo "<div class = 'downloadBtnDiv'>";
echo "<button onclick='downloadPdf()' id='downloadbtn' class = 'downloadBtn' ></button>";
 }
?>

                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                                <!--Nav Button  -->                                            
                                
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
               </div>
               
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
        <script type="text/javascript">
        function showDetail(URL){
            document.location.href=URL;
        }
    </script>
        <style>
            .downloadableDiv{
  width: 88%;
    height: fit-content;
    float: left;
    margin : 5px;
    

}
.downloadBtnDiv{
  height : 80%;
  width : 9%;
  float : right;
}
.downloadBtn{
    background-image: url(assets/printBtn2.png);
    position: relative;
    
    
    left: -40px;
    height: 30px;
    width: 30px;
    /* border: blue; */
    border-color: tomato;
  }
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
                width : 100%;
                TEXT-ALIGN: center;
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
  table.redTable {
  border: 2px solid #A40808;
  background-color: #EEE7DB;
  width: 100%;
 
    position: relative;
    
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
            @media (min-width: 992px){
.col-lg-6 {
    
    flex: 0 0 100%;
    max-width: 100%;
}
            }
        </style>
        
    </body>
</html>