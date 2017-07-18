<?php

if(!mysql_connect("localhost","anjit11",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("tutor"))
{
     die('oops database selection problem ! --> '.mysql_error());
} 
?>