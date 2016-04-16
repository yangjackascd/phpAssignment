<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
function subj($a){
	for ($i=0; $i <(count($a)) ; $i++) { 
		echo "<input type=checkbox name=w[] value=$a[$i]>".ucwords($a[$i])."<br/>";
	}
}
function subt($b){
	for ($j=0; $j <(count($b)) ; $j++) { 
		echo "<input type=checkbox name=z[] value=$b[$j]>".ucwords($b[$j])."<br/>";
	}
}
?>
</head>
<body>

<h1>Your Favourite Seasons Weather are:</h1>
<h3>Please enter the city of your choice:</h3>
<form method="post" action="Q2-1.php" name="Q2">
	City <input type="text" name="city" required>
	<h3>Please choose the kinds of seasons and weather you like from the list below.</h3>
	<h3>Choose all that apply.</h3>
	<h3><b>Weather</b></h3>
	<?php
		$a= array("Sunshine","Clouds","Rain","Hail","Sleet","Snow","Wind","Cold","Heat");
		subj($a);
	?>
	<h3><b>Season</b></h3>
	<?php
		$b=array("Spring","Summer","Autumn","Winter");
		subt($b);
	?>
	<input type="submit" name="Go" value="Go"></input>
</form>
</body>
</html>













