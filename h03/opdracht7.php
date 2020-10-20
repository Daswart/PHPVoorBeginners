<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H3 opdracht 7</title>
    <style>
        img {

            width: 20px;
            height: 20px;

        }

        table, tr, td{
            border-collapse: collapse;
        }

        td {
            padding: 2px 45px 2px 8px;
        }

        .border {
            border: 1px solid gray;


        }

    </style>
</head>
<body>
<?php

$zwemclubs["de spartelkuikens "] = 25;
$zwemclubs["de waterbuffels "] = 32;
$zwemclubs["Plonsmderin"] = 11;
$zwemclubs["Bommetje"] = 23;

echo "<table>";
foreach ($zwemclubs as $zwemclub => $aantaalLeden) {
    echo "<tr>";
    echo "<td class='border'>" . $zwemclub . "</td>";
    echo "<td class='border'>" . $aantaalLeden . "</td>";
    $aantalPlaatjes = floor($aantaalLeden / 5);
    echo "<td>";
    for ($i = 0; $i < $aantalPlaatjes; $i++) {
        echo "<img src='../img/zwemmer.jpg' alt='plaatje van zwemmer'>";
    }
    echo "</td>";
    echo "<tr>";


}
"</table>";


?>


<?php
/*$zwemclubs["De spartelkuikens"] = 25;
$zwemclubs["De waterbuffels"] = 32;
$zwemclubs["Plonsmderin"] = 11;
$zwemclubs["Bommetje"] = 23;

foreach ($zwemclubs as $zwemclub => $aantalLeden) {
    if ($aantalLeden >= 5 && $aantalLeden < 10) {
        echo $zwemclub . " " . $aantalLeden . "";
    } elseif ($aantalLeden >= 10 && $aantalLeden < 15) {
        echo $zwemclub . " " . $aantalLeden . " ";
        for ($i = 0; $i < 2; $i++) {
            echo "<img src='../img/zwemmer.jpg'>";
            if($i == 1 ){
                echo "<br>";
            }
        }
    } elseif ($aantalLeden >= 15 && $aantalLeden < 20) {
        echo $zwemclub . " " . $aantalLeden . " ";
        for ($i = 0; $i < 3; $i++) {
            echo "<img src='../img/zwemmer.jpg'>";
        }
    } elseif ($aantalLeden >= 20 && $aantalLeden < 25) {
        echo $zwemclub . " " . $aantalLeden . " ";
        for ($i = 0; $i < 4; $i++) {
            echo "<img src='../img/zwemmer.jpg'>";
        }
    } elseif ($aantalLeden >= 25 && $aantalLeden < 30) {
        echo $zwemclub . " " . $aantalLeden . " ";
        for ($i = 0; $i < 5; $i++) {
            echo "<img src='../img/zwemmer.jpg'>";
        }
    } elseif ($aantalLeden >= 30) {
        echo $zwemclub . " " . $aantalLeden . " ";
        for ($i = 0; $i < 6; $i++) {
            echo "<img src='../img/zwemmer.jpg'>";
        }
    } else {
        echo "niks";
    }

}*/
?>


</body>
</html>
