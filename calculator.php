<!DOCTYPE html>
<html>
<head>
	<title>PHP Calc</title>
</head>
<body>
	<form method="post">
		<label for="number1">Enter first number:</label>
		<input type="number" id="number1" name="number1" required><br><br>

		<label for="number2">Enter second number:</label>
		<input type="number" id="number2" name="number2" required><br><br>

		<label for="operator">Select the operator:</label>
		<select id="operator" name="operator" required>
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select><br><br>

		<button type="submit">Calculate</button>
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$first_num = $_POST["number1"];
		$second_num = $_POST["number2"];
		$operator = $_POST["operator"];

		if (!is_numeric($first_num) || !is_numeric($second_num)) {
			echo "Error: Please enter valid numbers.";
		} else {
			switch ($operator) {
				case "+":
					$answer = $first_num + $second_num;
					break;
				case "-":
					$answer = $first_num - $second_num;
					break;
				case "*":
					$answer = $firts_num * $second_num;
					break;
				case "/":
					if ($second_num == 0) {
						echo "Error: Division by zero.";
					} else {
						$answer = $first_num / $second_num;
					}
					break;
				default:
					echo "Error: Invalid operator.";
					break;
			}

			if (isset($answer)) {
				echo "Result: $first_num $operator $second_num = $answer";
			}
		}
	}
	?>
</body>
</html>
