<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>PHP Badwords</title>
</head>
<body>
<?php
    $paragrafo = $_GET["paragrafo"];
    $parolaDaCensurare = $_GET["parola"];

    echo "<h2>Paragrafo e lunghezza originale:</h2>";
    echo "<p>$paragrafo</p>";
    echo "<p>Lunghezza: " . strlen($paragrafo) . "</p>";
    echo "<h3>Il paragrafo contiene: "  . count(explode(" ", $paragrafo)). " parole</h3>";
    $paragrafoCensurato = str_replace($parolaDaCensurare, '***', $paragrafo);

    echo "<h2>Paragrafo censurato e lunghezza:</h2>";
    echo "<p>$paragrafoCensurato</p>";
    echo "<p>Lunghezza: " . strlen($paragrafoCensurato) . "</p>";

?>

</body>
</html>