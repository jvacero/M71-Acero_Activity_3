
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>


<div class="form_done">
    <?php
    $lastNm = $_POST["lastName"];
    $midNm = $_POST["midName"];
    $firstNm = $_POST["firstName"];
    $address = $_POST["addHome"];
    $num = $_POST["phoneNum"];
    $bPlace = $_POST["birthPlace"];
    $bDay = $_POST["birthDay"];
    $rel = $_POST["religion"];
    $stat = $_POST["status"];
    $nation = $_POST["ntnLity"];
    echo "<h4>Name: $firstNm $midNm $lastNm</h4>";
    echo "<h4>Address: $address</h4>";
    echo "<h4>Contact Number: $num</h4>";
    echo "<h4>Birth Date: $bDay</h4>";
    echo "<h4>Birth Place: $bPlace</h4>";
    echo "<h4>Religion: $rel</h4>";
    echo "<h4>Status: $stat</h4>";
    echo "<h4>Nationality: $nation</h4>";
    ?>
    <button class="return"><a href="register.php">return</a></button>
</div>
    
</body>
</html>
