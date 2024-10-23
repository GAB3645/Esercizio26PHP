<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>
</head>
<body>

    <?php

    $nome = $_GET["nome"];
    $cognome = $_GET["cognome"];
    $data = $_GET["data"];
    $orario = $_GET["orario"];
    $mezzo = $_GET["mezzo"];

    $corsi = array();

    if(isset($_GET["corso1"])){
        array_push($corsi, $_GET["corso1"]);
    }
    if(isset($_GET["corso2"])){
        array_push($corsi, $_GET["corso2"]);
    }
    if(isset($_GET["corso3"])){
        array_push($corsi, $_GET["corso3"]);
    }


    echo "<table style='border: 1px solid black; width: 100%; text-align: center'>
    <tr>
    <th>Nome</th>
    <th>Cognome</th>
    <th>Data di Nascita</th>
    <th>Orario di Arrivo a Casa</th>
    <th>Mezzo di Trasporto</th>
    <th>Corsi</th>
    </tr>";

    echo "
    <tr>
    <td>$nome</td>
    <td>$cognome</td>
    <td>$data</td>
    <td>$orario</td>
    <td>$mezzo</td>
    <td>";

    if(count($corsi) == 0){
        echo "Nessuna attività";
    }else{
        foreach($corsi as $corso){
            echo $corso . "<br>";
        }
    }
    
    echo "
    </td>

    </tr>";

    echo "</table>";

    ?>

    </body>
</html>

