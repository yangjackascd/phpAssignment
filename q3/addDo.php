<?php 
require_once 'dbConn.php';
$user_name = $_POST['name'];
echo $user_name;
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
  $sql = "insert into user (name,address,phone,email) ".
  "values('$user_name','$address','$phone','$email')";
  echo $sql;

  mysqli_query($con,$sql);

  $rows = mysqli_affected_rows($con);

  if($rows >= 1){
    alert("add sucsses");
    href("index.php");
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
