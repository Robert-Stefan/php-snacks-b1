<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scooby-Snacks</title>
</head>
<body>

<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
- PHP Snack 2:
Passare come parametri GET (query string) name, mail e age
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri
2. che mail contenga un punto e una chiocciola
3. che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
- PHP Snack 3 Bonus
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<!-- PHP SNACK 1 -->

<h1> PHP Snack 1 - Partite di Basket</h1>
<?php 
$matches = [
    [
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Cantù',
        'punti_casa' => 55,
        'punti_ospite' => 60
    ],
    [
        'squadra_casa' => 'Los Angeles Lakers',
        'squadra_ospite' => 'Portland Trail Blazers',
        'punti_casa' => 70,
        'punti_ospite' => 50
    ],
    [
        'squadra_casa' => 'Brooklyn Nets',
        'squadra_ospite' => 'Dallas Mavericks',
        'punti_casa' => 30,
        'punti_ospite' => 50
    ],
    [
        'squadra_casa' => 'Boston Celtics',
        'squadra_ospite' => 'Golden State Warriors',
        'punti_casa' => 45,
        'punti_ospite' => 75
    ]
];

?>

    <?php for($i = 0; $i < count($matches); $i++) { ?>
        <ul>
            <li> <?php echo ($matches[$i]['squadra_casa'] ); ?> - <?php echo ($matches[$i]['squadra_ospite'] ); ?> | <?php echo ($matches[$i]['punti_casa'] ); ?> - <?php echo ($matches[$i]['punti_ospite'] ); ?></li>
        </ul>
    <?php } ?>

    <!-- PHP SNACK 2 -->

    <h2> PHP Snack 2 - Passare parametri con GET(name, mail, age)</h2>
    <?php
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        if(empty($name) || empty($mail) || empty($age) ) {
            echo 'Please enter the parameters';
        } elseif ( strlen($name) >= 3 && strpos($mail, '@') && strpos($mail, '.') && ctype_digit($age)) {
            echo 'Accesso riuscito!';
        } else {
            echo 'Accesso negato!';
        }
    ?>
</body>
</html>