<?php
require_once 'dbConn.php';

date_default_timezone_set("PRC");
$username= $_POST['user'];
$passwd= $_POST['pass'];
echo $passwd;
echo $_POST['user'];
  $sql = "select count(1) AS permissions from account where username='$username' and passwd='$passwd'";
  echo $sql;
  $row = mysqli_fetch_assoc(mysqli_query($con,$sql));
    session_start();
  $_SESSION['manager'] = $username;
  $_SESSION['rank'] = $row['permissions'];

 switch($_SESSION['rank']){
   case 1:
     header("location: topage1.php?username='$username'");
     break;
   case 2:
     header("location: topage.php");
     break;
   default:
     header("location: topage.php");
     break;
 }
?>