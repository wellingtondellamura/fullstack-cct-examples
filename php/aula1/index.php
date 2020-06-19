<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de PHP</title>
</head>
<body>
<ul>
    <li><a href="par.php?num=2">Dois é par?</a></li>
    <li><a href="par.php?num=3">Três é par?</a></li>
    <li><a href="par.php?num=4">Quatro é par?</a></li>
    <li><a href="par.php?num=5">Cinco é par?</a></li>
</ul>

<form action="par.php" method="POST">
    <input type="text" name="num">
    <input type="submit">
</form>

</body>
</html>