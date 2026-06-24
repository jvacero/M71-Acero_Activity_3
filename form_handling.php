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
    $nation = $_POST["nanLity"];
    echo "<p>Name: $firstNm $midNm $lastNm</p>";
    echo "Address: $address";
    echo "Contact Number: $num";
    echo "Birth Place: $bPlace";
    echo "Religion: $rel";
    echo "Status: $stat";
    echo "Nationality: $nation";
?>
