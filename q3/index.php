<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>address book</title>
</head>
  <body>
  <br><br><br>
    <table border="1" cellspacing="0" cellpadding="0" id="userList" align="center">
   <tr align="center">

    <td width='100'>NAME</td>
    <td width='100'>ADDRESS</td>
    <td width='100'>PHONE</>
	<td width='100'>EMAIL</td>
    <td width='100'>FUNCTIONS</td>
   </tr>
<?php
require_once 'dbConn.php';
date_default_timezone_set("PRC");
  $sql = "select * from user order by id asc";
  $result = mysqli_query($con,$sql);
  $userList = '';
  while($rs = mysqli_fetch_array($result)){
        $userList[] = $rs;
    }
		if(is_array($userList) && !empty($userList)){   
        foreach ($userList as $user){
          echo "
             <tr>
  
              <td> ".$user['name']."</td>
              <td> ".$user['address']."</td>
              <td> ".$user['phone']."</td>
              <td> ".$user['email']."</td>
			  <td>
              <a href='deleteUser.php?id=".$user['id']."');\"> delete</a>
              <a href='editUser.php?id=".$user['id']."');\"> edit</a>
              <a href='detailUser.php?id=".$user['id']."');\"> search</a>   
			  
              </td>
             </tr>
          ";
        }
		}
?>

  </table>
<br><br><br>
  <table border="1" cellspacing="0" cellpadding="0" id="userList" align="center">
   <tr align="center">
  <td width='100'> <a href='addUser.php'>add</a> 
  </tr>
  </table>
  </body>
</html>
