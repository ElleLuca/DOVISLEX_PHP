<?php

// Establishing Connection by passing server_name, user_id and password
$connection = mysqli_connect("rendertech.com","pupone_Runhao","Runhao1212");

// Selecting Database
$db = mysql_select_db("Members", $connection);

// Starting Session
session_start();

// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql = mysql_query("select userName from Members where userName='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['userName'];

if (!isset($login_session)) {
    mysql_close($connection); // Closing Connection
    header('Location: login.php'); // Redirecting To Home Page
}