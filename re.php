
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
	
	<link href="css/ui.css" rel="stylesheet" />
	<link href="css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" />	
	<link href="css/datepicker.css" rel="stylesheet" />	
	   <link href="css/datatable/datatable.css" rel="stylesheet" />
	   
    <script src="js/jquery-1.10.2.js"></script>	
    <script type='text/javascript' src='js/jquery/jquery-ui-1.10.1.custom.min.js'></script>
   <script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
 
		 <script src="js/dataTable/jquery.dataTables.min.js"></script>
		
</head>

<body>





</style>
		
		<div class="panel panel-default">
                        <div class="panel-heading">
                        <button type="button" class="btn btn-signup pull-right"><a href="bill_info_student.php" >Individual </a> </button>
                        <button type="button" class="btn btn-signup pull-right"><a href="login.php" >logout </a> </button>
                            Those Student Have Payment Due  
                        </div>
                        <div class="panel-body">
                            <div class="table-sorting table-responsive" id="subjectresult">
                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                <button type="button" class="btn btn-signup pull-right"><a href="bill_info_student.php" >search </a> </button> <br>
                               
                                    <thead>
                                        <tr>
                                          
                                            <th>Name/Contact</th>                                            
                                            <th>Fees</th>
											<th>Balance</th>
											<th>Branch</th>
											<!-- <th>DOJ</th> -->
											<!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
								    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
	<!--   ---------------------------------------------- -->



    





<!-- bottom option start----------------------------------------- -->

<div class="row" style="margin-bottom:20px;">
<div class="col-md-12">
<fieldset class="scheduler-border" >
    <legend  class="scheduler-border">Payment :</legend>


<table border="2" style="width:40% float : left;" class="table table-striped table-bordered table-hover" id="tSortable22"> 

<tr>
    <th class="tg-0lax">Name</th>
    <th class="tg-0lax">About</th>
    <th class="tg-0lax">Fees</th>
    <th class="tg-0lax">Branch</th>
    <th class="tg-0lax">Contact</th>
</tr>

<?php
include("php/dbconnect.php");

error_reporting(0);

$query =  "select * from student "; 




// $sql = "select * from branch where delete_status='0' order by branch.branch asc";

$data =  mysqli_query($conn , $query);
$total =  mysqli_num_rows ($data);
// echo $total;


// echo $result['sname']." ".$result['about']." ".$result['fees']." ".$result['branch']." ".$result['contact'];

if ($total !=0)
{
    // $result =  mysqli_fetch_assoc ($data);

    while ($result = mysqli_fetch_assoc($data)){


        echo "<tr>
        <td>".$result['sname']."</td>
        <td>".$result['about']."</td>
        <td>".$result['fees']."</td>
        <td>".$result['branch']."</td>
        <td>".$result['contact']."</td>

        </tr>";
            
        
    }
   
       
}

?>




<!-- ----Bottom closed---------------s -->
















<!-- ------------------ -->

</table>


<div id="footer-sec">
   Dhaka Bank Payment System | Brought To You By : <a href="www.techsambd.com" target="_blank">Sabbir & Susmita</a>
                        <div class="main-box mb-red">
                            <a href="logout.php">
                                <i class="fa fa-power-off fa-5x"></i>
                                <h5>Log-Out</h5>
                            </a>
                        </div>
    
    
    </div>
   
  
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>



<!-- from her---------------------------------------------------------------------------------------e -->
    
<script type="text/javascript">
$(document).ready( function() {

/*
$('#doj').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: false,
        dateFormat: 'mm/yy',
        onClose: function(dateText, inst) { 
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
        }
    });
	
*/
	
/******************/	
	 $("#doj").datepicker({
         
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'mm/yy',
        onClose: function(dateText, inst) {
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).val($.datepicker.formatDate('MM yy', new Date(year, month, 1)));
        }
    });

    $("#doj").focus(function () {
        $(".ui-datepicker-calendar").hide();
        $("#ui-datepicker-div").position({
            my: "center top",
            at: "center bottom",
            of: $(this)
        });
    });

/*****************/
	
$('#student').autocomplete({
		      	source: function( request, response ) {
		      		$.ajax({
		      			url : 'ajx.php',
		      			dataType: "json",
						data: {
						   name_startsWith: request.term,
						   type: 'studentname'
						},
						 success: function( data ) {
						 
							 response( $.map( data, function( item ) {
							
								return {
									label: item,
									value: item
								}
							}));
						}
						
						
						
		      		});
		      	}
				/*,
		      	autoFocus: true,
		      	minLength: 0,
                 select: function( event, ui ) {
						  var abc = ui.item.label.split("-");
						  //alert(abc[0]);
						   $("#student").val(abc[0]);
						   return false;

						  },
                 */
  

						  
		      });
	

$('#find').click(function () {
mydatatable();
        });


$('#clear').click(function () {

$('#searchform')[0].reset();
mydatatable();
        });
		
function mydatatable()
{
        
              $("#subjectresult").html('<table class="table table-striped table-bordered table-hover" id="tSortable22"><thead><tr><th>Name/Contact</th><th>Fees</th><th>Balance</th><th>Branch</th><th>DOJ</th><th>Action</th></tr></thead><tbody></tbody></table>');
			  
			    $("#tSortable22").dataTable({
							      'sPaginationType' : 'full_numbers',
							     "bLengthChange": false,
                  "bFilter": false,
                  "bInfo": false,
							       'bProcessing' : true,
							       'bServerSide': true,
							       'sAjaxSource': "datatable.php?"+$('#searchform').serialize()+"&type=feesearch",
							       'aoColumnDefs': [{
                                   'bSortable': false,
                                   'aTargets': [-1] /* 1st one, start by the right */
                                                }]
                                   });


}
		
////////////////////////////
 $("#tSortable22").dataTable({
			     
                  'sPaginationType' : 'full_numbers',
				  "bLengthChange": false,
                  "bFilter": false,
                  "bInfo": false,
                  
                  'bProcessing' : true,
				  'bServerSide': true,
                  'sAjaxSource': "datatable.php?type=feesearch",
				  
			      'aoColumnDefs': [{
                  'bSortable': false,
                  'aTargets': [-1] /* 1st one, start by the right */
              }]
            });

///////////////////////////		


	
});


function GetFeeForm(sid)
{

$.ajax({
            type: 'post',
            url: 'getfeeform.php',
            data: {student:sid,req:'1'},
            success: function (data) {
              $('#formcontent').html(data);
			  $("#myModal").modal({backdrop: "static"});
            }
          });


}

</script>


		


</body>
</html>  