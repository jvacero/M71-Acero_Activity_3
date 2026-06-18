<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
<title>
Student Information Form - Acero
</title>
</head>

<body>
	<p>Registration Form</p>
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
	<input class="radioBtn" id="civStat" type="radio" name="status">
	<input placeholder="Nationality" type="text" name="ntnLity">
	</div>
</form>
</body>
</html>
