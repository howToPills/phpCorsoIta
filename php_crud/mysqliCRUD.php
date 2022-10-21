<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "videos_db";

    $conn = new mysqli($servername, $username, $password, $db);

    if($conn->connect_error){
        die("Connessione fallita: " . $conn->connect_error);
    }

    echo "connessione avvenuta con successo.";

    echo "<br><br>";

    $sql = "SELECT id_autore, nome_autore, cognome_autore from autori";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo "Id Autore: ". $row["id_autore"] . ", Nome: " . $row["nome_autore"] . ", Cognome: ".$row["cognome_autore"]."<br>";
        }

    } else {
        echo "Nessuna riga presente.";
    }

    echo "<br><br>";
    $result = $conn->query("INSERT INTO autori (nome_autore, cognome_autore) VALUES ('Giovanni', 'Bianchi')");

    $sql = "SELECT id_autore, nome_autore, cognome_autore from autori";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo "Id Autore: ". $row["id_autore"] . ", Nome: " . $row["nome_autore"] . ", Cognome: ".$row["cognome_autore"]."<br>";
        }

    } else {
        echo "Nessuna riga presente.";
    }

    echo "<br><br>";

    $result = $conn->query("UPDATE autori set cognome_autore = 'Neri' where nome_autore = 'Giovanni' and cognome_autore = 'Bianchi'");
    $sql = "SELECT id_autore, nome_autore, cognome_autore from autori";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo "Id Autore: ". $row["id_autore"] . ", Nome: " . $row["nome_autore"] . ", Cognome: ".$row["cognome_autore"]."<br>";
        }

    } else {
        echo "Nessuna riga presente.";
    }

    echo "<br><br>";
    
    $result = $conn->query("DELETE FROM autori where cognome_autore = 'Neri' and nome_autore = 'Giovanni'");
    $sql = "SELECT id_autore, nome_autore, cognome_autore from autori";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo "Id Autore: ". $row["id_autore"] . ", Nome: " . $row["nome_autore"] . ", Cognome: ".$row["cognome_autore"]."<br>";
        }

    } else {
        echo "Nessuna riga presente.";
    }

?>