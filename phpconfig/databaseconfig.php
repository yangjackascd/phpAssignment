<?php

$con = mysqli_connect('127.0.0.1','root','') or die('error:'.mysql_error());
mysqli_select_db($con,'hyxx') or die('error:'.mysql_error());
