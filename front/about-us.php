<?php
include('config.php');

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Nci Tutors</title>

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
	.about-img{
		height:500px;
	}
	
	</style>
</head> 
<body class="header-sticky">
    <div class="boxed">
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
		
		
		<?php include('header.php');?>
		
		
         <div class="page-title parallax parallax4"> 
        	<div class="overlay"></div>            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">ABOUT US</h2>
                        </div><!-- /.page-title-heading -->
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="../index.php">Home</a></li>
                                <li>About us</li>
                            </ul>                   
                        </div><!-- /.breadcrumbs --> 
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title parallax -->
    	
        <!-- About -->
            <section class="flat-row pad-top-100 flat-about">
                <div class="container">
                    <div class="row">
					<?php
														

									$q="select * from about_des";
									
									$exe=mysql_query($q);
									
									$read=mysql_fetch_array($exe);
																			
										
										?> 
                        <div class="col-md-6">
                                <div class="flat-title">
                                                <h1><?php echo $read['title']; ?><span></span></h1>
                                            </div><!-- /.flat-title -->
                                            <p><?php echo $read['description']; ?></p>
                                            
                                        </div><!-- /.text-tab --> 
							
										<div class="col-md-6">
                                        <div class="images-tab">
                                            <img class="about-img" src="admin/images/<?php echo $read['image']; ?>" alt="images">
                                        </div>
										</div>
                                    </div>  
                                        </div> 
                                        
                                     
            </section>

           <div class = " flat-row popular-course">
                <div class="container">
                    <div class="flat-title-section">
                        <h1 class="title">Our Teachers</h1>                
                    </div>

                    <div class="flat-course-grid button-right">
                      <?php
														

									$q="select * from teacher";
									
									$exe=mysql_query($q);
									$c=1;
									while($read=mysql_fetch_array($exe))
									{
										
										
										?> 
                        <div class="flat-course">
                            <div class="featured-post">             
                                <div class="overlay">
                                    <div class="link"></div>
                                </div>

                                <a href="courses-single.php?x=<?php echo $read["teacher_id"];?>"><img class="teac-img" src="teacher_admin/images/<?php echo $read['image']; ?>" alt="Course1"></a>
                            </div><!-- /.featured-post -->

                            <div class="course-content">
                                <h4><a href="courses-single.php?x=<?php echo $read["teacher_id"];?>"><?php echo $read['name']; ?> - <?php echo $read['department']; ?></a> </h4>

                                
                               <div class="price" style="font-size:10px;">&euro; <?php echo $read['price_per_slot']; ?></div>  

                                <p> <?php echo substr ($read["description"],0,90) ?></p>
 <center><a href="courses-single.php?x=<?php echo $read["teacher_id"];?>" class="btn btn-danger ">Details</a> </h4></center>
<br>
                                 <ul class="course-meta desc">
                                    <li>
                                        <h6><?php echo $read['joining_date']; ?></h6>
                                        <span>Joining Date</span>
                                    </li>

                                    <li>
                                        <h6><?php echo $read['Duration']; ?> Days</h6>
                                        <span>Duration</span>
                                    </li>

                                    <li>
                                        <h6><span class="course-time"><?php echo $read['class_slot']; ?></</span></h6>
                                        <span>Class slot</span>
                                    </li>
                                </ul> 
                            </div><!-- /.course-content -->
                        </div>
									<?php $c++; } ?>
                   <!--     <div class="flat-course">
                            <div class="featured-post">             
                                <div class="overlay">
                                    <div class="link"></div>
                                </div>

                           </div>

                            <div class="course-content">
                                 <ul class="course-meta desc">
                                    <li>
                                        <span>Joining Date</span>
                                    </li>

                                    <li>
                                        <h6>25 Months</h6>
                                        <span>Duration</span>
                                    </li>

                                    <li>
                                        <h6><span class="course-time">2 Hours</span></h6>
                                        <span>Class slot</span>
                                    </li>
                                </ul> 
                            </div>
                        </div>

                        <div class="flat-course">
                            <div class="featured-post">             
                                <div class="overlay">
                                    <div class="link"></div>
                                </div>
                              </div>

                            <div class="course-content">
                                <h4><a href="courses-single.html">Corel - Fashion Deisgn</a> </h4>
                             

                                 <ul class="course-meta desc">
                                    <li>
                                        <h6>29/07/2016</h6>
                                        <span>Joining Date</span>
                                    </li>

                                    <li>
                                        <h6>25 Months</h6>
                                        <span>Duration</span>
                                    </li>

                                    <li>
                                        <h6><span class="course-time">2 Hours</span></h6>
                                        <span>Class slot</span>
                                    </li>
                                </ul> 
                            </div>-->
                        </div>
                    </div><!-- /.flat-course grid -->
                </div>
            </div>

<?php include('footer.php'); ?>
</div>
             <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script> 
    <script type="text/javascript" src="javascript/owl.carousel.js"></script> 
    <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="javascript/jquery-countTo.js"></script>    
    <script type="text/javascript" src="javascript/parallax.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    
    <script type="text/javascript" src="javascript/main.js"></script>
	
	<script type="text/javascript" src="javascript/jquery-validate.js"></script>     
   
</body>
</html>