<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ollama prompt</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container">
            <h4 class="display-4">Prompt per Ollama AI</h4>
            <form method="POST" action="call_ollama.php">
                <div class="form-group">
                    <label for="prompt">Prompt</label>
                    <input class="form-control" type="text" name="prompt" id="prompt" placeholder="Inserire prompt per Ollama" />
                </div>
                <div class="form-group">
                    <input class="form-check-input" type="radio" name="radioModel" id="radioModel1" value="llama3">
                    <label class="form-check-label" for="radioModel1">
                        Llama3
                    </label>
                <div>
                <div class="form-group">
                    <input class="form-check-input" type="radio" name="radioModel" id="radioModel2" value="gemma2" checked>
                    <label class="form-check-label" for="radioModel2">
                        Gemma2
                    </label>
                <div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Invia</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>