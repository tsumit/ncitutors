<?php
include('config.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Booking Detail By Student</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
		 <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
       <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
<script src="js/DataTables/datatables.min.js"></script>
        <!-- ========== MODERNIZR ========== -->
        <script src="js/modernizr/modernizr.min.js"></script>
		<style>
		.list-item-manage{
			background-color:blue;
			color:black;
		}
		.list-item-secnd-manage{
		background-color:red;
		color:white;	
			
		}
		.box{
			background-color:white;
		
			padding-top:20px;
			padding-bottom:36px;
			padding-left:40px;
			padding-right:40px;
			margin-bottom:10px;
			margin-top:-27px;
			
		}
		.adjust{
			
			margin-top:20px;
		}
		#table-wrapper {
  position:relative;
}
#table-scroll {
  height:auto;
  overflow:auto;  
  margin-top:20px;
}
#table-wrapper table {
  width:100%;

}


		
		</style>
		<script>
function del()
{
	var c=confirm('Are You Sure To Delete This?');
	if(c==true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
                     <?php include('header.php');?>
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                    <?php include('left.php');?>
            
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h4 class="title">Booking Detail By Student <small class="ml-10">Home Booking Detail By Student</small></h4>
                                    <p class="sub-title">Booking Detail By Student</p>
                                </div>
                                <!-- /.col-md-6 -->

                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">Booking Detail By Student</li>
            						</ul>
                                </div>
                                <!-- /.col-md-6 -->
                                
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
								<div class="box">
								 <div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title">Complete Detail Of Booking Detail By Student</h3>
							</div>
							
							</div>
</div>                                  
								  <div class="col-md-12" style="min-height: 900px;padding:0px;">
                                         <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Booking Details By Students</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
<div id="table-wrapper">
<div id="table-scroll">
                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.No</th>
															<th>Teacher Name</th>
															<th>Department</th>
                                                            <th>Student Name</th>
                                                            <th>Roll No.</th>
															<th>Email</th>
															<th>Contact No.</th>
															<th>Course</th>
															<th>Slot</th>
															<th>Date</th>
															<th>Amount(&euro;)</th>
                                                                                                                        <th>Credit Username</th>
<th>Card No</th>
<th>Exp-Month</th>
<th>Exp-year</th>
															
															
															<th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>S.No</th>
															<th>Teacher Name</th>
															<th>Department</th>
                                                            <th>Student Name</th>
                                                            <th>Roll No.</th>
															<th>Email</th>
															<th>Contact No.</th>
															<th>Course</th>
															<th>Slot</th>
															<th>Date</th>
															<th>Amount(&euro;)</th>
<th>Credit Username</th>
<th>Card No</th>
<th>Exp-Month</th>
<th>Exp-year</th>
															
															<th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <?php
														

									$q="select * from booking";
									
									$exe=mysql_query($q);
									$c=1;
									while($read=mysql_fetch_array($exe))
									{
										
										
										?> 
                                                        
                                                      
                                                        
                                                        <tr>
                                                            <td><?php echo $c;?></td>
															<td><?php echo $read["teacher_name"];?></td>
															<td><?php echo $read["department"];?></td>
															<td><?php echo $read["student_name"];?></td>
                                                            
                                                            <td><?php echo $read["roll_no"];?></td>
											                <td><?php echo $read["email"];?></td>
															<td><?php echo $read["contact_no"];?></td>
															<td><?php echo $read["course"];?></td>
                                                            <td><?php echo $read["slot"];?></td>
															<td><?php echo $read["booking_date"];?></td>
												<td><?php echo $read["amount"];?></td>
												<td><?php echo $read["credit_name"];?></td>
												<td><?php echo $read["card_no"];?></td>
												<td><?php echo $read["exp_month"];?></td>
												<td><?php echo $read["exp_year"];?></td>
															
															
															<td>
															<ul class="list-inline list-bg">
											
											<li class="list-item-secnd-manage">
											<a href="booking_delete.php?x=<?php echo $read["id"];?>" onclick="return del()" title="Delete"><i class="fa fa-trash"></i></a>
											</li>
											</ul>	
															</td>
                                                        </tr>
														
														
                                                       <?php $c++;} ?>
                                                    </tbody>
                                                </table>
                                          </div>
                                        </div>
										<br>
                                             <center>                 
 <a href="mng_teacher.php" class="btn btn-danger">Back</a>
                            </center>
                                            </div>
                                        </div>
                                 
                                    <!-- /.col-md-6 -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>


                    </div>
                    <!-- /.main-page -->

                   
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

<script src="js/DataTables/datatables.min.js"></script>
 
        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
		<script>
            $(function($) {
                $('#example').DataTable();

                
            });
        </script>
        

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
