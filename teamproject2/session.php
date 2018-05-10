<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("register", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("SELECT member_account FROM student WHERE member_account='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['member_account'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: signin.php'); // Redirecting To Home Page
}
?>