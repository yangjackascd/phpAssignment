<?php

require_once 'dbConn.php';

$id = $_GET['id'];
$row = delete($id,$con);
if($row >=1){
  alert("DELETE SUCESS");
}else{
  alert("DELETE FAILED");
}

href("index.php");
function delete($id,$con){
  $sql = "delete from user where id='$id'";

  mysqli_query($con,$sql);

  $rows = mysqli_affected_rows($con);

  return $rows;
}
function alert($title){
  echo "<script type='text/javascript'>alert('$title');</script>";
}
function href($url){
  echo "<script type='text/javascript'>window.location.href='$url'</script>";
}
?>
