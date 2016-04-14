<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>address book</title>
<script language="javascript" type="text/javascript">


</script>
</head>
  <body>
  <br><br><br>
    <table border="1" cellspacing="0" cellpadding="0" id="userList" align="center">
		<tr align="center">
		<td width="100">id</td>
		<td width="100">brandname</td>
		<td width="100">descript</td>
		<td width="200">function</td>
		</tr>
   <tr align="center">
   <td>
<?php
require_once 'dbConn.php';
date_default_timezone_set("PRC");
  $sql = "select * from brands order by id asc";
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
              <td> ".$user['brandname']."</td>
              <td> ".$user['descript']."</td>
			  <td>
              <a href='addProduct.php?id=".$user['id']."&name=".$user['brandname']."');\">addProduct</a>
              <a href='searchProduct.php?id=".$user['id']."&name=".$user['brandname']."');\">search</a>   
			  
              </td>
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
          <td> <a href='addBrand.php'>addBrands</a> 
              <a href="index.php">Return</a>
      </tr>
  </table>
  </body>
</html>
