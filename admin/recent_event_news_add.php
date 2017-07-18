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
        <title>Recent Event/News Add</title>

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
		</style>
		<script src="ckeditor/ckeditor.js"></script>
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
                                    <h4 class="title">Add Recent Event/News <small class="ml-10">Home Recent Event/News Add</small></h4>
                                    <p class="sub-title">Recent Event/News Add</p>
                                </div>
                                <!-- /.col-md-6 -->
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">Recent Event/News Add</li>
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
                            <h3 class="box-title"> Add Complete Detail Of Recent Event/News</h3>
							</div>
							
							</div>
</div>                                  
								  <div class="col-md-12" style="min-height: 900px;">
                                               <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Recent Event/News Details</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                 <form class="col-md-10 col-md-offset-1" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                   
                                    <h4><i class="fa fa-link"></i> Image Upload</h4>
                                  
                                        <div class="fallback ropzone">
                                            <input  type="file" name="image" /> </div>
                                </div>
									</br>
									<div class="form-group left-icon">
                                                		<label for="name2">Title Of Recent Event/News</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required type="text" class="form-control" name="title" id="name2" placeholder="Title Of Recent Event/News">
                                                	</div>
													
                                                   
                                                	
													<label for="exampleInputEmail2">Description Of Course</label>
                                                     
													<!--<div id="summernote1">
                                                    </div>-->
													<textarea type="text"  name="description" class="form-control" id="des" placeholder="Description Of Course" required></textarea>
                                               <div class="form-group left-icon">
                                                		<label for="name2">Posted In</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required type="text" class="form-control" name="posted_in" id="name2" placeholder="Hobbies">
                                                	</div>
													<div class="form-group left-icon">
                                                		<label for="name2">Tags</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input required type="text" class="form-control" name="tags" id="name2" placeholder="educate">
                                                	</div>
                                               
                                                	
                                                
                                    <hr>
                                    <input type="submit" value="submit" name="submit" class="btn btn-primary">
                                   <a href="recent_event_news.php" class="btn btn-danger">Back</a>
                             
								</form>
                                           <?php
                                            if(isset($_POST["submit"]))
											{
												 $img_name=$_FILES["image"]["name"];
												 $img_loc=$_FILES["image"]["tmp_name"];
												 move_uploaded_file($img_loc,"images/".$img_name);
												 if($img_name=="")
					{
					$new_img="default.png";
					}
					else{
						$new_img=$img_name;
					}
						$title=$_POST['title'];
												
						$enter_time=date("h:i:s A");
						
			          
												 $posted_in=$_POST["posted_in"];
												 $tags=$_POST["tags"];
												 $description=$_POST["description"];
												  $query="insert into event_news set image='$new_img',title='$title',description='$description',posted_in='$posted_in',tags='$tags',time='$enter_time'";
												$query_exe=mysql_query($query);
												 if($query_exe>0)
												 {
													 echo "<script>alert('Data Save Sucessfully')</script>";
													 echo "<script>window.location.href='recent_event_news.php'</script>";
	
												 }
												 
												 else
												 {
													  echo "<script>alert('Data Not Save Sucessfully')</script>";
												 }
												 
												 
											}
                                           ?>										   
                                                	
                                                	

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
 <script src="js/summernote/summernote.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
		<script>
            $(function($) {
                $('#example').DataTable();

                
            });
        </script>
		<script>
            $(function($) {
                $('#summernote').summernote({
                    height: 300,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                                    // set focus to editable area after initializing summernote
                });

                
            });
        </script>

        <script>
		CKEDITOR.replace('des');
		</script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
