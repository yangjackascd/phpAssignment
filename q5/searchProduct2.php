<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>address book</title>
<script language="javascript" type="text/javascript">


</script>
</head>
  <body>
    <?php echo $_GET['name']; ?>
    <table border="1" cellspacing="0" cellpadding="0" id="userList" align="center">
		<tr align="center">
		<td>id</td>
		<td>productdname</td>
		<td>price</td>
		<td>descript</td>
		</tr>
   <tr align="center">
   <td>
<?php
require_once 'dbConn.php';
$pid=$_GET['id'];
date_default_timezone_set("PRC");
  $sql = "select * from products where grandid=".$pid;
  $result = mysqli_query($con,$sql);
  $userList = '';
  while($rs = mysqli_fetch_array($result)){
        $userList[] = $rs;
    }
		if(is_array($userList) && !empty($userList)){   
        foreach ($userList as $user){
          echo "
             <tr>
              <td> ".$user['id']."</td>
              <td> ".$user['productdname']."</td>
              <td> ".$user['descript']."</td>
			   <td> ".$user['price']."</td>
             </tr>
          ";
        }
		}
?>
</td>
</tr>
  </table>
  <br><br>
 <table border="0" cellspacing="0" cellpadding="0" id="userList" align="center">
 <tr align="center">
  <td> <a href='topage2.php'>return</a> 
  </tr>
  </table>
  </body>
</html>
