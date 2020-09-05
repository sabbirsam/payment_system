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
echo '<script type="text/javascript">window.location="re.php"; </script>';

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

    <!-- css link up  -->
    <link rel="stylesheet" href=".//css/style.css">
    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<style>
.myhead{
margin-top:0px;
margin-bottom:0px;
text-align:center;
color:white;
}

.login-pic img{
  width:540px;  
  
}
.pull-right a{
    color:white;
}
</style>

<!-- edit  -->
<!-- .panel-body{
background-color: #E2E2E2

} -->

<!-- edit  -->
</head>
<body >
    <div class="container">
        
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="login-pic">
                        <img src="./image/db.jpg" alt="">
                    </div>
                          
                            <div class="panel-body" 
                                        style="background-color:mediumpurple; 
                                                margin-top:3px; 
                                                border:solid 3px #0e0e0e; 
                                                box-shadow: 1px 1px 1px 1px;
                                                width:150%; 
                                                height:400px;
                                                
                                                
                                                ">
							  <h3 class="myhead">Dhaka Bank Payment System IUBAT University</h3>
                                <form role="form" action="login_student.php" method="post">
                                    <hr />
									<?php
									if($error!='')
									{									
									echo '<h5 class="text-danger text-center">'.$error.'</h5>';
									}
									?>
									
                                   
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Student Id " name="username" required />
                                        </div>
                                        
									<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Enter Password" name="password" required />
                                        </div>
										
                                    <div class="form-group">
                                           
                                            <span class="pull-right">
                                                   <a href="c_pass.php" >Forget password ? </a> 
                                            </span>
                                     </div>
                                     
                                     <button class="btn btn-primary" type= "submit" name="login">Login Now</button>


                                     
                                     <div class="form-group">
                                           
                                            <span class="pull-right">
                                                   <a href="login.php" >Back </a> 
                                            </span>
                                     </div>




                                    
                                   
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
