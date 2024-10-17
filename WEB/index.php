<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Statiskie jautājumi!</h1>
    <?php
    $array = [
        1 => ['name' => 'Kristaps', 'email' => 'kristaps@ventspils.lv', 'type' => 'Atsauksme'],
        2 => ['name' => 'Mareks', 'email' => 'Makkks@ventspils.lv', 'type' => 'Jautājums'],
    ];


    foreach ($array as $user) {
        echo 'Vārds: ' . $user['name'] . ', E-pasts: ' . $user['email'] . ", Atsauksme: " . $user['type'];
        echo '<br>';
    }
    if (!empty($_POST)) {
        echo 'Vārds: ' . $_POST['name'] . ', E-pasts: ' . $_POST['email'] . ", Atsauksme: " . $_POST['select'];
    }



    ?>
    <ul>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="contact.php">Par mums</a></li>
    </ul>
</body>

</html>