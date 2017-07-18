<?php
include('config.php');
date_default_timezone_set('Europe/Dublin');
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Nci tutors</title>

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
<style>
.map-image-mng{
height:400px;
width:100%;


}

</style>
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
                        <h2 class="title">FORGET PASSWORD</h2>
                    </div><!-- /.page-title-heading -->
                    <div class="breadcrumbs">
                        <ul>
                           <!-- <li><a href="../index.php">Home</a></li>
                            <li>contact</li>-->
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /page-title parallax -->
	
      <section class="flat-row contact-page pad-top-134">
            <div class="container">
                <div class="row">
				<?php
														

									$q="select * from  contact";
									
									$exe=mysql_query($q);
									
									$read=mysql_fetch_array($exe);
																			
										
										?> 
                   <!-- <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">                                    
                                   <img src="images/icon/c1.png" alt="image">
                                </div> 
                                <div class="details">
                                    <h5>Our Location</h5>
                                    <p><?php echo $read['descr_address']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>-->

                    <!--<div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">
                                    <img src="images/icon/c2.png" alt="image">
                                </div>-->
                                <!--<div class="details">
                                    <h5>Contact us Anytime</h5>
                                    <p>Mobile: <?php echo $read['mobile_no']; ?> </p>
                                    <p>Fax: <?php echo $read['fax']; ?></p>
                                </div>-->
                            </div>
                        </div>
                    </div>

                   <!-- <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">
                                    <img src="images/icon/c3.png" alt="image">
                                </div>
                                <div class="details">
                                    <h5>Write Some Words</h5>
                                    <p><?php echo $read['write_some_words']; ?></p>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->

                <div class="row">
                    <div class="flat-spacer d74px"></div>
                </div>
<center>
                <div id="respond" class="comment-respond contact style2">
                    <h1 class="title comment-title">Enter Your Register Email Address</h1>
                    
<form  class="flat-contact-form style2 bg-dark height-small" method="post" >
                        <div class="field clearfix">      
                            <div class="wrap-type-input">                    
                               
                                <div class="input-wrap email">
                                    <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email" required>
                                </div>
                                  
                            </div>
                           
                        </div>
                        <div class="submit-wrap">
                            <input type="submit" name="submit" value="submit" class="flat-button bg-orange">
                        </div>
                    </form></center><!-- /.comment-form --> 
 <?php               	
                                  if(isset($_POST["submit"]))
								  {
						
						
						
						
			            $email=$_POST["email"];
						
						
												 $query1="insert into enquiry set email='$email',time='$enter_time',date='$enter_date'";
												$query_exe=mysql_query($query1);
												 if($query_exe>0)
												 {
													 echo "<script>alert('Message Send Sucessfully')</script>";
													 echo "<script>window.location.href='login.php'</script>";
	
												 }
												 
												 else
												 {
													  echo "<script>alert('Message not Send Sucessfully')</script>";
												 }
												 
												 
											}
                                           ?>                    
                </div><!-- /#respond -->
            </div><!-- /.container -->   
        </section>

        <!-- Map -->
        <section class="row-map">
            <div class="container-fluid">
                <!--<div class="row">
				
                    <div  style="width: 100%; height: 400px; "><img class="map-image-mng" src="images/map.png"></div> 
                </div>-->
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