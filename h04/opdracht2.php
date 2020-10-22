<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H4 opdracht 2</title>
    <style>
        body{
            text-align: center;
            font-size: 30px;
        }
    </style>
</head>
<body>
<?php



//testen of de functie met meerdere getallen werkt, middels een for-loop
//de loop loopt van 0 tot 20 en checkt of die getallen deelbaar zijn door 3 en een resultaat wordt getoond.
for ($x = 0; $x <=20; $x++ ){
    if (checkIfDivisableBy3($x)){
        echo $x. " deelbaar door 3 <br>";
    }
    else{
        echo $x . " is NIET deelbaar door 3 <br>";
    }
}
//EIGEN GEMAAKTE FUNCTIE
//functie die checkt of een getal deelbaar is door 3
function checkIfDivisableBy3($number){
    if($number % 3 === 0){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}



?>
</body>
</html>