<?php
include('config.php');
//error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Options Admin - Responsive Web Application Kit - Login</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="css/main.css" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="js/modernizr/modernizr.min.js"></script>
		
		<style>
		.sizes{
			width:94%;
	
			height:50px;
		}
		
		</style>
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="login-bg-color bg-gray">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>Teacher Login</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">

                                

                                <form method="post" class="form-horizontal">
                                    <div class="form-group left-icon">
                                		<label for="exampleInputEmail1" class="col-sm-3 control-label">Email Id</label>
                                		<div class="col-sm-9">
                                            <span class="glyphicon glyphicon-envelope form-left-icon"></span>
                                			<input required type="text" class="form-control" placeholder="Username">
                                		</div>
                                	</div>
                                    <div class="form-group left-icon">
                                		<label for="exampleInputPassword1" class="col-sm-3 control-label">Password</label>
                                		<div class="col-sm-9">
                                            <span class="glyphicon glyphicon-tags form-left-icon"></span>
                                			<input required type="password" name="username" class="form-control" placeholder="Enter Password">
                                		</div>
                                	</div>
                                    <div class="form-group">
                                       
										<center><input type="submit" name="login" class="btn btn-primary bg-primary-600 btn-labeled sizes" value="Sign in">
                                    </center>
                                    </div>
                                  <!--  <div class="form-group mt-20">
                                        <div class="">
                                            <a href="#" class="form-link"><small class="muted-text">Forgot Password?</small></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>-->
                                </form>
<?php 
if(isset($_POST["login"]))
{

$username11=$_POST["username"];	
$password11=$_POST["password"];

$query1="select * from teacher where username='$username11' and password='$password11'";

$data1=mysql_query($query1);
$read1=mysql_fetch_array($data1);	

if($read1<0)
{
	 $_SESSION["image2"]=$read["image"];
	$_SESSION["name2"]=$read["name"];
    $_SESSION["teacher_id2"]=$read["teacher_id"];
	$_SESSION["username2"]=$read["username"];

	$_SESSION["joining_date2"]=$read["joining_date"];
	
echo "<script>window.location.href='dashboard.php'</script>";
}
else{
	
echo "<script>alert('wrong Username or Password')</script>";
	
	
}
}

?>

                            

                                


                            </div>
                        
                    <!-- /.col-md-6 col-md-offset-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

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
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
_