<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H3 opdracht 8</title>
</head>
<body>
<?php
$kappersagenda["9.15"] = "Mevr. Pietersen";
$kappersagenda["9.30"] = "Mevr. Willems";
$kappersagenda["9.45"] = "";
$kappersagenda["10.00"] = "Paul van den Broek";
$kappersagenda["10.15"] = "Karel de Meeuw";
$kappersagenda["10.30"] = "";

print "Deze tijden zijn nog beschikbaar:<ul>";
foreach ($kappersagenda as $tijd => $afspraak)

    if ($afspraak == "") {
        print "<li>" . $tijd . "</li>";

    }


?>


</body>
</html>