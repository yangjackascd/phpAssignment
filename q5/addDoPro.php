<?php 
require_once 'dbConn.php';
$user_name = $_POST['productname'];
$price = $_POST['price'];
$descript=$_POST['descript'];
$grandid=$_POST['grandid'];

  $sql = "insert into products (productdname,price,descript,grandid) ".
  "values('$user_name','$price','$descript','$grandid')";
  echo $sql;
  mysqli_query($con,$sql);
  $rows = mysqli_affected_rows($con);
  if($rows >= 1){
    alert("add sucsses");
    href("topage1.php");
  }else{
    alert("add failed");
    }
function alert($title){
  echo "<script type='text/javascript'>alert('$title');</script>";
}
function href($url){
  echo "<script type='text/javascript'>window.location.href='$url'</script>";
}
?>
