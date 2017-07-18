<?php
include('config.php');
date_default_timezone_set('Europe/Dublin');
$teach_id=$_GET["x"];
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Educate - Education HTML Templates</title>

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
	.mg-book{
		    margin-top: 0px;
	}
	
	.inline{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    
}

.inline li {
    float: left;
	
	padding:5px;
}
.mng-star{
	width:50%;
	height: 67px;
}
.review-box{
	height:auto;
	border:1px solid #e5e5ee;
	background-color:#fdfdfd;
	

}
.review-title
{
	margin-bottom: -11px;
    word-spacing: 1px;
    letter-spacing: -0.2px;
    margin-left: 16px;
    margin-top: 22px;
	}
.review-box p{
	margin-bottom: -11px;
    word-spacing: 1px;
    letter-spacing: -0.2px;
    margin-left: 16px;
    margin-top: 22px;
	
}
.review-box hr{
	width:95%;
	
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
                            <h2 class="title">Teacher Details</h2>
                        </div><!-- /.page-title-heading -->
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="../index.php">Home</a></li>
                                <li>Courses Details</li>
                            </ul>                   
                        </div><!-- /.breadcrumbs --> 
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title parallax -->
    	
        <section class="main-content blog-posts course-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
					<div class="row">
					 <div class="col-md-12">
                        <div class="blog-title-single">
						<?php
														

									$q="select * from teacher where teacher_id='$teach_id'";
									
									$exe=mysql_query($q);
					
								$read=mysql_fetch_array($exe);
									
										?> 
                            <h1 class="bold"><?php echo $read['name']; ?> - <?php echo $read['department']; ?></h1>
                            <ul class="course-meta review style2 clearfix">
                                <li class="author">
                                    <div class="thumb">
                                        <img src="teacher_admin/images/<?php echo $read['image']; ?>" alt="image">
                                    </div>

                                    <div class="text">
                                        <b><?php echo $read['name']; ?></b>
                                        <p>Teacher</p>
                                    </div>
                                </li>
                                <li class="categories">
                                    <b class="course-name"><?php echo $read['department']; ?></b>
                                    
                                </li>
                                

                                
                            </ul>

                             <div class="course-widget-price">
                                <h4 class="course-title">COURSE FEATURES</h4>
                                <ul>
                                    <li>
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <span>Joining Date</span>
                                        <span class="time"><?php echo $read['joining_date']; ?></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                        <span>Duration</span>
                                        <span class="time"><?php echo $read['Duration']; ?> Days</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-leanpub" aria-hidden="true"></i>
                                        <span>Class Slot</span>
                                        <span class="time"><?php echo $read['class_slot']; ?></span>
                                    </li>
                                    
                                    
                                    
                                </ul>
                                </div>
					
							
                            <div class="entry-content">
                                <h4 class="title-1 bold">ABOUT Teacher</h4>
                                <p>
                                    <?php echo $read['description']; ?>
                                </p> 

                                
								<div class="rating-mng">
                               <h5><b>Rating</b></h5>
							   <p><?php if($read['rating']=="1 star"){?> <img class="mng-star" src="admin/images/1-star.png"> 
							   <?php }else if($read['rating']=="2 star"){?> <img class="mng-star" src="admin/images/2-star.png"> 
							   <?php }else if($read['rating']=="3 star"){?> <img class="mng-star" src="admin/images/3-star.png">
							   <?php }else if($read['rating']=="4 star"){?> <img class="mng-star" src="admin/images/4-star.png">
							   <?php }else if($read['rating']=="5 star"){?> <img class="mng-star" src="admin/images/5-star.png">
							   <?php }else{ echo "No Rating"; } ?>
							   
							   </p>
                                </div>
								<br>
								<div class="review-box">
								<h5 class="review-title">Review</h5>
								<hr>
								<p>
								<?php echo $read['review']; ?>
								<p>
								
								</div>
								</div>
	</div>
	</div>
	</div>
	<div class="flat-spacer h8px"></div>
                                <ul class="curriculum">
                                        <li class="section">
                                            <h4 class="section-title">Free Time Schedule of <?php 
														 $startDate = date('Y-m-d');
														
														

	                                $query1="select * from  time_add where teacher_id='$teach_id' and date='$startDate' ";
									$exe_query1=mysql_query($query1);
									
									$read1=mysql_fetch_array($exe_query1);
								
									if($read1>0)
									{
										
									echo $startDate = date('Y-m-d');	
										
									}
                                                        
														?> <span class="lesson-preview"></span></h4>
                                            <hr>
                                            <div class="section-content">
                                                <div class="course-lesson">
												
												<div class="row">
												<div class="col-md-1">
												
                                                          </div>
												<ul class="inline">
												<li>
								<!-- id   -->
                                                        <span class="duration"><?php echo $read1['1200_2am']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['1200_2am']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["1200_2am"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
                                                   </li> 
												   <li>
								<!-- id   -->
                                                        <span class="duration"><?php echo $read1['2am_4am']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['2am_4am']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["2am_4am"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>
														
							<!-- id   -->
                                                        <span class="duration"><?php echo $read1['4am_6am']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['4am_6am']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["4am_6am"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>
                            <!-- id   -->
                                                        <span class="duration"><?php echo $read1['6am_8am']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['6am_8am']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["6am_8am"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
                                                   </li> 
												   <li>   
							<!-- id   -->
                                                        <span class="duration"><?php echo $read1['8am_10am']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['8am_10am']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["8am_10am"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>  
                            <!-- id   -->
                                                        <span class="duration"><?php echo $read1['10am_1200']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['10am_1200']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["10am_1200"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>  
                           <!-- id   -->
                                                        <span class="duration"><?php echo $read1['1200_2pm']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['1200_2pm']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["1200_2pm"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												  </li> 
												   <li>  
                            <!-- id   -->
                                                        <span class="duration"><?php echo $read1['2pm_4pm']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['2pm_4pm']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["2pm_4pm"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>  
                             <!-- id   -->
							 
                                                        <span class="duration"><?php echo $read1['4pm_6pm']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['4pm_6pm']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["4pm_6pm"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>  
                              <!-- id   -->
                                                        <span class="duration"><?php echo $read1['6pm_8pm']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['6pm_8pm']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["6pm_8pm"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>  
                              <!-- id   -->
                                                        <span class="duration"><?php echo $read1['8pm_10pm']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['8pm_10pm']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["8pm_10pm"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>  
                             <!-- id   -->
                                                        <span class="duration"><?php echo $read1['10pm_1200']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['10pm_1200']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["10pm_1200"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
													</li>
                                                      </ul>                         	
												
												<div class="col-md-1">
												
                                                          </div>
												
                                                  </div>  
												  </div>
												  </div>
                                        </li>

                                     <li class="section">
                                            <h4 class="section-title">Free Time Schedule of <?php 
														
                                  
$date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
 $prev_date = date('Y-m-d', strtotime($date .' +1 day'));
	                                $query1="select * from  time_add where teacher_id='$teach_id' and date='$prev_date' ";
									$exe_query1=mysql_query($query1);
									$read1=mysql_fetch_array($exe_query1);
									if($read1>0)
									{
									$date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
echo  $prev_date = date('Y-m-d', strtotime($date .' +1 day'));
									}
                                                        


?> <span class="lesson-preview"></span></h4>
											<hr>
                                            <div class="section-content">
                                                <div class="course-lesson">
												
												<div class="row">
												<div class="col-md-1">
												
                                                          </div>
												<ul class="inline">
												<li>
								<!-- id   -->
                                                        <span class="duration"><?php echo $read1['1200_2am']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['1200_2am']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["1200_2am"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
                                                   </li> 
												   <li>
								<!-- id   -->
                                                        <span class="duration"><?php echo $read1['2am_4am']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['2am_4am']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["2am_4am"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>
														
							<!-- id   -->
                                                        <span class="duration"><?php echo $read1['4am_6am']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['4am_6am']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["4am_6am"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>
                            <!-- id   -->
                                                        <span class="duration"><?php echo $read1['6am_8am']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['6am_8am']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["6am_8am"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
                                                   </li> 
												   <li>   
							<!-- id   -->
                                                        <span class="duration"><?php echo $read1['8am_10am']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['8am_10am']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["8am_10am"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>  
                            <!-- id   -->
                                                        <span class="duration"><?php echo $read1['10am_1200']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['10am_1200']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["10am_1200"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>  
                           <!-- id   -->
                                                        <span class="duration"><?php echo $read1['1200_2pm']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['1200_2pm']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["1200_2pm"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												  </li> 
												   <li>  
                            <!-- id   -->
                                                        <span class="duration"><?php echo $read1['2pm_4pm']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['2pm_4pm']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["2pm_4pm"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>  
                             <!-- id   -->
							 
                                                        <span class="duration"><?php echo $read1['4pm_6pm']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['4pm_6pm']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["4pm_6pm"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>  
                              <!-- id   -->
                                                        <span class="duration"><?php echo $read1['6pm_8pm']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['6pm_8pm']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["6pm_8pm"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>  
                              <!-- id   -->
                                                        <span class="duration"><?php echo $read1['8pm_10pm']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['8pm_10pm']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["8pm_10pm"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
												   </li> 
												   <li>  
                             <!-- id   -->
                                                        <span class="duration"><?php echo $read1['10pm_1200']; ?></span>
														
														<br>
														<div class="mg-book">
														<?php  if($read1['10pm_1200']==""){'style="display:none;visibility: hidden;"';} else{
															?>
															
                                                        <a href="book.php?y=<?php echo $read["teacher_id"];?>&z=<?php echo $read["name"];?>&l=<?php echo $read["price_per_slot"];?>&m=<?php echo $read["department"];?>&n=<?php echo $read1["date"];?>&o=<?php echo $read1["10pm_1200"];?>" class="btn btn-danger">Book</a>
														<?php } ?>
														</div>
													</li>
                                                      </ul>                         	
												
												
													
												
												<div class="col-md-1">
												
                                                          </div>
												
                                                  </div>  
                                                </div>


                                                
                                               

                                                
                                            </div>
                                        </li>

                                    </ul>
                                
                            </div><!-- /.entry-post -->
                        </div><!-- /.main-post -->

                        <div class="author-post">
                            <div class="comment-post">
                               
                                
                            </div><!-- /.comment-post -->
                        </div><!-- /blog-title-single -->
                    </div><!-- /col-md-8 -->

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