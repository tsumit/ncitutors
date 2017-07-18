<?php
include('config.php');

date_default_timezone_set('Europe/Dublin');

$id=$_GET["x"];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Teacher Detail</title>

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
                                    <h4 class="title">Edit Teacher Detail<small class="ml-10">Home Edit Teacher Detail</small></h4>
                                    <p class="sub-title">Edit Teacher Detail</p>
                                </div>
                                <!-- /.col-md-6 -->

                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">Edit Teacher Detail</li>
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
                                         <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Edit Teacher Detail</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                 <form class="col-md-12" method="post" enctype="multipart/form-data">
												 <?php
                                    

$query="select * from teacher where id='$id'";
$exe=mysql_query($query);
$read=mysql_fetch_array($exe);
	?>
                                    <div class="row">
<div class="col-md-6">
                                                 
									<div class="form-group left-icon">
                                                		<label for="name2">Name</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required type="text" name="name" value="<?php  echo $read['name']; ?>" class="form-control" id="name2" placeholder="Name">
                                                	</div>
												
                                     <div class="form-group left-icon">
                                                		<label for="name2">Department</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<select required type="text" name="department"   class="form-control" id="" placeholder="">
												 
	                                             <option value="<?php  echo $read['department']; ?>"><?php  echo $read['department']; ?></option>  
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
                                                		<input required type="text" name="phn_no" value="<?php  echo $read['phn_no']; ?>" class="form-control" id="name2" placeholder="Phone Number">
                                                	</div>
									<div class="form-group left-icon">
                                                		<label for="name2">Email</label>
                                                        <span class="fa fa-envelope form-left-icon"></span>
                                                		<input required type="email" name="email" value="<?php  echo $read['email']; ?>" class="form-control" id="name2" placeholder="Email">
                                                	</div>	
                                    <div class="form-group left-icon">
                                                		<label for="name2">Address</label>
                                                        <span class="fa fa-map-marker form-left-icon"></span>
                                                		<textarea required type="text" name="address" class="form-control" id="name2" placeholder="Address"><?php  echo $read['address']; ?></textarea>
                                                	</div>	
                                   <div class="form-group left-icon">
                                                		<label for="name2">Pin Code</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required type="text" name="pin_code" value="<?php  echo $read['pin_code']; ?>" class="form-control" id="name2" placeholder="Pin Code">
                                                	</div>
                                <div class="form-group left-icon">
                                                		<label for="name2">Joining Date</label>
                                                        <span class="fa fa-calendar form-left-icon"></span>
                                                		<input required  type="date"  name="joining_date" value="<?php  echo $read['joining_date']; ?>" class="form-control" id="name2" placeholder="Joining Date">
                                                	</div>
									<div class="form-group left-icon">
                                                		<label for="name2">Duration</label>
                                                        <span class="fa fa-clock-o form-left-icon"></span>
                                                		<input readOnly  type="text" name="Duration" value="<?php  echo $read['Duration']; ?>" class="form-control" id="name2" placeholder="Duration">
                                                	</div>
                                   <div class="form-group left-icon">
                                                		<label for="name2">Class Slot</label>
                                                        <span class="fa fa-clock-o form-left-icon"></span>
                                                		<input readOnly type="text" name="class_slot" value="<?php  echo $read['class_slot']; ?>" class="form-control" id="name2" placeholder="Class Slot">
                                                	</div>
													 <div class="form-group left-icon">
                                                		<label for="name2">Price Per Slot(&euro;)</label>
                                                        <span class="fa fa-money form-left-icon"></span>
                                                		<input required type="text" name="price_per_slot" value="<?php  echo $read['price_per_slot']; ?>" class="form-control" id="name2" placeholder="price">
                                                	</div>
             										  		
             									<div class="form-group">
                                                		<label for="name2">Description Of Teacher</label>
                                                        <textarea required type="text" id="home_des" name="teach_des" placeholder="Class Slot"><?php  echo $read['description']; ?></textarea>
                                                	</div> 				
										    													
                                        </div>

<div class="col-md-6">	
                           <div class="form-group">
						   <label for="name2">Teacher Image</label>
                                                        
                            <img style="width:200px; height:150px;" class="media-object img-thumbnail" src="../teacher_admin/images/<?php echo $read['image'];?>" />
							</div>
                             <div class="form-group left-icon">
                                                		<label for="name2">Rating</label>
														<br>
                                                        <input required type="radio" value="1 star"<?php  if($read["rating"]=="1 star"){echo "checked";}else{?>  <?php } ?> name="rating" ><img class="star-mng" src="images/1-star.png">
														<input required type="radio" value="2 star"<?php  if($read["rating"]=="2 star"){echo "checked";}else{?>  <?php } ?> name="rating" ><img class="star-mng" src="images/2-star.png">
														<input required type="radio" value="3 star"<?php  if($read["rating"]=="3 star"){echo "checked";}else{?>  <?php  } ?> name="rating" ><img class="star-mng" src="images/3-star.png">
														<input required type="radio" value="4 star"<?php  if($read["rating"]=="4 star"){ echo "checked";}else{?>  <?php } ?> name="rating" ><img class="star-mng" src="images/4-star.png">
														<input required type="radio" value="5 star"<?php  if($read["rating"]=="5 star"){echo "checked";}else{?>  <?php } ?> name="rating" ><img class="star-mng" src="images/5-star.png">
                                                	</div>     
<div class="form-group left-icon">
                                                		<label for="name2">Review</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<textarea required type="text" name="review" class="form-control" id="review_dsc" placeholder="Name"><?php echo $read["review"]; ?></textarea>
                                                	</div>													
                         <div class="form-group left-icon">
                                                		<label for="name2">Username</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required type="text" name="username" value="<?php  echo $read['username']; ?>" class="form-control" id="name2" placeholder="Username">
                                                	</div>
                                   <div class="form-group left-icon">
                                                		<label for="name2">Password</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required type="text" name="password" value="<?php  echo $read['password']; ?>" class="form-control" id="name2" placeholder="Password">
                                                	</div>														
                                        		

</div>							
                                    </div>

			
                                   
											
												
                                    <hr>
									<center>
                                     <input type="submit" value="Update" name="update" class="btn btn-danger">
                                   <a href="mng_teacher.php" class="btn btn-danger">Back</a>
                             </center>
                               
								</form>
                                                	
                                  <?php
                                            if(isset($_POST["update"]))
											{
												 
					                       $date1=date("y-m-d");
											  $enter_time=date("h:i:s A");
						
					                             $name=$_POST["name"];
												 $department=$_POST["department"];
												 $phn_no=$_POST["phn_no"];
												 $email=$_POST["email"];
												 $joining_date=$_POST["joining_date"];
												 $address=$_POST["address"];
												 $pin_code=$_POST["pin_code"];
												 $price_per_slot=$_POST["price_per_slot"];
												 
											     $teach_des=$_POST["teach_des"];
												 $username=$_POST["username"];
												 $password=$_POST["password"];
												 $rating=$_POST["rating"];
												 $review=$_POST["review"];
										$diff = (strtotime($date1)- strtotime($joining_date))/24/3600; 
	 
											  $query="update teacher set name='$name',department='$department',phn_no='$phn_no',email='$email',address='$address',pin_code='$pin_code',price_per_slot='$price_per_slot',description='$teach_des',username='$username',password='$password',Duration='$diff',joining_date='$joining_date',rating='$rating',review='$review' where id='$id'";
												  
												  $query_exe=mysql_query($query);
												 if($query_exe>0)
												 {
													 echo "<script>alert('Data update Sucessfully')</script>";
													 echo "<script>window.location.href='mng_teacher.php'</script>";
	
												 }
												 
												 else
												 {
													  echo "<script>alert('Data Not update Sucessfully')</script>";
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
CKEDITOR.replace('home_des');
CKEDITOR.replace('review_dsc');

</script>  

       
    </body>
</html>

