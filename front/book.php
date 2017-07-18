<?php
include('config.php');
date_default_timezone_set('Europe/Dublin');
$teach_id=$_GET["y"];
$teach_name=$_GET["z"];
$price=$_GET["l"];
$department=$_GET["m"];
$book_date=$_GET["n"];
$slot=$_GET["o"];
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>NCI Tutors</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
	
	<!-- Animation Style -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/animate.css"> -->

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head> 
<body class="header-sticky">
    <div class="windows8">
        <div class="preload-inner">
            <div class="wBall" id="wBall_1">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_2">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_3">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_4">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_5">
                <div class="wInnerBall"></div>
            </div>
        </div>
    </div>
	<?php include('header.php'); ?>
   <div class="page-title parallax parallax4"> 
    	<div class="overlay"></div>            
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h2 class="title"></h2>
                    </div><!-- /.page-title-heading -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li>Booking</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /page-title parallax -->
	
      <section class="flat-row contact-page pad-top-134">
            <div class="container">
                <div class="row">
                    <div class="flat-spacer"></div>
                   </div>

                <div id="respond" class="comment-respond contact style2">
                    <h1 class="title comment-title">Book Your Slot</h1>
                    <form  method="post">
					<div class="col-md-8 col-md-offset-2">
                    <div class="wrap-type-input">                    
                              
					<div class="form-group">
					       <label>Student Name</label>
                                <div class="input-wrap name">
                                    <input type="text" name="name"  placeholder="Name" id="name" required>
                                </div>
								</div>
								<div class="form-group">
								<label>Roll No.</label>
                            
                                <div class="input-wrap name">
                                    <input type="text" name="roll_no"  placeholder="Roll No."  id="roll_no" required>
                                </div>
								</div>
								<div class="form-group">
								<label>Email</label>
                            
                                <div class="input-wrap email">
                                    <input type="email" name="email"  placeholder="email"  id="email" required>
                                </div>
								</div>
								<div class="form-group">
                           <label>Contact Number</label>
                                <div class="input-wrap name">
                                    <input type="text" name="contact_no" maxlength="10"  placeholder="number" id="number" required>
                                </div>
								</div>
								<div class="form-group">
								<label>Course</label>
                            
                                <div class="input-wrap name">
                                    <select type="text" name="course"  placeholder="course"  id="course" required>
									<option value="">--Course--</option>
									<?php 
	$q="select * from  courses";
					$exe=mysql_query($q);
			
					while($re=mysql_fetch_array($exe))
					{
					
	?>   
	<option value="<?php echo $re['name']; ?>"><?php echo $re['name']; ?></option>
					<?php } ?>
	</select>
                                </div>
								</div>
								<div class="form-group">
								<label>Amount(&euro;)</label>
                            
                                <div class="input-wrap name">
                                    <input readOnly type="text" value="<?php echo $price?>" name="amount"  placeholder="amount" id="amount" readOnly>
                                </div>
								</div>
                                  </div>
                          <center>  
                        <div class="submit-wrap">
                            <input type="submit" name="submit" value="Submit and Pay" class="btn flat-button bg-orange">
                        </div></center>
						</div>
                    </form><!-- /.comment-form --> 


<?php
                                            if(isset($_POST["submit"]))
											{
												 
						
						$date=date("y-m-d");
						
						$enter_time=date("h:i:s A");
						
			                                     $name=$_POST["name"];
												 $roll_no=$_POST["roll_no"];
												 $email=$_POST["email"];
												 $contact_no=$_POST["contact_no"];
												 
												 $course=$_POST["course"];
												 
										$see="select * from booking order by id desc limit 1";
						$sere=mysql_query($see);
						$last_id_1=mysql_fetch_array($sere);
						$last_id_db_1=$last_id_1["id"]+1;
						$student_id_1="Student-".$last_id_db_1;		
					
		

											  $query1="insert into booking set teacher_id='$teach_id',teacher_name='$teach_name',student_name='$name',department='$department',roll_no='$roll_no',email='$email',contact_no='$contact_no',course='$course',amount='$price',date='$date',time='$enter_time',booking_date='$book_date',slot='$slot',student_id='$student_id_1'";
											 
												$query_exe1=mysql_query($query1);
												 if($query_exe1>0)
												 {
													 echo "<script>alert('Data Save Sucessfully')</script>";
													 echo "<script>window.location.href='pay.php?x=$student_id_1'</script>";
	
												 }
												 
												 else
												 {
													  echo "<script>alert('Data Not Save Sucessfully')</script>";
												 }
												 
												 
											}
                                           ?>										   
                                                                  
                </div><!-- /#respond -->
            </div><!-- /.container -->   
        </section>

        

    <!-- Footer -->
   <?php include('footer.php'); ?>
        <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script> 
    <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="javascript/parallax.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="javascript/gmap3.min.js"></script> 
    <script type="text/javascript" src="javascript/jquery-validate.js"></script> 
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    
    <script type="text/javascript" src="javascript/main.js"></script>

</body>
</html>