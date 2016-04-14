<?php
require_once 'dbConn.php';
$username=$_POST['username'];
$passwd=$_POST['pass'];
$withdraw=$_POST['withdraw'];
$deposit=$_POST['deposit'];

date_default_timezone_set("PRC");
  $sql = "select * from ACCOUNT WHERE username =$username and passwd='$passwd'";
  $result = mysqli_query($con,$sql);
  $userList = '';
  
  while($rs = mysqli_fetch_array($result)){
        $userList[] = $rs;
    }
	
		if(is_array($userList) && !empty($userList)){   
        foreach ($userList as $user){
          echo "
		  <table>
             <tr>
              <td>Name: ".$user['name']."</td>
			  </tr>
			    <tr>
			    <td>Account No: ".$user['username']."</td>
				  </tr>
				
				     <tr>
				 <td>Accout Count: ".$user['accoutcount']."</td>

             </tr>
			   </table>
			   <br><br><br>
          ";
		
		  if(!empty($withdraw)){
			  
			  if($withdraw>$user['accoutcount']){
				  $accoutcount = $user['accoutcount'];
			      echo "The Overdraft Facility is not avaliable! <br>";
				  echo "withdraw is :$withdraw <br>" ;
				  echo "accoutcount is : $accoutcount <br>" ;
				  header("Refresh: 2;url=topage1.php?username=$username");
			  }else{
			      $count= $user['accoutcount'];
				  $sql = "update ACCOUNT set accoutcount=$count-$withdraw where username=$username";
					$result = mysqli_query($con,$sql);
					header("location: topage1.php?username=$username");
			  }
			  
		  }
		  
		  
		  if(!empty($deposit)){
			  
			 
			      $count= $user['accoutcount'];
				  $sql = "update ACCOUNT set accoutcount=$count+$deposit where username=$username";
					$result = mysqli_query($con,$sql);
					header("location:topage2.php?username=$username");

		  }
		  
        }
		}
                else{
			header("location:topage.php?mes=passwd err");
		}
?>