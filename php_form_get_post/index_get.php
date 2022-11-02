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
            <h4 class="display-4">Form - Passaggio dati con metodo GET - Ricerca NEWS</h4>
            <form method="GET" action="action_get.php" target="_blank">
                <div class="form-group">
                    <label for="sitoSelect">Sito News</label>
                    <select name="sito" class="form-control" id="sitoSelect">
                        <option value="ansa">ANSA</option>
                        <option value="repubblica">Repubblica</option>
                        <option value="corriere">Corriere della Sera</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="categoriaSelect">Categoria</label>
                    <select name="categoria" id="categoriaSelect" class="form-control">
                        <option value="politica">Politica</option>
                        <option value="cronaca">Cronaca</option>
                        <option value="sport">Sport</option>
                        <option value="economia">Economia</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Invia Dati</button>
                </div>
            </form>
        </div>
    </main>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
    

    
