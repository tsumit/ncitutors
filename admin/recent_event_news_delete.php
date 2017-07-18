<?php 
include('config.php');
$id=$_GET["x"];
$query="delete from event_news where id='$id'";
$exe=mysql_query($query);
if($exe>0)
{
	echo "<script>alert('Data Delete Sucessfully')</script>";
	echo "<script>window.location.href='recent_event_news.php'</script>";
}
else
{
	echo "<script>alert('Data Not Delete Sucessfully')</script>";
	echo "<script>window.location.href='recent_event_news.php'</script>";
}

?>