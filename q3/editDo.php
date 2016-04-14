<?php
require_once 'dbConn.php';

$id = $_POST['user_id'];
echo $id;
$name = $_POST['name'];
$address= $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
  $sql = "update user set name='$name',address='$address',phone='$phone',email='$email' where id='$id'";
  echo $sql;
  mysqli_query($con,$sql);
  $rows = mysqli_affected_rows($con);
  if($rows >= 1)
  {
    alert("edit sucess");
    href("index.php");
  }else{
    alert("edit failed");
     href("index.php");
    }
function alert($title){
  echo "<script type='text/javascript'>alert('$title');</script>";
}
function href($url){
  echo "<script type='text/javascript'>window.location.href='$url'</script>";
}
?>
