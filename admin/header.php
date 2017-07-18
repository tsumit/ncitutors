   <?php
error_reporting(0);
session_start();
$name=$_SESSION["name"];
$image=$_SESSION["image"];
if(empty($image))
{
$dealer_img="default.png";
}	
else{
$dealer_img=$image;
}	
$username1=$_SESSION["username"];


if(empty($username1))
{
	echo "<script>window.location.href='index.php'</script>";
}
else{
}

	
	
?>

   <nav class="navbar top-navbar bg-white box-shadow">
            	<div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                			
                            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                				<span class="sr-only">Toggle navigation</span>
                				<i class="fa fa-ellipsis-v"></i>
                			</button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				<i class="fa fa-bars"></i>
                			</button>
                		</div>
                        <!-- /.navbar-header -->

                		<div class="collapse navbar-collapse" id="navbar-collapse-1">
                			
                            <!-- /.nav navbar-nav -->

                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                
                                <!-- /.dropdown -->
                                <li class="dropdown">
                					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $name; ?> <span class="caret"></span></a>
                					<ul class="dropdown-menu profile-dropdown">
                						<li class="profile-menu bg-gray">
                						    <div class="">
                						        <img src="images/<?php echo $dealer_img; ?>" alt="<?php echo $name; ?>" class="img-circle profile-img">
                                                <div class="profile-name">
                                                    <h6><?php echo $name; ?></h6>
                                                    <a href="profile.php">View Profile</a>
                                                </div>
                                                <div class="clearfix"></div>
                						    </div>
                						</li>
                						<li role="separator" class="divider"></li>
                						<li><a href="logout.php" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                					</ul>
                				</li>
                                <!-- /.dropdown -->
                                </ul>
                            <!-- /.nav navbar-nav navbar-right -->
                		</div>
                		<!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
            	</div>
            	<!-- /.container-fluid -->
            </nav>
