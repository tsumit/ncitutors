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
        <title>Add New Teacher</title>

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
		<script src="ckeditor/ckeditor.js"></script>
   
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
		.star-mng{
			width:100%;
			height:40px;
			margin-top: -62px;
    margin-left: 14px;
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
                                    <h4 class="title">Add New Teacher<small class="ml-10">Home Add New Teacher</small></h4>
                                    <p class="sub-title">Add New Teacher</p>
                                </div>
                                <!-- /.col-md-6 -->

                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">Add New Teacher</li>
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
                                         <div class="col-md-10 col-md-offset-1">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Add New Teacher</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body ">

                                                 <form class="col-md-12" method="post" enctype="multipart/form-data">
                                    
			
                                    <div class="row">
<div class="col-md-6">
                                                 
									<div class="form-group left-icon">
                                                		<label for="name2">Name</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required type="text" name="name" class="form-control" id="name2" placeholder="Name">
                                                	</div>
									<div class="form-group left-icon">
                                                		<label for="name2">Department</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<select required type="text" name="department"   class="form-control" id="" placeholder="">
												 
	                                             <option value="">--Select--</option>  
<?php 
	$q="select * from  department";
					$exe=mysql_query($q);
			
					while($re=mysql_fetch_array($exe))
					{
					
	?>                                            												 
												<option value="<?php echo $re["name"];?>"><?php echo $re["name"];?></option>
												<?php } ?>
							                      </select>
					
                                                	</div>				
												
                                   
                                    <div class="form-group left-icon">
                                                		<label for="name2">Phone Number</label>
                                                        <span class="fa fa-phone form-left-icon"></span>
                                                		<input required type="text" name="phn_num" class="form-control" id="name2" placeholder="Phone Number">
                                                	</div>
													<div class="form-group left-icon">
                                                		<label for="name2">Joing Date</label>
                                                        <span class="fa fa-phone form-left-icon"></span>
                                                		<input required type="date" name="join_date" class="form-control" id="name2" placeholder="Phone Number">
                                                	</div>
									
                                    
                            <div class="form-group left-icon">
                                                		<label for="name2">Email</label>
                                                        <span class="fa fa-envelope form-left-icon"></span>
                                                		<input required type="email" name="email" class="form-control" id="name2" placeholder="Email">
                                                	</div>	 
                         
                           <div class="form-group left-icon">
                                                		<label for="name2">Rating</label>
														<br>
                                                        <input required type="radio" value="1 star" name="rating" ><img class="star-mng" src="images/1-star.png">
														<input required type="radio" value="2 star" name="rating" ><img class="star-mng" src="images/2-star.png">
														<input required type="radio" value="3 star" name="rating" ><img class="star-mng" src="images/3-star.png">
														<input required type="radio" value="4 star" name="rating" ><img class="star-mng" src="images/4-star.png">
														<input required type="radio" value="5 star" name="rating" ><img class="star-mng" src="images/5-star.png">
                                                	</div>        
                               
									 						
										    													
                                        </div>

<div class="col-md-6">
                           <div class="form-group left-icon">
                                                		<label for="name2">Address</label>
                                                        <span class="fa fa-map-marker form-left-icon"></span>
                                                		<textarea required name="address" type="text" class="form-control" id="name2" placeholder="Address"></textarea>
                                                	</div>		
                           <div class="form-group left-icon">
                                                		<label for="name2">Pin Code</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required name="pin_code" type="text" class="form-control" id="name2" placeholder="Pin Code">
                                                	</div>
                                   <div class="form-group left-icon">
                                                		<label for="name2">Review</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<textarea required type="text" name="review" class="form-control" id="review_dsc" placeholder="Name"></textarea>
                                                	</div>

</div>							
                                    </div>
								
 			          
													
												
                                    <hr>
									<center>
                                     <input type="submit" value="submit" name="submit" class="btn btn-danger">
                                   <a href="mng_teacher.php" class="btn btn-danger">Back</a>
                             </center>
                               
								</form>
                                    
                                 <?php
                                            if(isset($_POST["submit"]))
											{
												 
						
						$date=date("y-m-d");
						
						$enter_time=date("h:i:s A");
						
			          $name=$_POST["name"];
												 $department=$_POST["department"];
												 $phn_num=$_POST["phn_num"];
												 $join_date=$_POST["join_date"];
												 
												 $address=$_POST["address"];
												 $pin_code=$_POST["pin_code"];
												 $email=$_POST["email"];
												 $rating=$_POST["rating"];
												 $review=$_POST["review"];
												  $see="select * from teacher order by id desc limit 1";
						$sere=mysql_query($see);
						$last_id_1=mysql_fetch_array($sere);
						$last_id_db_1=$last_id_1["id"]+1;
						$register_car_id_1="Teacher-".$last_id_db_1;
					$diff = (strtotime($date)- strtotime($join_date))/24/3600; 
	 
		

											  $query="insert into teacher set image='default.png',teacher_id='$register_car_id_1',name='$name',department='$department',phn_no='$phn_num',address='$address',pin_code='$pin_code',email='$email',joining_date='$join_date',date='$date',time='$enter_time',username='$email',password='$phn_num',class_slot='2 Hours',Duration='$diff',rating='$rating',review='$review'";
											 
												$query_exe=mysql_query($query);
												 if($query_exe>0)
												 {
													 echo "<script>alert('Data Save Sucessfully')</script>";
													 echo "<script>window.location.href='mng_teacher.php'</script>";
	
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
		<script>
		CKEDITOR.replace('review_dsc');
		
		</script>
        

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>

