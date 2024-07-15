<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ollama prompt</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <?php
    $ollama_url = "http://localhost:11434/api/generate";

    $prompt = $_POST["prompt"];
    $model = $_POST["radioModel"];

    $data = [ 'prompt' => $prompt, 'model' => $model, 'stream' => false];

    $ch = curl_init($ollama_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    $response = curl_exec($ch);
    $return = json_decode($response, true);

    echo "<p><b>Prompt:</b><br />";
    echo $prompt."<br /><br />";
    echo "<b>Risposta:</b><br />".$return['response']."<br /><br />";
    echo "<b>Modello:</b><br />".$model."<br /><br />";
    echo "</p>";
    ?>
</body>
</html>