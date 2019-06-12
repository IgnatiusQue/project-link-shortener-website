<?php
//Establishing Connection with Server by passing server_name, user_id and password as a parameter 
$connection = mysql_connect("localhost", "root", "");

//Selecting Database
$db = mysql_select_db("company", $connection);   
                            
session_start();// Starting Session

//Storing session
$user_check=$_SESSION['login_user'];

//SQL query to fetch complete information of user   
$ses_sql=mysql_query("select username from login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);

$login_session =$row['username'];

if(!isset($login_session)){

//Closing Connection
mysql_close($connection);
header('Location: index.php');//Redirecting to home page 
}
?>