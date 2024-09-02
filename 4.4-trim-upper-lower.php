<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // trim use case
    $title = "   Programming PHP \n";
    $str1 = ltrim($title); // delete left side only
    $str2 = rtrim($title); // delete right side only
    $str3 = trim($title); // delete all spaces
    echo $str1. "<br>";
    echo $str2. "<br>";
    echo $str3. "<br>";

    $record = " Fred\tFlinstone\t35\tWilma\t \n";
    $record = trim($record, " \r\n\0\x0b");
    echo $record. "<br>";

    // upper & lower case
    $string1 = "FRED flinstone";
    $string2 = "barney rubble";

    print(strtolower($string1)). "<br>";
    print(strtoupper($string1)). "<br>";
    print(ucfirst($string2)). "<br>"; // Barney rubble
    print(ucwords($string2)). "<br>"; // Barney Rubble

    // first all change to lowercase and change to ucworlds
    print(ucwords(strtolower($string1))). "<br>"; // Fred Flinstone;

?>
</body>
</html>