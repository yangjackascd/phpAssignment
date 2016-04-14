<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Login</title>
<link href="css/index.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style></head>

<body>
<br><br><br><br><br>

<center>
<form id="form1" name="form1" method="post"  action="loginDo.php">
<div id="log">
<div id="logxx">
<div id="yonghu">username:
  <input name="user" type="text" id="user" />
</div>
<br>
<div id="mima">password:
  <input name="pass" type="password" id="pass" />
</div>

<input name="hiddenField" type="hidden" id="hiddenField" value="<?php echo $random ?>" />
</div>
<br><br>
<div id="tijiao">      
  <input type="submit" name="Submit" value="Sign in" />
  <input type="reset" name="Submit2" value="Reset" />
  <input type="submit" name="Submit3" value="Sign up"/>
  <p>test admin account: admin 123 <br></br>
      test usual account: other 123</p>
</div>
</div>
</form>
</center>
</body>
</html>