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
	.teac-img-mng{
		height:260px;
		
	}
	.sort-views a{

margin-top:69px;
}
.bold{
margin-top:22px;
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
                            <h2 class="title"></h2>
                        </div><!-- /.page-title-heading -->
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="../index.php">Home</a></li>
                                <li>Teachers List</li>
                            </ul>                   
                        </div><!-- /.breadcrumbs --> 
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title parallax -->
    	
        <section class="main-content blog-posts flat-row course-grid">
            <div class="container">
			<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<form method="get">
			<div class="col-md-8">
			<div class="input-wrap">
                                    <select type="text"   placeholder="Name" name="name"  required>
									<option value="">--Department--</option>
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
									</div>
									<div class="col-md-4">
                                <div class="input-wrap">
                                    <input type="submit" name="s" value="Search" class="btn btn-danger">
									</div>
                                </div>
			
			</form>
			<?php 
										if(isset($_GET["s"]))
						            { 
							
								$name=$_GET["name"];
					            
				echo	"<script>window.location.href='courses-grid1.php?nme=$name'</script>";
									}
										
										?>
			
			</div>
			</div><br>
                <div class="blog-title clearfix">
                    <h1 class="bold">ALL TEACHERS</h1>
                </div>
                <div class="row">
                    <div class="flat-post-ordering clearfix">
                        <div class="sort-views">
                           

                            
                            <div class="list-grid">
                                <a data-layout = "course-grid" class="course-grid-view active" href="#"><i class="fa fa-th mng-list" aria-hidden="true"></i></a>
                                <a data-layout = "course-list" class="course-list-view" href="#"><i class="fa fa-list mng-list" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="post-warp clearfix">
					<?php
														

									$q="select * from teacher";
									
									$exe=mysql_query($q);
									$c=1;
									while($read=mysql_fetch_array($exe))
									{
										
										
										?> 
                        <div class="flat-course flat-hover-zoom">
                            <div class="featured-post">             
                                <div class="overlay">
                                    <div class="link"></div>
                                </div>
                                <div class="entry-image">
                                    <a href="courses-single.php?x=<?php echo $read["teacher_id"];?>"><img class="teac-img-mng" src="teacher_admin/images/<?php echo $read['image']; ?>" alt="Teach-Image"></a>
                                </div>
                            </div>

                            <div class="course-content">
                                <h4><a href="courses-single.php?x=<?php echo $read["teacher_id"];?>"><?php echo $read['name']; ?> - <?php echo $read['department']; ?></a> </h4>

                                
                              

                                <p> <?php echo substr ($read["description"],0,90) ?></p>
								<br>
                                   <center><a href="courses-single.php?x=<?php echo $read["teacher_id"];?>" class="btn btn-danger ">Details</a> </h4></center>
<br>
    <div class="price" style="font-size: 12px;">&euro; <?php echo $read['price_per_slot']; ?></div>  

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
                                        <h6><span class="course-time"><?php echo $read['class_slot']; ?></span></h6>
                                        <span>Class slot</span>
                                    </li>
                                </ul> 
                                 </div>
                        </div>
									<?php $c++; } ?>
                 
      
                                    
                    </div><!-- / .post-wrap -->

                    
                </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /main-content -->

        <!-- Footer -->
		<?php include('footer.php'); ?>
        </div> <!-- /.boxed -->

        <!-- Javascript -->
   <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script> 
    <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="javascript/parallax.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    
    <script type="text/javascript" src="javascript/main.js"></script>
<script type="text/javascript" src="javascript/jquery-validate.js"></script>     
   
</body>
</html>