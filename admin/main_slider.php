<?php 
include('config.php');

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>slider</title>

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
                                    <h4 class="title">Slider <small class="ml-10">Home Slider</small></h4>
                                    <p class="sub-title">Slider</p>
                                </div>
                                 </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">slider</li>
            						</ul>
                                </div>
                                   </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
								<div class="box">
								 <div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h3 class="box-title">Complete Detail Of Slider</h3>
							</div>
							
							</div>
</div>                                  
								  <div class="col-md-12" style="min-height: 900px;">
                                         <div class="col-md-10 col-md-offset-1">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Slider</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                               <form class="col-md-10 col-md-offset-1" method="post" enctype="multipart/form-data">
<?php
$q="select * from slider";
$query=mysql_query($q);
$read=mysql_fetch_array($query);


?>
                                    <div class="form-group">
                                   <div class="col-lg-12">
					 
                       <center><label for="text1" class="control-label col-lg-2">Previous1 </label> <img style="width:400px; height:200px;" class="media-object img-thumbnail user-img" alt="User Picture" src="images/<?php echo $read['image1']; ?>"/>
                    </div>
                                    <h4><i class="fa fa-link"></i> Image1 Upload</h4>
                                    
                                        <div class="fallback">
                                            <input name="img1" type="file"  /> </div>
                                 
									<br>
									<div class="col-lg-12">
					 
                       <center><label for="text1" class="control-label col-lg-2">Previous2 </label> <img style="width:400px; height:200px;" class="media-object img-thumbnail user-img" alt="User Picture" src="images/<?php echo $read['image2']; ?>"/>
                    </div>
                                    <h4><i class="fa fa-link"></i> Image2 Upload</h4>
                                    
                                        <div class="fallback">
                                            <input name="img2" type="file"  /> </div>
                                 
									<br>
									<div class="col-lg-12">
					 
                       <center><label for="text1" class="control-label col-lg-2">Previous3 </label> <img style="width:400px; height:200px;" class="media-object img-thumbnail user-img" alt="User Picture" src="images/<?php echo $read['image3']; ?>"/>
                    </div>
                                    <h4><i class="fa fa-link"></i> Image3 Upload</h4>
                                    
                                        <div class="fallback">
                                            <input name="img3" type="file"  /> </div>
                                 
									<br>
									        	
                                                
                                                
                                    <hr>
									<center>
                                    <input type="submit" value="Update" name="submit" class="btn btn-primary">
                                
                                 
                                 </center>
								 </div>
								</form>
<?php 
if(isset($_POST["submit"]))
{
	$img_name1=$_FILES["img1"]["name"];
						$img_loc1=$_FILES["img1"]["tmp_name"];
					    move_uploaded_file($img_loc1,"images/".$img_name1);
								if($img_name1=="")
					 {
						 $new_img1=$read["image1"];
					 }
					 else{
						 $new_img1=$img_name1;
					 }	
	$img_name2=$_FILES["img2"]["name"];
						$img_loc2=$_FILES["img2"]["tmp_name"];
					    move_uploaded_file($img_loc2,"images/".$img_name2);
								if($img_name2=="")
					 {
						 $new_img2=$read["image2"];
					 }
					 else{
						 $new_img2=$img_name2;
					 }					 
	$img_name3=$_FILES["img3"]["name"];
						$img_loc3=$_FILES["img3"]["tmp_name"];
					    move_uploaded_file($img_loc3,"images/".$img_name3);
								if($img_name3=="")
					 {
						 $new_img3=$read["image3"];
					 }
					 else{
						 $new_img3=$img_name3;
					 }	
	$query1="update  slider set image1='$new_img1',image2='$new_img2',image3='$new_img3'";
	$exe=mysql_query($query1);
	if($exe>0)
	{
	echo "<script>alert('Record updated Successfully')</script>";
	}
	else{
		
	echo "<script>alert('Record  not updated Successfully')</script>";
		
	}
	
	
	
}



?>                                                	
                                                
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
        

    </body>
</html>
