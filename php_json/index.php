<script type="text/javascript">
    var content = [
    {
        "marchio": "Pagani",
        "nome": "Huayra",
        "velocitaMax": 340,
        "motoreElettrico": false,
        "colore": "rosso"
    },
    {
        "marchio": "Lamborghini",
        "nome": "Huracan",
        "velocitaMax": 360,
        "motoreElettrico": false,
        "colore": "giallo"
    },
    {
        "marchio": "Tesla",
        "nome": "Model S",
        "velocitaMax": 280,
        "motoreElettrico": true,
        "colore": "bianco"
    }
];

//console.log(content);

console.log(content[2].velocitaMax);
</script>

<?php

    $file = "supercar.json";
    $data = file_get_contents($file);
    $obj = json_decode($data);
    echo $obj[0]->nome;
?>