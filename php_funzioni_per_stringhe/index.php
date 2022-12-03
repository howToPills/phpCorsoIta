<?php
echo "<h1>Funzioni pi&ugrave; utilizzate sulle stringhe</h1><br><br>";

echo "<b>strlen - lunghezza di una stringa</b><br>";
$stringa = "Giovanni va a lavoro in motorino";
echo "La lunghezza della stringa $stringa e': " .strlen($stringa);
echo "<br></br>";

echo "<b>substr - prendere porzioni di una stringa</b><br>";
$data = "01/12/2022";
echo "Data: " . $data . "<br>"; 
$giorno = substr($data, 0, 2);
echo "Giorno: " . $giorno . "<br>";
$mese = substr($data, 3, 2);
echo "Mese: " . $mese . "<br>";
$anno = substr($data, 6);
echo "Anno: " . $anno . "<br>";
echo "<br></br>";

echo "<b>strpos - posizione di inizio di una stringa all'interno di un'altra</b><br>";
$stringa = "Il motorino di Giovanni raggiunge i 90 km/h";
$daRicercare = "90";
echo "Posizione del valore $daRicercare all'interno della stringa $stringa: " . strpos($stringa, $daRicercare);
$daRicercare = "80";
echo "<bR>Posizione del valore $daRicercare all'interno della stringa $stringa: " . strpos($stringa, $daRicercare);

echo "<br></br>";

echo "<b>strrev - stringa al contrario</b><br>";
echo "La stringa $stringa al contrario vale: " . strrev($stringa);
echo "<br></br>";

echo "<b>str_replace - sostituzione di una o più occorrenze all'interno di una o più stringhe</b><br>";
echo str_replace("Giovanni","Andrea", $stringa)."<br>";
echo str_replace(array("Giovanni","90"), array("Marco", "120"), $stringa);
echo "<br></br>";

echo "<b>explode - suddivisione di una stringa in un array di stringhe in base ad un carattere specifico</b><br>";
$carattere = "/";
$elementi = explode($carattere, $data);
echo var_export($elementi, true);
echo "<br></br>";

echo "<b>strtoupper e strtolower - rispettivamente rendono tutta maiuscola o tutta minuscola una stringa</b><br>";
echo strtoupper($stringa) . "<br>";
echo strtolower($stringa) . "<br>";
echo "<br></br>";

echo "<b>trim, ltrim, rtrim - rispettivamente tolgono gli spazi in testa e in coda, solo in testa, solo in coda, ad una stringa</b><br>";
$stringa = "    Test Stringa    ";
echo "..." .$stringa ."...<br>";
echo "..." .trim($stringa) ."...<br>";
echo "..." .ltrim($stringa) ."...<br>";
echo "..." .rtrim($stringa) ."...<br>";
echo "<br></br>";

echo "<b>strcmp - comparazione di 2 stringhe</b><br>";
$stringa1 = "Il motorino di Giovanni";
$stringa2 = "Il motorino di Giovanni";
if(strcmp($stringa1, $stringa2) == 0){
    echo "$stringa1 uguale a $stringa2";
} else {
    echo "$stringa1 diverso da $stringa2";
}
echo "<br></br>";

?>