<?php
include('config.php');

date_default_timezone_set('Europe/Dublin');


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Set Free Time Slot Add</title>

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
		</style>
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
                                    <h4 class="title">Set Free Time Slot Add<small class="ml-10">Home Set Free Time Slot Add</small></h4>
                                    <p class="sub-title">Set Free Time Slot Add</p>
                                </div>
                                <!-- /.col-md-6 -->

                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">Set Free Time Slot Add</li>
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
								     
								  <div class="col-md-12" style="min-height: 900px;">
                                         <div class="col-md-8 col-md-offset-2">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Set Free Time Slot Add</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body ">

                                                 <form class="col-md-12" method="post" enctype="multipart/form-data">
                                    
			
                                    <div class="form-group left-icon">
                                                		<label for="name2">Date</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<select required type="text" name="date" class="form-control" id="name2" placeholder="date">
														<option>Select Date For Time Slot </option>
														<option><?php 
														 $startDate = date('Y-m-d');
														
														$teacher_id=$_SESSION["teacher_id2"];

	                                $query="select * from  time_add where teacher_id='$teacher_id' and date='$startDate' ";
									$exe_query=mysql_query($query);
									
									$read=mysql_fetch_array($exe_query);
									if($read<=0)
									{
										
									echo $startDate = date('Y-m-d');	
										
									}
                                                        
														?></option>
														<option><?php 
														
                                    $teacher_id=$_SESSION["teacher_id2"];
$date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
 $prev_date = date('Y-m-d', strtotime($date .' +1 day'));
	                                $query1="select * from  time_add where teacher_id='$teacher_id' and date='$prev_date' ";
									$exe_query1=mysql_query($query1);
									$read1=mysql_fetch_array($exe_query1);
									if($read1<=0)
									{
									$date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
echo  $prev_date = date('Y-m-d', strtotime($date .' +1 day'));
									}
                                                        


?></option>
														</select>
														</div>
					<center>
	<input type="checkbox" name="1200_2am" value="12:00 TO 2 AM"> <span>12:00 TO 2 AM</span><br>
<input type="checkbox" name="2am_4am" value="2 AM TO 4 AM"> <span>2 AM TO 4 AM</span><br>
<input type="checkbox" name="4am_6am" value="4 AM TO 6 AM"> <span>4 AM TO 6 AM</span><br>
<input type="checkbox" name="6am_8am" value="6 AM TO 8 AM"> <span>6 AM TO 8 AM</span><br>
<input type="checkbox" name="8am_10am" value="8 AM TO 10 AM"> <span>8 AM TO 10 AM</span><br>
<input type="checkbox" name="10am_1200" value="10 AM TO 12:00"> <span>10 AM TO 12:00</span><br>
<input type="checkbox" name="1200_2pm" value="12:00 TO 2 PM"> <span>12:00 TO 2 PM</span><br>
<input type="checkbox" name="2pm_4pm" value="2 PM TO 4 PM"> <span>2 PM TO 4 PM</span><br>
<input type="checkbox" name="4pm_6pm" value="4 PM TO 6 PM"> <span>4 PM TO 6 PM</span><br>
<input type="checkbox" name="6pm_8pm" value="6 PM TO 8 PM"> <span>6 PM TO 8 PM</span><br>
<input type="checkbox" name="8pm_10pm" value="8 PM TO 10 PM"> <span>8 PM TO 10 PM</span><br>
<input type="checkbox" name="10pm_1200" value="10 PM TO 12:00"> <span>10 PM TO 12:00</span><br>
</center>
											          
													
												
                                    <hr>
									
                                     <input type="submit" value="submit" name="submit" class="btn btn-danger">
                                   <a href="time.php" class="btn btn-danger">Back</a>
                             
                               
								</form>
                                 <?php               	
                                  if(isset($_POST["submit"]))
											{
						$name=$_SESSION["name2"];
$teacher_id=$_SESSION["teacher_id2"];

												 
						$enter_time=date("h:i:s A");
						$date=$_POST["date"];
						$t1200_2am=$_POST["1200_2am"];
			            $t2am_4am=$_POST["2am_4am"];
						$t4am_6am=$_POST["4am_6am"];						
						$t6am_8am=$_POST["6am_8am"];
						$t8am_10am=$_POST["8am_10am"];
						$t10am_1200=$_POST["10am_1200"];
						$t1200_2pm=$_POST["1200_2pm"];
						$t2pm_4pm=$_POST["2pm_4pm"];
						$t4pm_6pm=$_POST["4pm_6pm"];
						$t6pm_8pm=$_POST["6pm_8pm"];
						$t8pm_10pm=$_POST["8pm_10pm"];
						$t10pm_1200=$_POST["10pm_1200"];
												 $query="insert into time_add set teacher_name='$name',teacher_id='$teacher_id',time='$enter_time',date='$date',1200_2am='$t1200_2am',2am_4am='$t2am_4am',4am_6am='$t4am_6am',6am_8am='$t6am_8am',8am_10am='$t8am_10am',10am_1200='$t10am_1200',1200_2pm='$t1200_2pm',2pm_4pm='$t2pm_4pm',4pm_6pm='$t4pm_6pm',6pm_8pm='$t6pm_8pm',8pm_10pm='$t8pm_10pm',10pm_1200='$t10pm_1200'";
												$query_exe=mysql_query($query);
												 if($query_exe>0)
												 {
													 echo "<script>alert('Data Save Sucessfully')</script>";
													 echo "<script>window.location.href='time.php'</script>";
	
												 }
												 
												 else
												 {
													  echo "<script>alert('Data Not Save Sucessfully')</script>";
												 }
												 
												 
											}
                                           ?>										   
                                                	              	
                                                	

                                                
                                                <!-- /.col-md-12 -->
                                            </div>
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

