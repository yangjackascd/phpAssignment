<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
/*if (isset($_REQUEST['submit'])) {
	echo "<br>Last Name:".$_GET['last'];
	echo "<br>First Name:".$_GET['first'];
	echo "<br>Address:".$_GET['address'];
    echo "<br>City:".$_GET['city'];
	echo "<br>State:".$_GET['state'];
	echo "<br>Zip\Post Code:".$_GET['zip'];
	echo "<br>Country:".$_GET['country'];
	echo "<br>Phone:".$_GET['cd'].$_GET['ac'].$_GET['no'];
	echo "<br>E-mail:".$_GET['email'];
	echo "<br>Birth Date:".$_GET['month']."/".$_GET['day']."/".$_GET['year'];
	echo "<br>Gender:".$_GET['gender'];
	echo "<br>StartingSession:".$_GET['start'];
	echo "<br>CommentsQuestions:".$_GET['comment'];
}*/

$fo=fopen('Q1.txt', "w");
fwrite($fo, "Last Name:".$_GET['last']."\r\n");
fwrite($fo, "First Name:".$_GET['first']."\r\n");
fwrite($fo, "Address:".$_GET['address']."\r\n");
fwrite($fo, "City:".$_GET['city']."\r\n");
fwrite($fo, "State:".$_GET['state']."\r\n");
fwrite($fo, "Zip\Post Code:".$_GET['zip']."\r\n");
fwrite($fo, "Country:".$_GET['country']."\r\n");
fwrite($fo, "Phone:".$_GET['cd'].$_GET['ac'].$_GET['no']."\r\n");
fwrite($fo, "E-mail:".$_GET['email']."\r\n");
fwrite($fo, "Birth Date:".$_GET['month']."/".$_GET['day']."/".$_GET['year']."\r\n");
fwrite($fo, "Gender:".$_GET['gender']."\r\n");
fwrite($fo, "StartingSession:".$_GET['start']."\r\n");
fwrite($fo, "CommentsQuestions:".$_GET['comment']."\r\n");
fclose($fo);
echo "<br/>Data has been added.<br/>";
$fr=fopen('Q1.txt', "r");
	while (!feof($fr)) {
		echo "<br/>".fgets($fr)."<br/>";
	}
fclose($fr);
?>
</body>
</html>

















