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
	Last Name: <input type="text" placeholder="Last Name" name="lastName">
	Middle Name: <input type="text" placeholder="Middle Name" name="midName">
	First Name: <input type="text" placeholder="First Name" name="firstName">
	Address: <input type="text" placeholder="Address" name="addHome">
	Contact Number: <input type="text" placeholder="Contact Number" name="phoneNum">
	Birthplace: <input type="text" placeholder="Birthplace" name="birthPlace">
	Birthday: <input type="date" placeholder="Birthday" name="birthDay">
	Religion: <input type="text" placeholder="Religion" name="religion">
	Civil Status: <input id="civStat" type="radio" name="status">
	Nationality: <input placeholder="Nationality" type="text" name="ntnLity">
</form>
</body>
</html>
