<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="text-center">Homepage</h1>
    </header>

    <main>
        <div class="container">
            <div class="row">    
                <div class="col mt-5">
                    <form class="d-flex align-content-center justify-content-center" action="BlackList.php" method="GET">
                        <textarea class="me-2" type="text" name="paragrafo" placeholder="inserisci il paragrafo" required></textarea>
                        <input class="me-2" type="text" name="blackList" placeholder="inserisci la parola blacklist">
                        <button type="submit">INVIA</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>