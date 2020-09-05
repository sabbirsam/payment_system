<?php
include("php/dbconnect.php");
include("php/checklogin.php");


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dhaka Bank Payment System</title>

    

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>
<?php
include("php/header.php");
?>


		
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h2 style="text-align:center; color:#8F8F2C;"> Welcome to <strong style="text-align:center; color:#FF2F71;">Payment Module</strong> </h2>
                        <br>
                        <br>
                        <br>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
				
				  <div class="col-md-2">
                        <div class="main-box mb-pink">
                            <a href="student.php">
                                <i class="fa fa-graduation-cap fa-5x"></i>
                                <h5>Students</h5>
                            </a>
                        </div>
                    </div>
				
				
                   
					
                    <div class="col-md-2">
                        <div class="main-box mb-dull">
                            <a href="fees.php">
                                <i class="fa fa-usd fa-5x"></i>
                                <h5>Take Fees</h5>
                            </a>
                        </div>
                    </div>
					
					
					 <div class="col-md-2">
                        <div class="main-box mb-red">
                            <a href="report.php">
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Report</h5>
                            </a>
                        </div>
                    </div>
                  
                    <div class="col-md-2">
                        <div class="main-box mb-pink">
                            <a href="setting.php">
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Change Password</h5>
                            </a>
                        </div>
                    </div>
                    	   <!-- fa-5x is icon size and mb-dull is color -->
					 <div class="col-md-2">
                        <div class="main-box mb-dull">
                            <a href="branch.php">
                                <i class="fa fa-university fa-5x"></i>      
                                <h5>All-Branch</h5>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="main-box mb-red">
                            <a href="about_us.php">
                                <i class="fa fa-users fa-5x"></i>
                                <h5>About us</h5>
                            </a>
                        </div>
                    </div>

                    <!-- <div class="col-md-12">
                        <div class="main-box mb-red">
                            <a href="logout.php">
                                <i class="fa fa-power-off fa-5x"></i>
                                <h5>Log-Out</h5>
                            </a>
                        </div>
                    </div> -->


                </div>
                <!-- /. ROW  -->

            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
      
       Dhaka Bank Payment System | Brought To You By : <a href="https://sabbirsam.github.io/sabbir/sam/index.html/" target="_blank">Sabbir & Susmita</a>
    </div>
   
   <script src="js/jquery-1.10.2.js"></script>	
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>
    


</body>
</html>







<!-- here -->


