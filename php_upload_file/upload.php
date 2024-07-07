<?php 
if(!isset($_FILES['usrFile']) || !is_uploaded_file($_FILES['usrFile']['tmp_name'])){
    echo "Nessun file caricato";
    exit;
}

$uploaddir = "C:\\xampp\\htdocs\\phpCorsoIta\\php_upload_file\\uploaded";

$userFile_tmp = $_FILES['usrFile']['tmp_name'];

$userFile_name = $_FILES['usrFile']['name'];

if(move_uploaded_file($userFile_tmp, $uploaddir ."\\". $userFile_name)){
    echo "File inviato con successo";
} else {
    echo "Problemi durante invio del file";
}
?>