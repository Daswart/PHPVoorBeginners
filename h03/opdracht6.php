<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H3 opdracht 6</title>


</head>
<body>
<?php
$leeftijd = 12;
$kosten = 10;
if ($leeftijd > 65) {
    $bedrag = $kosten / 2;
    echo $leeftijd . " = " . $bedrag . "  euro";
} elseif ($leeftijd < 3) {
    $bedrag = 0;
    echo $leeftijd . " = " . $bedrag . " euro";
} elseif ($leeftijd <= 12) {
    $bedrag = $kosten / 2;
    echo $leeftijd . " = " . $bedrag . " euro";
} else {
    $bedrag = 10;
    echo $leeftijd . " = " . $bedrag . " euro";
}
?>
<br><br>
<a href="index3.php"><< naar index hoofdstuk 3</a>

</body>
</html>


