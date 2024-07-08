
<link href="css/bootstrap.css" rel="stylesheet">

<style>
    html,
    body {
      height: 100%;
    }

    body {
      display: flex;
      background-color: #99a6f5;
    }

    h4 {
      padding: 10px;
    }
  </style>
<?php


    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "videos_db";
    
    $conn = new mysqli($servername, $username, $password, $db);
    
        if($conn->connect_error){
            die("Connessione fallita: " . $conn->connect_error);
        }
    
    $emailAddress = $conn -> real_escape_string($_POST["emailAddress"]);
    $nomeCognome = $conn -> real_escape_string($_POST["nomeCognome"]);
    $richiesta = $conn -> real_escape_string($_POST["richiesta"]);

    $sql = "INSERT INTO richieste_utenti (nome_cognome, mail, testo_richiesta) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nomeCognome, $emailAddress, $richiesta);
    $stmt->execute();

    $to = $emailAddress;
    $from = "howtopills@gmail.com";
    $subject = "Richiesta inviata correttamente";
    $message = "La tua richiesta e' stata ricevuta in maniera corretta, sarai contattato dal nostro team al piu' presto.";
    $headers = ['From' => $from];
    mail($to, $subject, $message, $headers);

    echo "<h4>Grazie per aver inviato la tua richiesta, ti risponderemo il prima possibile.</h4>";
    $stmt->close();
    $conn->close();

?>