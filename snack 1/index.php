<?php

$partite= [
    [
       "squadraCasa" => "Olimpia Milano",
       "punteggioSquadraCasa" => 55,
       "squadraOspite" => "Cantù",
       "punteggioSquadraOspite" => 60
    ],
    [
        "squadraCasa" => "Pallacanestro Reggiana",
        "punteggioSquadraCasa" => 80,
        "squadraOspite" => "Polisportiva Dinamo",
        "punteggioSquadraOspite" => 68
    ],
    [
        "squadraCasa" => "New Basket Brindisi",
        "punteggioSquadraCasa" => 77,
        "squadraOspite" => "Aquila Basket Trento",
        "punteggioSquadraOspite" => 11
    ],
    [
        "squadraCasa" => "Allianz Pallacanestro Trieste",
        "punteggioSquadraCasa" => 48,
        "squadraOspite" => "Scafati Basket",
        "punteggioSquadraOspite" => 31
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60-->

<?php foreach($partite as $partita) : ?>
      <p><?= $partita["squadraCasa"] . " - " . $partita["squadraOspite"] . " | " . $partita["punteggioSquadraCasa"] . " - " . $partita["punteggioSquadraOspite"]?></p>
<?php endforeach ?> 

</body>
</html>