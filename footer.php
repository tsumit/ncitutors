<?php
include('front/config.php');

?>
<footer class="footer">  
            <div class="footer-widgets">   
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">  
                            <div class="widget widget-text">
                               <h5 class="widget-title">About Us</h5>
							   <?php
														

									$q="select * from about_des";
									
									$exe=mysql_query($q);
								
								$read=mysql_fetch_array($exe);
									
										
										
										?> 
                                 <p><?php echo substr ($read["description"],0,200) ?></p>
                            </div><!-- /.widget -->      
                        </div>

                        <div class="col-md-4">
                            <div class="widget widget_tweets clearfix">
                                <h5 class="widget-title">User Links</h5>
                                <ul class="link-left">
                                    <li>
                                        <a href="about-us.php">About Us</a>
                                    </li>
                                    
                                    <li>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                    <li>
                                        <a href="courses-grid.php">Search Teacher</a>
                                    </li>
									
                                    
                                </ul>
                                </div>
                            </div><!-- /.widget-recent-tweets -->
							
							<div class="col-md-4">
                            <div class="widget widget-text">
                                <h5 class="widget-title">Contact Us</h5>
                                <ul><?php
														

									$q="select * from contact";
									
									$exe=mysql_query($q);
								
								$read=mysql_fetch_array($exe);
									
										
										
										?> 
                                    <li class="address"><?php echo $read['descr_address']; ?></li>
                                    <li class="phone"><?php echo $read['mobile_no']; ?></li>
                                   </ul> 
                                </div>
                            </div><!-- /.widget-recent-tweets -->
							
							
                        <!-- /.col-md-2 -->

                         
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-widgets -->
        </footer>

        <a class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>

        <!-- Bottom -->
        <div class="bottom">
            <div class="container">
                <ul class="flat-socials-v1">
				<?php
														

									$q="select * from header_icon";
									
									$exe=mysql_query($q);
								
								$read=mysql_fetch_array($exe);
									
										
										
										?> 
                    <li class="facebook">
                        <a href="<?php echo $read['facebook'];?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter">
                        <a href="<?php echo $read['twitter'];?>"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="linkedin">
        				<a href="<?php echo $read['linkedin'];?>">
        									<i class="fa fa-linkedin"></i>
        								</a>
        			</li>
                    <li class="youtube">
        								<a href="<?php echo $read['youtube'];?>">
        									<i class="fa fa-youtube-play"></i>
        								</a>
        							</li>
                </ul>    
                <div class="row">
                    <div class="container-bottom">
                        <div class="copyright"> 
                            <p>Copyright © 2017. Designer by <span>Nci Tutors</span>. All Rights Reserved.</p>
                        </div>
                    </div><!-- /.container-bottom -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    