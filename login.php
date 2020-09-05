<?php
include("php/dbconnect.php");

$error = '';
if(isset($_POST['login']))
{

$username =  mysqli_real_escape_string($conn,trim($_POST['username']));
$password =  mysqli_real_escape_string($conn,$_POST['password']);

if($username=='' || $password=='')
{
$error='All fields are required';
}

$sql = "select * from user where username='".$username."' and password = '".md5($password)."'";

$q = $conn->query($sql);
if($q->num_rows==1)
{
$res = $q->fetch_assoc();
$_SESSION['rainbow_username']=$res['username'];
$_SESSION['rainbow_uid']=$res['id'];
$_SESSION['rainbow_name']=$res['name'];
echo '<script type="text/javascript">window.location="index.php"; </script>';

}else
{
$error = 'Invalid Username or Password';
}

}

?>






<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dhaka Bank Payment System IUBAT University</title>

   

<!-- here  -->
 <!-- Owl-Carousel -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>

    <!-- Custom Style-->
    <link rel="stylesheet" href="./css/SStyle.css">


<!-- end -->


<style>
.pull-right a{

color:white;

}

</style> 







</head>
<body >
<div class="container">
        
<div class="panel">
            <div class="row">
                <div class="col liquid">
                <h4><i class="fas fa-drafting-compass"></i> Dhaka Bank Bangladesh...</h4>
                
           
                        
                    <!-- Owl-Carousel -->

                    <div class="owl-carousel owl-theme">
                                     <img src="./assets/undraw_authentication_fsn5.svg" alt="" class="login_img">
                                    
                                     <img src="./assets/dbs.png" alt="" class="login_img">
                                    <img src="./assets/undraw_authentication_fsn5.svg" alt="" class="login_img">
                                    <img src="./assets/undraw_personal_data_29co.svg" alt="" class="login_img">
                                    <img src="./assets/undraw_fingerprint_swrc.svg" alt="" class="login_img">
                    </div>

                                <!-- /Owl-Carousel -->

                                        <h3 class="myhead fas fa-drafting-compass ">Dhaka Bank Payment System IUBAT University</h3>


                                        <div class="follow">
                                    Follow us <i class="fab fa-facebook-f"></i>
                                    <i class="fab fa-twitter"></i>
                                </div>
                    </div>



                    <form role="form" action="login.php" method="post">
                                <hr />
                                        <?php
                                                if($error!='')
                                                {									
                                                echo '<h5 class="text-danger text-center">'.$error.'</h5>';
                                                }
                                        ?>
                                                




                        <form>

                        <div class="titles ">
                            <h6>Sabbir || Susmita</h6>
                            <h3>Student Billing System </h3>
                        </div>
                        <div class="form-group input-group">
                            <input type="text" placeholder="Email" class="form-input" name="username" required>
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="form-group input-group">
                            <input type="password" placeholder="Password" class="form-input" name="password" required>
                            <div class="input-icon">
                                <i class="fas fa-user-lock"></i>
                            </div>
                        </div>

                        <!-- <button type="submit" class="btn btn-login">Login</button> -->
                        <button class="btn btn-login" type= "submit" name="login">Login Now</button>
                        <button type="button" class="btn btn-signup pull-right"><a href="login_student.php" >Student Login </a> </button>
                        <!-- <button type="button" class="btn btn-signup pull-right" >Student Login</button> -->


                        <button type="button" class="btn btn-signup pull-right"><a href="bill_info_student.php" >Info </a> </button>
                        
                    </form>

        </div>


</div>
            
           


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                items: 1
            });
        });
    </script>
</body>
</html>





