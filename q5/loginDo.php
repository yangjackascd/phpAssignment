<?php

if (isset($_POST['Submit'])) {
    require_once 'dbConn.php';

    date_default_timezone_set("PRC");
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select permissions from member where username='$username'";

    $sql2 = "select passwd from member where username='$username'";

    $row = mysqli_fetch_assoc(mysqli_query($con, $sql));

    $row2 = mysqli_fetch_assoc(mysqli_query($con, $sql2));
    $pass = $row2['passwd'];
    if (!empty($password) || !empty($username)) {
        if ($password == $pass) {
            session_start();
            $_SESSION['manager'] = $username;
            $_SESSION['rank'] = $row['permissions'];

            switch ($_SESSION['rank']) {
                case 1:
                    header("location: topage1.php");
                    break;
                case 2:
                    header("location: topage2.php");
                    break;
            }
        } else {
            header("location: topage.php");
        }
    } else {
        header("location: topage.php");
    }
}
if (isset($_POST['Submit3'])) {
    include 'register.php';
}
?>