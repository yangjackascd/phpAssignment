<?php
require_once 'dbConn.php';

$id = $_POST['user_id'];
$name = $_POST['name'];
$address= $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$acountno = $_POST['acountno'];
$acounttype = $_POST['acounttype'];

  $sql = "update account set name='$name',address='$address',phone='$phone',email='$email',acountno='$acountno',acounttype='$acounttype' where id='$id'";
  echo 'Edit Save!';
  mysqli_query($con,$sql);
  $rows = mysqli_affected_rows($con);
  if($rows >= 1)
  {
    alert("edit sucess");
    href("topage1.php");
  }else{
    alert("edit failed");
     href("topage1.php");
    }
function alert($title){
  echo "<script type='text/javascript'>alert('$title');</script>";
}
function href($url){
  echo "<script type='text/javascript'>window.location.href='$url'</script>";
}
?>
