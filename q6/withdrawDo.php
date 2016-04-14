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
<form id="form1" name="form1" method="post"  action="postDo.php">
<div id="log">
<div id="logxx">
<br>
<div id="mima">please input password:
  <input name="pass" type="password" id="pass" />
</div>

<input name="username" type="hidden" id="hiddenField" value=<?php echo $_POST['username'] ?> />
 <input type="hidden" name="username" value="<?php echo $_POST['username']; ?>"/>
  <input type="hidden" name="withdraw" value="<?php echo $_POST['withdraw']; ?>"/>
  <input type="hidden" name="deposit" value="<?php echo $_POST['deposit']; ?>"/>
</div>
<br><br>
<div id="tijiao">      
  <input type="submit" name="Submit" value="submit" />
  <input type="reset" name="Submit2" value="reset" />
  <button type="button" onclick="location.href='topage1.php'">return</button>
</div>
</div>
</form>
</center>
</body>
</html>
