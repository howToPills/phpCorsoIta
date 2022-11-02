<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms - Metodo GET</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container">
            <h4 class="display-4">Form - Passaggio dati con metodo POST - Form Contatti</h4>
            <form method="POST" action="action_post.php">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="nome" placeholder="Inserire nome e cognome" />
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="text" name="email" id="email" placeholder="Inserire E-mail" />
                </div>
                <div class="form-group">
                    <label for="msg">Messaggio</label>
                    <textarea id="msg" name="msg" class="form-control" placeholder="Inserire il messaggio">
                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Invia Richiesta</button>
                </div>
            </form>
        </div>
    </main>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>