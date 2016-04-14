<?php 
require_once 'dbConn.php';
$tires = $_POST['tires'];
$oil = $_POST['oil'];
$spark = $_POST['spark'];
$address = $_POST['address'];
$time = date("Y-m-d H:i:s");

if($tires!=""||$oil!=""||$spark!=null){
	

  $sql = "insert into orderList (tires,oil,spark,address,savedate) ".
  "values('$tires','$oil','$spark','$address','$time')";
  echo $sql;

  mysqli_query($con,$sql);

  $rows = mysqli_affected_rows($con);

  if($rows >= 1){
    alert("add  order  sucsses");
	echo "userDetail.php?tires='$tires'&oil='$oil'&spark='$spark'&address='$address'&time='$time'";
    href("userDetail.php?tires=$tires&oil=$oil&spark=$spark&address=$address&time=$time");
  }else{
    alert("add failed");
    }
	
	}else{
		href("noorder.html");
	}
function alert($title){
  echo "<script type='text/javascript'>alert('$title');</script>";
}
function href($url){
  echo "<script type='text/javascript'>window.location.href='$url'</script>";
}
?>
