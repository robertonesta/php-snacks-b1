<?php

$name = $_GET["name"];
$mail = $_GET["mail"];;
$age = $_GET["age"];;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php if(strlen($name) > 3 && str_contains($mail, "@") && str_contains($mail, ".")  && is_numeric($age)) : ?>
<p>access confirmed</p>
<?php else : ?>
<p>access denied</p>
<?php endif; ?>

</body>
</html>