<!DOCTYPE html>
<html>
<head>
	<title>E-Services Quiz</title>
</head>
<body>
	<h1>E-Services Quiz</h1>

	<h2>Question 1: What electronic service is provided by the Royal Oman Police (ROP)?</h2>
	<form action="" method="post">
		A) Online passport renewal<br>
		B) Online visa application<br>
		C) Online driving license registration<br>
		D) Online property registration<br>
		<input type="radio" name="question1" value="A"> A<br>
		<input type="radio" name="question1" value="B"> B<br>
		<input type="radio" name="question1" value="C"> C<br>
		<input type="radio" name="question1" value="D"> D<br>
		<input type="submit" value="Submit">
	</form>

	<h2>Question 2: Which e-service is offered by the Royal Oman Police (ROP)?</h2>
	<form action="" method="post">
		A) Online tax payment<br>
		B) Online visa extension<br>
		C) Online traffic fines payment<br>
		D) Online vehicle registration<br>
		<input type="radio" name="question2" value="A"> A<br>
		<input type="radio" name="question2" value="B"> B<br>
		<input type="radio" name="question2" value="C"> C<br>
		<input type="radio" name="question2" value="D"> D<br>
		<input type="submit" value="Submit">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$question1 = $_POST["question1"];
		$question2 = $_POST["question2"];

		if ($question1 == "B" && $question2 == "C") {
			echo "<p>Correct!</p>";
		} else {
			echo "<p>Incorrect. Please try again.</p>";
		}
	}
	?>
</body>
</html>