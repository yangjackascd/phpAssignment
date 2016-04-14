<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add</title>
</head>
<body>
<form action="addDoPro.php" method="post">
      <input type="hidden" name="user_id" value=" "/>
      <table width="300" border="1" align="center" cellspacing="0" cellpadding="0">
       <tr>
        <td>brandname </td>
        <td> <?php echo $_GET['name']; ?></td>
       </tr>
       <tr>
        <td>productname</td>
        <td> <input type="text" name="productname" size="100%" /></td>
       </tr>
	   <tr>
        <td>price</td>
        <td> <input type="text" name="price" size="100%" /></td>
       </tr>
	   <tr>
        <td>descript</td>
        <td> <input type="textarea" name="descript" size="100%" /></td>
       </tr>
	   <tr>
        <td> <input type="hidden" name="grandid" size="100%"  value="<?php echo $_GET['id']; ?>"/></td>
       </tr>
	   <tr>
          <td colspan="2" align="center"><input type="submit" value="add" /></td>
		  </tr>
  </tr>
 </table>
      <p> </p>
      <p> </p>
      <p> </p>
</form>
</body>
</html>
