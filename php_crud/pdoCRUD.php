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

     echo "<br><br>";

     $sql = "INSERT INTO autori (nome_autore, cognome_autore) VALUES (:nome_autore, :cognome_autore)";
     $pdo_statement = $dbh->prepare($sql);
     $result = $pdo_statement->execute( array(':nome_autore'=>"Giovanni", 'cognome_autore'=>"Bianchi") );

     $sql = "SELECT id_autore, nome_autore, cognome_autore from autori";

     foreach ($dbh->query($sql) as $row){
        echo "Id Autore: ". $row["id_autore"] . ", Nome: " . $row["nome_autore"] . ", Cognome: ".$row["cognome_autore"]."<br>";
     }

     $sql = "UPDATE autori set cognome_autore = :cognome_autore WHERE cognome_autore = :cognome_old AND nome_autore = :nome_old";
     $pdo_statement = $dbh->prepare($sql);
     $result = $pdo_statement->execute( array(':cognome_autore'=>"Neri", 'cognome_old'=>"Bianchi", 'nome_old'=>"Giovanni") );

     echo "<br><br>";

     $sql = "SELECT id_autore, nome_autore, cognome_autore from autori";

     foreach ($dbh->query($sql) as $row){
        echo "Id Autore: ". $row["id_autore"] . ", Nome: " . $row["nome_autore"] . ", Cognome: ".$row["cognome_autore"]."<br>";
     }

     $sql = "DELETE from autori where cognome_autore = :cognome_autore AND nome_autore = :nome_autore";
     $pdo_statement = $dbh->prepare($sql);
     $result = $pdo_statement->execute( array(':cognome_autore'=>"Neri", 'nome_autore'=>"Giovanni") );

     echo "<br><br>";

     $sql = "SELECT id_autore, nome_autore, cognome_autore from autori";

     foreach ($dbh->query($sql) as $row){
        echo "Id Autore: ". $row["id_autore"] . ", Nome: " . $row["nome_autore"] . ", Cognome: ".$row["cognome_autore"]."<br>";
     }
?>