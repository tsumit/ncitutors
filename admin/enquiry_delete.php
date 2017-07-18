<?php 
include('config.php');
$id=$_GET["x"];
$query="delete from enquiry  where id='$id'";
$exe=mysql_query($query);
if($exe>0)
{
	echo "<script>alert('Data Delete Sucessfully')</script>";
	echo "<script>window.location.href='enquiry.php'</script>";
}
else
{
	echo "<script>alert('Data Not Delete Sucessfully')</script>";
	echo "<script>window.location.href='enquiry.php'</script>";
}

?>