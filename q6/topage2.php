<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add</title>
</head>
<body>
<p >
<font size="5" face="Verdana">
Success!
</font>
</p>
 <input type="hidden" name="username" value="<?php echo $_GET['username']; ?>"/>
  <input type="hidden" name="withdraw" value="<?php echo $_POST['withdraw']; ?>"/>
  <input type="hidden" name="deposit" value="<?php echo $_POST['deposit']; ?>"/>

   
   <?php 
   $username=$_GET['username'];
   
   header("Refresh: 2;url=topage1.php?username=$username");
   ?>
</body>
</html>
