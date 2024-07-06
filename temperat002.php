
<!DOCTYPE html>
<html>
<head>
	<title>Fahrenheit to Celsius Conversion</title>
</head>
<body>
	<form action="" method="post">
		<label for="fahrenheit">Fahrenheit:</label>
		<input type="text" id="fahrenheit" name="fahrenheit">
		<input type="submit" value="Convert">
	</form>

	<?php
	if (isset($_POST['fahrenheit'])) {
		$fahrenheit = $_POST['fahrenheit'];
		$celsius = ($fahrenheit - 32) * 5 / 9;
		echo "<p>{$fahrenheit}°F is {$celsius}°C</p>";
	}
	?>
</body>
</html>

