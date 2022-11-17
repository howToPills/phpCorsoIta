<?php

function send_mail_user($nome_user, $email_user){
    $subject = "Registrazione avvenuta con successo";

    $message = "<b>Ciao ".$nome_user."</b>\n";
    $message .= "<h1>Registrazione avvenuta con successo!</h1>";

    $header = "From:howtopills@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html";

    $retval = mail($email_user,$subject,$message,$header);
    if($retval == true){
        echo "<h1>Registrazione avvenuta con successo!</h1>";
    } else {
        echo "Impossibile inviare il messaggio";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$db = "videos_db";

$conn = new mysqli($servername, $username, $password, $db);

    if($conn->connect_error){
        die("Connessione fallita: " . $conn->connect_error);
    }

$nome_user = $conn -> real_escape_string($_POST["nome"]);
$email_user = $conn -> real_escape_string($_POST["email"]);
$password_user = $conn -> real_escape_string($_POST["password"]);

$sql = "INSERT INTO UTENTI (nome, email, password) VALUES (?,?,?)";
$stmt = $conn -> prepare($sql);
$stmt->bind_param('sss',$nome_user, $email_user, $password_user);

$stmt->execute();
$stmt->close();
$conn->close();

send_mail_user($nome_user, $email_user);



?>