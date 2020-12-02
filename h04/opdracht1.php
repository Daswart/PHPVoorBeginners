<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H4 opdracht 1</title>
    <style>
        #center {
            text-align: center;
            font-size: 30px;
        }

        a {
            position: fixed;

        }
    </style>
</head>
<body>
<a href="index.php"><< naar index hoofdstuk 4</a>
<div id="center">
    <?php

    //testen of de functie met meerdere getallen werkt, middels een for-loop
    //de loop loopt van -20 t/m 20 en laat de resultaat van de conversie ( van °C naar F°) zien.
    for ($x = -20; $x <= 20; $x++) {
        celsiusToFahrenheit($x);
    }

    // EIGEN GEMAAKTE FUNCTIE
    //functie die celsius omzet in fahrenheit
    function celsiusToFahrenheit($celsius)
    {
        $fahrenheit = $celsius / 5 * 9 + 32;
        echo $celsius . "°C" . " = " . $fahrenheit . "°F" . "<br>";
    }


    ?>
</div>
</body>
</html>