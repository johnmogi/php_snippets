<?php

$title = 'check out this';
DEFINE('NEW_CONSTANT', 'I\'m a new constant' );

$string = 'I\'m a string ';
$number = 1234;
$booVar = false;
$floatVar = 1.123;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
<?php
 var_dump(is_int($string));


    ?>
</body>
</html>