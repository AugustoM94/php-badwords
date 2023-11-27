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

  <h2>Badwords</h2>
    <form action="censura.php" method="GET">
        <div>
            <label for="paragrafo">Paragrafo:</label><br>
            <textarea name="paragrafo" id="paragrafo" rows="4" cols="50" maxlength="400" placeholder="Inserisci il testo"></textarea>
        </div>
        <div class="mt-4">
            <label for="parola">Parola da censurare:</label><br>
            <input type="text" name="parola" id="parola" placeholder="Inserisci la parola da censurare"><br>
            <input class="btn btn-danger" id="submit" type="submit" value="Invia">
        </div>
        
    </form>


</body>
</html>