<?php
     try{
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "videos_db";
        $port = 3306;
        $charset = "utf8mb4";

        $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname;port=$port;charset=$charset", $dbuser, $dbpass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } catch (PDOException $e) {
        echo "Errore: ". $e->getMessage() . "<br>";
        die();
     }
     echo "connessione avvenuta con successo <br><br>";

     $sql = "SELECT id_autore, nome_autore, cognome_autore from autori";

     foreach ($dbh->query($sql) as $row){
        echo "Id Autore: ". $row["id_autore"] . ", Nome: " . $row["nome_autore"] . ", Cognome: ".$row["cognome_autore"]."<br>";
     }

?>