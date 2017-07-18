<?php
include('config.php');

?>
<div class="modal fade modal_sze" id="loginModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
			
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login Teacher</span>
</h4>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group left-icon">
                        <label for="name2">Username</label>
                                                        <span class="fa fa-user form-left-icon"></span>
                                                		<input type="text" required name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group left-icon">
                        <label for="name2">Password</label>
                                                        <span class="fa fa-key form-left-icon"></span>
                                                		<input required type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                             <a href="forget.php" style="color:blue;">FORGET PASSWORD</a>
                 <center>    <input  type="submit" value="submit" name="login" class="btn btn-danger"></center>
                                    
                </form>
				<?php 
if(isset($_POST["login"]))
{
error_reporting(0);
session_start();
$username11=$_POST["username"];	
$password11=$_POST["password"];

$query="select * from teacher where username='$username11' and password='$password11'";

$data=mysql_query($query);
$read=mysql_fetch_array($data);	

if($read>0)
{
	 $_SESSION["image2"]=$read["image"];
	$_SESSION["name2"]=$read["name"];
    $_SESSION["teacher_id2"]=$read["teacher_id"];
	$_SESSION["username2"]=$read["username"];

	$_SESSION["joining_date2"]=$read["joining_date"];
	
echo "<script>window.location.href='../teacher_admin/dashboard.php'</script>";
}
else{
	
echo "<script>alert('wrong Username or Password')</script>";
	
	
}
}

?>

           	</div>
            
        </div>
    </div>
</div>
                   