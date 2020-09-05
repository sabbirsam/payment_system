<?php
include("php/dbconnect.php");
// include("php/checklogin.php");

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">





    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Dhaka Bank Payment System</title>
  </head>
  <body>
			<div class="container">
			<br>
			<a class="btn btn-primary pull-right" href="login.php">Back</a>
			<a class="btn btn-primary pull-right" href="re.php">All info</a>
			<h1 class="text-center">Welcome To Dhaka Bank </h1>


			<!-- col-sm-4 -->
			<form action="" method="POST">
			
			<table class="table table-bordered">
				<tr>
					<td colspan="2" class="text-center"><label for="">Student Information</label></td>
					
				</tr>

				<tr>
					<td><label for="choose">Choose Semester</label></td>
					<td>
					
							<select class="form-control" name="choose" id="choose">
							<option value="">Select</option>
							<option value="">1st semester</option>
							<option value="">2nd Semester</option>
							<option value="">3rd Semester</option>
							<option value="">4th Semester</option>
							<option value="">5th Semester</option>
							<option value="">6th Semester</option>
							<option value="">7th Semester</option>
							<option value="">8th Semester</option>
							<option value="">9th Semester</option>
							<option value="">10th Semester</option>
							<option value="">11th Semester</option>
							<option value="">12th Semester</option>
						
					
							</select>
					</td>
				</tr>
				<tr>
					<td><label for="sem">Semester</label></td>
					<td>
					
							<select class="form-control" name="sem" id="sem">
							<option value="">Select</option>
							<option value="">Spring</option>
							<option value="">Summer</option>
							<option value="">Fall</option>
						
						
					
							</select>
					</td>
				</tr>

				<tr>
					<td><label for="id">ID</label></td>
					<td><input  class="form-control" type="text" name="id" placeholder="Enter your Name "  require/></td>
				</tr>
				

				<tr>
					<td><label for="sname">User Name</label></td>
					<td><input  class="form-control" type="text" name="sname" placeholder="Enter your User Name "  require/></td>
				</tr>
				

				<tr>
					<td colspan="2" class="text-right"><input type="submit" value="Show info" name="show_info" /></td>
					
				</tr>
				
				
			</table>
			
			</form>

			<br>
			<br>
			<br>

			<!-- here start -->
			
</style>
		
		
	<!--   ---------------------------------------------- -->


			<!-- here  -->

			<?php 
			require_once'./php/dbconnect.php';
			// require_once'php/dbconnect.php';
			
			if(isset($_POST['show_info'])){

				// print_r($_POST);  
				
				$row=$_POST;
				
				// $choose=$_POST['choose'];
				// $id=$_POST['id'];
				// $sname=$_POST['sname'];
				

				// $result= mysql_query($link , "SELECT * FROM `student` WHERE `id`='$id'");
				// // print_r($result);
				?>



<div class="panel panel-default">
                        <div class="panel-heading">
                           <h3>	<?=$row['sname']?> - Payment Due information  </h3> 
                        </div>
                        <div class="panel-body">
                            <div class="table-sorting table-responsive" id="subjectresult">
                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                          
                                            <th>Name/Contact</th>                                            
                                            <th>ID</th>                                            
                                            <th>Fees</th>
											<th>Balance</th>
											<th>Branch</th>
											<!-- <th>DOJ</th> -->
											<!-- <th>Action</th> -->
                                        </tr>
										<tr>
											<td>
										<?=$row['sname']?>
											</td>
											<td>
										<?=$row['id']?>
											</td>
											<td>
											12580
											</td>

											<td>
											 2780
											</td>

											<td>
											Dhaka Bank -Kamarpara
											</td>
											
										</tr>

                                    </thead>
                                    <tbody>
								    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
					<br>
			<br>
			<br>
			<br>
			<br>
			<br>

											<!-- <div class="row">
												<div class="col-sm-8 col-sm-offset-2">
													<table class="table table-bordered">
														<tr>
															<td>
																Name
															</td>
															<td>
																Fee
															</td>

															<td>
																Balance
															</td>

															<td>
																Branch
															</td>

														</tr>

														<tr>
															<td>
															Md Zalish Mahmud
															</td>
															<td>
																	7000
															</td>

															<td>
															67550
															</td>

															<td>
															Dhaka Bank -Kamarpara
															</td>
															
														</tr>
													</table>
											
												</div>
											</div> -->


			<?php 
				

			}
			?>

		

			</div>

















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>