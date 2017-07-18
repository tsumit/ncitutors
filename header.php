<?php
include('front/config.php');

?>
<style>
.log_in a i {
    font-size: 15px;
    color: #fff;
    background-color: rgba(0, 105, 255, 1);;
    padding: 10px;
    border-radius: 50%;
    text-align: center;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.log_in {
    float: right;
}
.log_in a {
    line-height: 95px;
    position: relative;
}

.modal-header .close {
    margin-top: -16px;
}
.modal-header button{
	
background-color:white;	
	
}
.form-group.left-icon {
    position: relative;
}

.form-group {
    margin-bottom: 15px;
}
.form-group.left-icon .form-left-icon {
    position: absolute;
    left: 15px;
    top: 25px;
}

.form-group.left-icon .fa {
    line-height: 34px;
}
.form-group.left-icon .form-control {
    padding-left: 42.5px;
}
.modal-body input{
	height:40px;
}
.modal-body center input{
	
	height:48px;
}
.mng-logo{
font-size:30px;
color:red;
font-weight:bold;
}

	
</style>


<div class="header-inner-pages">
    		<div class="top">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-12">
    						<div class="text-information">
    							<p>Welcome to Educate NCI Tutors</p>
    						</div>
                            <div class="right-bar">
        						<ul class="flat-information">
        							<li class="phone">
									<?php
														

									$q="select * from   contact";
									
									$exe=mysql_query($q);
								
								$read=mysql_fetch_array($exe);
									
										
										
										?> 
        								<a href="front/contact.php" title="Phone number"><?php echo $read['mobile_no'];?></a>
        							</li>
        							
                                </ul>
                                <ul class="flat-socials">
								<?php
														

									$q="select * from header_icon";
									
									$exe=mysql_query($q);
								
								$read=mysql_fetch_array($exe);
									
										
										
										?> 
        							<li class="facebook">
        								<a href="<?php echo $read['facebook'];?>">
        									<i class="fa fa-facebook"></i>
        								</a>
        							</li>
        							<li class="twitter">
        								<a href="<?php echo $read['twitter'];?>">
        									<i class="fa fa-twitter"></i>
        								</a>
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
                            </div>
    					</div>
    				</div>
    			</div>
    		</div>      
    	</div><!-- /.header-inner-pages -->

    	<!-- Header --> 
    	<header id="header" class="header clearfix"> 
        	<div class="container">
                <div class="header-wrap clearfix">
                    <div id="logo" class="logo" style="margin:5px; 173px; 0px; 0px;">
                        <a href="../index.php" rel="home">
                            <p class="mng-logo "><img src=" icon/logonci.png" height=100 width=100 ></p>
                        </a>
                    </div><!-- /.logo -->            
                    <div class="nav-wrap">
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu"> 
                                <li class="home">
                                    <a href="../index.php">Home</a>
                                </li>
                                <li><a href="front/courses-grid.php">Search Teacher</a>
                                	
                                </li> 

                                <li><a href="front/about-us.php">About</a>
                                </li>

                                
                                

                                <li><a href="front/contact.php">Contact</a>
                                </li>
                            </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->    
                    </div><!-- /.nav-wrap -->
 <div id="s" class="log_in">
                            <a href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user-plus aria-hidden="true"></i></a>         
                        </div><!-- /.show-search -->
                    <?php include('front/login.php');  ?>
                    
                </div><!-- /.header-inner --> 
            </div>
        </header><!-- /.header -->

        