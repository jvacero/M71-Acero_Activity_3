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

<form class="forminput" action="form_handling.php" method="POST">
	<div>	
		<input type="text" placeholder="Last Name" name="lastName" required>
		<input type="text" placeholder="Middle Name" name="midName" >
		<input type="text" placeholder="First Name" name="firstName" required>
		<input type="text" placeholder="Address" name="addHome" required>
		<input type="text" placeholder="Contact Number" name="phoneNum" required>
	</div>
	<div>
	<input type="text" placeholder="Birthplace" name="birthPlace" required>
	<input type="date" placeholder="Birthday" name="birthDay" required>
	<input type="text" placeholder="Religion" name="religion" required>
	<p class="civstatus">Civil Status</p>
	<div class="radioBtn">
		<input value="Single" type="radio" name="status" required>
		<label for="Single">Single</label>
		<input value="Married" type="radio" name="status">
		<label for="Married">Married</label>
	</div>
	<input placeholder="Nationality" type="text" name="ntnLity" required>
	
	<button class="submitBtn">DONE</button>
</div>
</form>
</body>
</html>
