<?php
include('config.php');
/*error_reporting(0);
session_start();*/

date_default_timezone_set('Europe/Dublin');


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Profile</title>

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
	<link rel="stylesheet" href="css/summernote/summernote.css" >

<link rel="stylesheet" href="plugins/bower_components/dropify/dist/css/dropify.min.css">

        <link rel="stylesheet" href="css/main.css" media="screen" >
<script src="js/DataTables/datatables.min.js"></script>
        <!-- ========== MODERNIZR ========== -->
		
        <script src="js/modernizr/modernizr.min.js"></script>
		<script src="ckeditor/ckeditor.js"></script>
    <script src="js/jquery2.0.3.min.js"></script>
		
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
		
			padding-top:0px;
			padding-bottom:17px;
			padding-left:40px;
			padding-right:40px;
			margin-bottom:10px;
			margin-top:-27px;
			
		}
.adjust{
			
			margin-top:20px;
		}
.fileinput.input-group {
    display: table;
}

.fileinput {
    margin-bottom: 9px;
    display: inline-block;
}
.fileinput.input-group > * {
    position: relative;
    z-index: 2;
}

.fileinput .form-control {
    padding-top: 7px;
    padding-bottom: 5px;
    display: inline-block;
    margin-bottom: 0px;
    vertical-align: middle;
    cursor: text;
}

.form-control .fileinput-filename {
    vertical-align: bottom;
}

.fileinput-filename {
    vertical-align: middle;
    display: inline-block;
    overflow: hidden;
}
.fileinput.input-group > .btn-file {
    z-index: 1;
}
.fileinput.input-group > * {
    position: relative;
    z-index: 2;
}

.fileinput .btn {
    vertical-align: middle;
}
.fileinput-exists .fileinput-new, .fileinput-new .fileinput-exists {
    display: none;
}
.btn-file > input {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    opacity: 0;
    filter: alpha(opacity=0);
    font-size: 23px;
    height: 100%;
    width: 100%;
    direction: ltr;
    cursor: pointer;
    border-radius: 0px;
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
                                <div class="col-md-12">
								<center>
                                    <h2 class="title"><b>My Profile</b> </h2>
									</center>
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
                                            
                                            <div class="panel-body">
											<form class="col-md-10 col-md-offset-1" method="post" enctype="multipart/form-data">
											<?php
                                    $teacher_id=$_SESSION["teacher_id2"];


$query="select * from teacher where teacher_id='$teacher_id'";
$exe=mysql_query($query);
$read=mysql_fetch_array($exe);
	?>
											<div class="row">
											
											<div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-md-offset-4 col-lg-offset-4">
				      <input type="file" id="input-file-now-custom-1" name="fi" class="dropify" data-default-file="images/<?php echo $dealer_img ?>"/>	
					  </div>
											
											
											
											</div>
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
                                                		<input readOnly type="date"  name="joining_date" value="<?php  echo $read['joining_date']; ?>" class="form-control" id="name2" placeholder="Joining Date">
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
             													
										    													
                                        </div>

<div class="col-md-6">	
                             <div class="form-group">
                                                		<label for="name2">Description Of Teacher</label>
                                                        <textarea required type="text" id="home_des" name="teach_des" placeholder="Class Slot"><?php  echo $read['description']; ?></textarea>
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
                                   <center>  <input type="submit" value="update" name="update" class="btn btn-danger">
                                   </center>
                               
								</form>
                                   <?php
                                            if(isset($_POST["update"]))
											{
												 $img_name=$_FILES["fi"]["name"];
												 $img_loc=$_FILES["fi"]["tmp_name"];
												 move_uploaded_file($img_loc,"images/".$img_name);
								if($img_name=="")
					 {
						 $new_img=$read["image"];
					 }
					 else{
						 $new_img=$img_name;
					 }	
					 $teacher_id=$_SESSION["teacher_id2"];
				  $joining_date=$_SESSION["joining_date2"];
                                             $date1=date("y-m-d");
											  $enter_time=date("h:i:s A");
						
					                             $name=$_POST["name"];
												 $department=$_POST["department"];
												 $phn_no=$_POST["phn_no"];
												 $email=$_POST["email"];
												 
												 $address=$_POST["address"];
												 $pin_code=$_POST["pin_code"];
												 $price_per_slot=$_POST["price_per_slot"];
												 
											     $teach_des=$_POST["teach_des"];
												 $username=$_POST["username"];
												 $password=$_POST["password"];
												 
										$diff = (strtotime($date1)- strtotime($joining_date))/24/3600; 
	 
											  $query="update teacher set image='$new_img',name='$name',department='$department',phn_no='$phn_no',email='$email',address='$address',pin_code='$pin_code',price_per_slot='$price_per_slot',description='$teach_des',username='$username',password='$password',Duration='$diff' where teacher_id='$teacher_id'";
												  
												  $query_exe=mysql_query($query);
												 if($query_exe>0)
												 {
													 echo "<script>alert('Data update Sucessfully')</script>";
													 echo "<script>window.location.href='dashboard.php'</script>";
	
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
		<script src="plugins/bower_components/dropify/dist/js/dropify.min.js"></script>

		<script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();
            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez'
                    , replace: 'Glissez-déposez un fichier ou cliquez pour remplacer'
                    , remove: 'Supprimer'
                    , error: 'Désolé, le fichier trop volumineux'
                }
            });
            // Used events
            var drEvent = $('#input-file-events').dropify();
            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });
            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });
            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                }
                else {
                    drDestroy.init();
                }
            })
        });
		</script>
<script>
CKEDITOR.replace('home_des');

</script>
        

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
