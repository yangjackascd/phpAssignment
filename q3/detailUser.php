<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>search</title>
</head>
<body>
<?php 
require_once 'dbConn.php';
$userId=$_GET['id'];
date_default_timezone_set("PRC");
  $sql = "select * from user where id=".$userId;
  $result = mysqli_query($con,$sql);
  $user = mysqli_fetch_array($result);
?>
<br><br><br><br><br>
    <table width="444" border="1"  cellpadding="0" cellspacing="0"  align="center">
       <tr>
        <td>id</td>
        <td> <?php echo $userId ?> </td>
       </tr>
       <tr>
        <td>name </td>
        <td> <?php echo $user['name'] ?> </td>
       </tr>
       <tr>
        <td>address</td>
        <td> <?php echo $user['address'] ?> </td>
       </tr>
       <tr>
        <td>phone</td> 
        <td> <?php echo $user['phone'] ?> 
        </td>
       </tr>
       <tr>
        <td>email</td>
        <td> <?php echo $user['email'] ?> </td>
       </tr>
      
       <tr>
          <td colspan="2" align="center"><a href="index.php" >return</a></td>
       </tr>
 </table>
      <p> </p>
      <p> </p>
      <p> </p>
</body>
</html>
