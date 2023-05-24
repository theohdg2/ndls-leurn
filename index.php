<?php

$file = file_get_contents("./assets/json/data.json");
$data = json_decode($file, true);

$words = array_keys($data);
$responses = array_values($data);

$randomWord = $words[array_rand($words)];

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Apprendre le Néerlandais</title>
    <link rel="stylesheet" href="./assets/css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<section class="stats">
    <div class="stats__container">
        <div class="stats__container__item">
            <p>Nombre de mots : <strong><?= count($words); ?></strong></p>
        </div>
        <div class="stats__container__item">
            <p>Nombre de réponses : <strong><?= count($responses); ?></strong></p>
        </div>
    </div>
</section>
<form name="form-question" id="form-question">
    <div class="question">
        <label for="response">Traduire : <strong id="question"><?= $randomWord; ?></strong></label>
        <input type="text" name="question" id="response" required autofocus/>
    </div>
    <div class="submit">
        <input type="submit" value="Valider" name="submit" id="submit"/>
    </div>
</form>
<section class="session-stats">
    <div class="stats__container">
        <div class="stats__container__item">
            <p>Nombre de bonnes réponses : <strong id="good-answers">0</strong></p>
        </div>
        <div class="stats__container__item">
            <p>Nombre de mauvaises réponses : <strong id="bad-answers">0</strong></p>
        </div>
    </div>
</section>
<div class="result">
    <p id="result">
    </p>
</div>
<footer>
    <h1>Made with ❤️ by <a href="http://github.com/achedon12">Achedon12</a></h1>
</footer>
</body>
<script type="text/javascript" src="./assets/js/app.js"></script>

</html>
