<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

    </style>
    <title>H3 opdracht 2</title>
</head>
<body>
<?php
 $katten = array('kat1.jpg', 'kat2.jpg', 'kat3.jpg', 'kat4.jpg', 'kat5.jpg', 'kat6.jpg', 'kat7.jpg', 'kat8.jpg', 'kat9.jpg');

 foreach ($katten as $kat){
    echo "<img src='../img/".$kat."'>";
 }
?>

</body>
</html>