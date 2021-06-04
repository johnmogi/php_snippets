<?php
$message = 'Hello World!';
$title = 'CONSTANTS';
DEFINE('NEW_CONSTANT', 'I\'m a new constant' );

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
        function scoped(){
            $inside = 'nop';
           return $inside; 
        }
        echo scoped();
        echo  NEW_CONSTANT;


    ?>
</body>
</html>