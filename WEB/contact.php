<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Jautā man!</h1>

    <form action="index.php" method="post">
        <label for="name">Vārds</label>
        <input type="text" id="name" name="name">
        <label for="email">E-pasts</label>
        <input type="email" id="email" name="email">

        <select name="select">
            <option value="Atsauksme">Atsauksme</option>
            <option value="Ieteikums">Ieteikums</option>
            <option value="Jautājums">Jautājums</option>
        </select> <br>
        <input type="checkbox" name="info">
        <label for="info">Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</label>
        <br>
        <input type="checkbox" name="rules">
        <label for="rules">Vai piekrīti mūsu mājaslapas lietošanas noteikumiem?</label>
        <br>
        <input type="submit" value="Sniegt">
    </form>
    <ul>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="index.php">Reģistretie</a></li>
    </ul>
</body>

</html>