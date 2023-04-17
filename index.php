<!DOCTYPE html>
<html>

<head>
	<title>Water Bill Calculator</title>
</head>

<body>
	<div class="container">
		<h1>Water Bill Calculator</h1>
		<form method="POST">
			<div class="form-group">
				<label for="units">Enter the number of units:</label>
				<input type="number" name="units" class="form-control" id="units" required>
			</div>
			<button type="submit" class="btn btn-primary">Calculate Bill</button>
		</form>

		<?php

		if (isset($_POST['units'])) {
			$units = $_POST['units'];
			$rate = 0;

			$rates = [
				'0-20' => 35,
				'21-49' => 40,
				'50-100' => 45,
				'Above 100' => 50
			];

			$bill = $units * $rate;
			echo "<h2>Your bill for $units units is Ksh. $bill</h2>";
		}

		?>

	</div>

	
</body>

</html>