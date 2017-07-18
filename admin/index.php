<?php
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>

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
                                    <h4>Admin Login</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">

                                

                                <form method="post" class="form-horizontal">
                                    <div class="form-group left-icon">
                                		<label for="exampleInputEmail1" class="col-sm-3 control-label">Username</label>
                                		<div class="col-sm-9">
                                            <span class="glyphicon glyphicon-envelope form-left-icon"></span>
                                			<input type="text" required name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email Id">
                                		</div>
                                	</div>
                                    <div class="form-group left-icon">
                                		<label for="exampleInputPassword1" class="col-sm-3 control-label">Password</label>
                                		<div class="col-sm-9">
                                            <span class="glyphicon glyphicon-tags form-left-icon"></span>
                                			<input type="password" required name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                                		</div>
                                	</div>
                                    <div class="form-group">
                                       
										<center><input type="submit" name="login" class="btn btn-primary bg-primary-600 btn-labeled sizes" value="Sign in">
                                    </center>
                                    </div>
                                    
                                </form>
<?php 
if(isset($_POST["login"]))
{
$username=$_POST["username"];	
$password=$_POST["password"];
$query="select * from admin where username='$username' and password='$password'";
$data=mysql_query($query);
$read=mysql_fetch_array($data);	
if($read>0)
{
	$_SESSION["image"]=$read["image"];
	$_SESSION["name"]=$read["name"];
    $_SESSION["id"]=$read["id"];
	$_SESSION["username"]=$read["username"];

	echo "<script>window.location.href='dashboard.php'</script>";
}
else{
	
echo "<script>alert('wrong Username or Password')</script>";
	
	
}
}

?>
                            

                                


                            </div>
                        </div>
                        <!-- /.panel -->
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

       
    </body>
</html>
