<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>search</title>
</head>
<body>
<?php 
require_once 'dbConn.php';
$tires=0;
$oli=0;
$spark=0;
if(!empty($_GET['tires'])){
$tires=(int)$_GET['tires'];
}
if(!empty($_GET['oil'])){
$oli=(int)$_GET['oil'];
}
if(!empty($_GET['spark'])){
$spark=(int)$_GET['spark'];
}
if(!empty($_GET['address'])){
$address=$_GET['address'];
}
if(!empty($_GET['time'])){
$time=$_GET['time'];
}
if(empty($_GET['tires'])&&empty($_GET['oil'])&&empty($_GET['spark'])){
    header('Location: noorder.html');
}
$total=$tires+$oli+$spark;
$totalPrice=12;
$totaltaxPrice=13.5;
date_default_timezone_set("PRC");
?>
   <p >
<font size="5" face="Verdana">
Order Results
</font>
</p>
<table>

	<tr>
      <p><font size="2" face="Verdana">
		Order Processed at  <?php echo $time ?></font> </p>
      <p> </p>
      <p> </p>
	  	  <tr><td>Your order is as follows</td><tr>
	<tr>
	  <?php if(!empty($tires)){
		  echo " <tr> <td>$tires </td><td>tires</td></tr>";
	  }?>
	  
	    <?php if(!empty($oli)){
		  echo " <tr> <td>$oli </td><td>bottles of oil</td></tr>";
	  }?>
	    <?php if(!empty($spark)){
		  echo " <tr> <td>$spark </td><td>spark plugs</td></tr>";
	  }?>
	   <?php 
		  echo " <tr> <td>Items ordered:</td><td>$total</td></tr>";
?>
	  	   <?php 
		  echo " <tr> <td>Subtotal:</td><td>$$totalPrice</td></tr>";
?>
	  	   <?php 
		  echo " <tr> <td>Total including tax:</td><td>$$totaltaxPrice</td></tr>";
?>
	<tr></tr>
		<tr></tr>
	<tr></tr>
	<br>
 <?php 
		  echo " <tr> <td>Address to ship to is:</td><td>$address</td></tr>";
?>
Order Written
</table>	  
	  
</body>
</html>
