<?php
/*
PHP - INVIO MAIL TRAMITE SMTP GOOGLE GMAIL

1 - Creazione password per le App - Account Google

	- Google Account - sicurezza --> password per le app --> generare una password

2 - C:\xampp\sendmail\sendmail.ini:
	
	- smtp_server=smtp.gmail.com
	- smtp_port=587
	- smtp_ssl=tls
	- decommentare ;error_logfile=error.log
	- decommentare ;debug_logfile=debug.log
	- auth_username=*****@gmail.com
	- auth_password=***** --> generata al punto 1
	
3 - C:\xampp\php\php.ini:

	- commentare SMTP=localhost
	- commentare smtp_port=25
	- commentare sendmail_from
	- sendmail_path=C:\xampp\sendmail\sendmail.exe
	- controllare se attiva extension=php_openssl.dll

*/

$to = "to@gmail.com";
$from = "from@gmail.com";
$subject = "Invio mail di prova da PHP";
$message = "Invio mail di prova \nda PHP\nutilizzando il server SMTP di GMail.";
$headers = ['From' => $from];
mail($to, $subject, $message, $headers);
echo "OK";
?>

