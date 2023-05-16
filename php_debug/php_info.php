<?php

/*
1) Avviare XAMPP
2) Stampare il risultato della funzione phpinfo(), prendere tutta la pagina e copiarla
3) Posizionarsi su https://xdebug.org/wizard ed incollare nel riquadro quanto copiato in precedenza
4) Verrà proposta e scaricata una versione ad hoc di XDebug. Prenderla e posizionarla in C:\xampp\php\ext nominandola php_xdebug.dll (sovrascrivere quella eventualmente esistente)
5) In C:\xampp\php\php.ini aggiungere le seguenti righe:
	[XDebug]
        xdebug.remote_enable=1
        xdebug.remote_autostart=1
        xdebug.mode=debug
        xdebug.start_with_request=yes
        zend_extension=C:\xampp\php\ext\php_xdebug.dll
6) Riavviare Apache
7) Aprire Visual Studio Code e installare l'estensione PHP Debug
8) Creare una configurazione di lancio e testare se il tutto funziona.*/

    phpinfo();

?>