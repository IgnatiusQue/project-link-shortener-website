<?php
session_start();//starting session
$error=''; //variable to store error message
 if (isset($_POST['submit'])) {

                            if (empty($_POST['username']) || empty($_POST['password'])) {
								$error = "Username or Password is invalid"; 
                            } 
							else 
							{   
                                                              
// Define $username and $password 
$username=$_POST['username']; 
$password=$_POST['password']; 

// To protect MySQL injection for Security purpose 
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
                                
                                
                                //Establishing Connection with Server by passing server_name, user_id and password as a parameter 
                                $connection = mysql_connect("localhost", "root", "");
								
								//Selecting Database
								$db = mysql_select_db("company", $connection);
								
								//SQL query to fetch information of registerd users and finds user match.
                                $query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
                                $rows = mysql_num_rows($query);

                                if ($rows == 1) {
                                    $_SESSION['login_user']=$username;//Initializing Session
                                    header("location: profile.php");//Redirecting to other page
                                    
                                } else {
                                    $error = "Username or Password is invalid"; 
                                }
								
								//Closing Connection
								mysql_close($connection);                           
                            }
                        }
?>