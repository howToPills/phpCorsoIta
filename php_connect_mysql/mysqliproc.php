<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "videos_db";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        die("Connessione fallita: " . mysqli_connect_error());
    }

    echo "connessione avvenuta con successo.";

    echo "<br><br>";

    $sql = "SELECT id_autore, nome_autore, cognome_autore from autori";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "Id Autore: ". $row["id_autore"] . ", Nome: " . $row["nome_autore"] . ", Cognome: ".$row["cognome_autore"]."<br>";
        }

    } else {
        echo "Nessuna riga presente.";
    }
?>