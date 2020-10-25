<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H3 opdracht 6</title>
    <style>
        body {
            text-align: center;

        }

        p {
            font-weight: bold;
            color: red;
            margin: -2px;
        }
    </style>


</head>
<body>
<?php
$leeftijd = 12;
$kosten = 10;
for ($leeftijd = 0; $leeftijd <= 100; $leeftijd++) {
    if ($leeftijd > 65) {
        $bedrag = $kosten / 2;
        echo $leeftijd . " = " . $bedrag . "  euro <br>";
    }

    elseif ($leeftijd < 3) {
        $bedrag = "gratis";
        if ($leeftijd === 2) {
            echo "<p>" . $leeftijd . " = " . $bedrag . "</p>";
        } else {
            echo $leeftijd . " = " . $bedrag . "<br>";
        }
    }

    elseif ($leeftijd <= 12) {
        $bedrag = $kosten / 2;
        if($leeftijd === 10 || $leeftijd === 12) {
            echo "<p>" . $leeftijd . " = " . $bedrag . " euro </p>";
        }
        else{
            echo $leeftijd . " = " . $bedrag . " euro <br>";
        }


    } else {
        $bedrag = 10;
        if ($leeftijd === 65) {
            echo "<p>" . $leeftijd . " = " . $bedrag . " euro </p>";
        } else {

            echo $leeftijd . " = " . $bedrag . " euro <br>";
        }
    }

}

?>
<br><br>
<a href="index3.php"><< naar index hoofdstuk 3</a>

</body>
</html>


