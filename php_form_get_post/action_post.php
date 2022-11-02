<?php
if(isset($_POST["nome"])){
    echo "Nome: " . $_POST["nome"] . "<br /><br />";
}
if(isset($_POST["email"])){
    echo "E-mail: " . $_POST["email"] . "<br /><br />";
}
if(isset($_POST["msg"])){
    echo "Testo del messaggio: " . $_POST["msg"] . "<br /><br />";
}
?>