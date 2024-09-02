<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$string = 'Hello, world!';
$length = strlen($string);

$string_x = 'Hello';
for ($i=0; $i < strlen($string_x); $i++) { 
    printf("%d - %s <br>", $i, $string_x[$i]);
}
    
?>
</body>
</html>