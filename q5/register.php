<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbConn.php';

date_default_timezone_set("PRC");
$username = $_POST['user'];
$password = $_POST['pass'];
$sql = "select * from member where username='$username'";
$sqlinsetr = "INSERT INTO member(username,passwd,permissions) VALUES ('$username','$password','2');";
$row = mysqli_fetch_assoc(mysqli_query($con, $sql));
if (!empty($password) || !empty($username)) {
    if ($row == 0) {
        if (mysqli_query($con, $sqlinsetr)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        echo '<script type="text/javascript">alert("Register complete.");location.href ="index.php";</script>';
    } else {
        header("location: topagesignup.php");
    }
} else {
    header("location: topagesignup.php");
}
