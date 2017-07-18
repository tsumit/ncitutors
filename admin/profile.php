<?php
include('config.php');



$query="select * from admin";
$exe=mysql_query($query);
$read=mysql_fetch_array($exe);
	
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
                                    
											<div class="row">
											
											<div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-md-offset-4 col-lg-offset-4">
				      <input type="file" id="input-file-now-custom-1" name="fi" class="dropify" data-default-file="images/<?php echo $dealer_img; ?>"/>	
					  </div>
											
											
											
											</div>
<div class="row">
<div class="col-md-6">
                                                 
									<div class="form-group left-icon">
                                                		<label for="name2">Name</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required type="text" name="name" value="<?php echo $read['name']; ?>" class="form-control" id="name2" placeholder="Name">
                                                	</div>
												
                                   
                                    <div class="form-group left-icon">
                                                		<label for="name2">Phone Number</label>
                                                        <span class="fa fa-phone form-left-icon"></span>
                                                		<input required type="text" name="phn_no" value="<?php echo $read['phone_no']; ?>" class="form-control" id="name2" placeholder="Phone Number">
                                                	</div>
									
                                    <div class="form-group left-icon">
                                                		<label for="name2">Address</label>
                                                        <span class="fa fa-map-marker form-left-icon"></span>
                                                		<textarea required type="text"  name="address" class="form-control" id="name2" placeholder="Address"><?php echo $read['address']; ?></textarea>
                                                	</div>	
                                   
                               
									 						
										    													
                                        </div>

<div class="col-md-6">	
<div class="form-group left-icon">
                                                		<label for="name2">Pin Code</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required type="text" name="pin_code" value="<?php echo $read['pin_code']; ?>" class="form-control" id="name2" placeholder="Pin Code">
                                                	</div>
                            <div class="form-group left-icon">
                                                		<label for="name2">Email</label>
                                                        <span class="fa fa-envelope form-left-icon"></span>
                                                		<input required type="email" name="email" value="<?php echo $read['email']; ?>" class="form-control" id="name2" placeholder="Email">
                                                	</div>	 
                         <div class="form-group left-icon">
                                                		<label for="name2">Username</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required type="text" name="username" value="<?php echo $read['username']; ?>" class="form-control" id="name2" placeholder="Username">
                                                	</div>
                                   <div class="form-group left-icon">
                                                		<label for="name2">Password</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required type="password" name="password" value="<?php echo $read['password']; ?>" class="form-control" id="name2" placeholder="Password">
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
					 $name=$_POST['name'];
												 $phn_no=$_POST["phn_no"];
												 $address=$_POST["address"];
												 $pin_code=$_POST["pin_code"];
												 $email=$_POST["email"];
												 $username=$_POST["username"];
												 $password=$_POST["password"];
												  $query1="update admin set image='$new_img',name='$name',phone_no='$phn_no',address='$address',pin_code='$pin_code',email='$email',username='$username',password='$password'";
												  $query_exe=mysql_query($query1);
												 if($query_exe>0)
												 {
													 echo "<script>alert('Data update Sucessfully')</script>";
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
