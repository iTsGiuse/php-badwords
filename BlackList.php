<?php
    /* RECUPERA I DATI INVIATI DALL'ALTRA PAGINA */
    $userParagrafo = $_GET['paragrafo'];
    $userBlackList = $_GET['blackList'];

    /* TROVA LUNGHEZZA PARAGRAFO */
    $lunghezzaUserParagrafo = strlen($userParagrafo);

    /* TRASFORMA LA PAROLA IN BLACKLIST CON DEGLI '*' */
    $userParagrafoCensurato = str_replace($userBlackList, "***", $userParagrafo);
    $lunghezzaUserParagrafoCensurato = strlen($userParagrafoCensurato);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="text-center">BlackList</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col text-center mt-5">
                    <div>
                        <label>Il paragrafo è: <?= $userParagrafo ?></label>
                    </div>
                    <div>
                        <label>La lunghezza è: <?= $lunghezzaUserParagrafo ?></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center mt-5">
                    <div>
                        <label>Il paragrafo censurato è: <?= $userParagrafoCensurato ?></label>
                    </div>
                    <div>
                        <label>La lunghezza del paragrafo censurato è: <?= $lunghezzaUserParagrafoCensurato ?></label>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>