<?php 
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Description</title>

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
                                    <h4 class="title">Home  About Description <small class="ml-10">About Description</small></h4>
                                    <p class="sub-title">About Description</p>
                                </div>
                                <!-- /.col-md-6 -->
                                  </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">About Description</li>
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
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <h3 class="box-title"> About Description</h3>
							</div>
							
							</div>
</div>                                  
								  <div class="col-md-12" style="min-height: 900px;">
                                               <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>About Description</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                 <form class="col-md-10 col-md-offset-1" method="post" enctype="multipart/form-data">
												 <?php
$q="select * from   about_des";
$query=mysql_query($q);
$read=mysql_fetch_array($query);


?>
                                    <div class="form-group">
									<div class="col-lg-12">
					 
                       <div class="col-lg-12">
					 
                       <center><label for="text1" class="control-label col-lg-2">Previous </label> <img style="width:75px; height:75px;" class="media-object img-thumbnail user-img" alt="User Picture" src="images/<?php echo $read['image']; ?>"/>
                    </div>
                    </div>
                                   <br>
								   <h4><i class="fa fa-link"></i> Image Upload</h4>
                                  
                                        <div class="fallback">
                                            <input name="img" type="file"  /> </div>
                                  
									</br>
                                    
									<div class="form-group left-icon">
                                                		<label for="name2">Title  Of About Description</label>
                                                        <span class="fa fa-pencil form-left-icon"></span>
                                                		<input type="text" value="<?php echo $read['title']; ?>" name="title" class="form-control" id="name2" placeholder="Title Of About Description">
                                                	</div>
									<div class="form-group">
                                                		<label for="name2">Description Of About</label>
                                                        <textarea type="text" name="description" class="form-control" id="home_des" placeholder="Description Of About"><?php echo $read['description']; ?></textarea>
                                                	</div>				

                                                
                                                	
                                                
                                    <hr>
                                     <input type="submit" value="update" name="update" class="btn btn-danger">
                                   
                                </div>
								</form>
                                                	
<?php 
if(isset($_POST["update"]))
{
	$img_name=$_FILES["img"]["name"];
						$img_loc=$_FILES["img"]["tmp_name"];
					    move_uploaded_file($img_loc,"images/".$img_name);
								if($img_name=="")
					 {
						 $new_img=$read["image"];
					 }
					 else{
						 $new_img=$img_name;
					 }	
				$title=$_POST['title'];
$description=$_POST['description'];				
		$query1="update   about_des set image='$new_img',title='$title',description='$description'";
	$exe=mysql_query($query1);
	if($exe>0)
	{
	echo "<script>alert('Record updated Successfully')</script>";
	echo "<script>window.location.href='dashboard.php'</script>";
	
	}
	else{
		
	echo "<script>alert('Record  not updated Successfully')</script>";
		
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
CKEDITOR.replace('home_des');

</script>
        

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
