<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if (isset($_POST['Go'])) {
		print"<h2>Your Favourite Seasons and Weather are:<h2>";
		
		if (isset($_POST['w'])) {
			print"<h3>Your Favourite Weather in ".$_POST['city']." is:"."<br/></h3>";
			$w=$_POST['w'];
			print"<ul>"; 			
			for ($i=0; $i <(count($w)) ; $i++) { 
			print"<li>".$w[$i]."</li>";
			}
			print"</ul>"."<br/>";
		}
		else{
			print"You did not choose any weather.";
		}

		if (isset($_POST['z'])) {
			print"<h2>Your Favourite Seasons are:</h2>";
			$z=$_POST['z'];
			print"<ul>";
			for ($j=0; $j <count($z) ; $j++) { 
				print"<li>".$z[$j]."</li>";
			}
			print"</ul>";
		}
		else{
			print"You did not choose any season.";
		}
	}
?>
</body>
</html>






















