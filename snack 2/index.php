<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Snack 2</title>
</head>
<body>
<!--Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”-->

<form action="access.php" method="get">
    <div>
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="name" aria-describedby="suffixId">
    </div>
    <div>
        <label for="mail">mail</label>
        <input type="text" name="mail" id="mail" class="form-control" placeholder="mail" aria-describedby="suffixId">
    </div>
    <div>
        <label for="age">age</label>
        <input type="text" name="age" id="age" class="form-control" placeholder="age" aria-describedby="suffixId">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>