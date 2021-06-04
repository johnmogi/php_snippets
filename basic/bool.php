<?php
$message = 'Hello World!';
$title = 'true or false';
$bool = true;
$filledVariable = 1;
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
    # var_dump($message);
    #  echo $message;
    # print_r($message);

    # var_dump((bool)$filledVariable);
    (bool)$filledVariable ? print_r('have a nice day') : null;

    ?>
</body>
</html>