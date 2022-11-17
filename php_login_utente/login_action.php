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
    
    
    $email_user = $conn -> real_escape_string($_POST["email"]);
    $password_user = $conn -> real_escape_string($_POST["password"]);

    $sql = "SELECT id_utente, nome, password from UTENTI where email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email_user);
    $stmt->execute();

    $stmt->bind_result($out_id, $out_nome, $out_password);

    while ($stmt->fetch()) {
        if($password_user === $out_password){
            echo "Accesso effettuato per l'utente " .$out_nome;
            $_SESSION["logged"] = true;
            $_SESSION["email"] = $email_user;
            $_SESSION["id"] = $out_id;
            $_SESSION["nome"] = $out_nome;
        } else {
            echo "Username o password non valide";
        }
    }
    $stmt->close();
    $conn->close();

?>