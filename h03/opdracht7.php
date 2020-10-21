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
        table{

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
        a{
            position: relative;
            top: 150px;

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
<a href="index3.php"><< naar index hoofdstuk 3</a>







</body>
</html>
