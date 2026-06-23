<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
<title>
Student Information Form - Acero
</title>
</head>

<body>
	<header>
		<p>Registration Form</p>
	</header>

<form class="forminput" action="input.php" method="POST">
	<div>	
		<input type="text" placeholder="Last Name" name="lastName">
		<input type="text" placeholder="Middle Name" name="midName">
		<input type="text" placeholder="First Name" name="firstName">
		<input type="text" placeholder="Address" name="addHome">
		<input type="text" placeholder="Contact Number" name="phoneNum">
	</div>
	<div>
	<input type="text" placeholder="Birthplace" name="birthPlace">
	<input type="date" placeholder="Birthday" name="birthDay">
	<input type="text" placeholder="Religion" name="religion">
	<p class="civstatus">Civil Status</p>
	<div class="radioBtn">
		<input value="single" type="radio" name="status" required>
		<label for="single">Single</label>
		<input value="married" type="radio" name="status">
		<label for="married">Married</label>
	</div>
	<input placeholder="Nationality" type="text" name="ntnLity">
	
	<button class="submitBtn">DONE</button>
</div>
</form>
</body>
</html>
