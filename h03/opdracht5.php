<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H3 opdracht 5</title>
    <style>
        body{
            text-align: center;
        }
        .rood{
            border: 5px solid red;
        }
        .groen{
            border: 5px solid green;
        }
        img:hover{
            opacity: 0.7;
            
        }
    </style>
</head>
        
<body>
<?php


for ($i = 1; $i <= 9; $i++){
    if($i % 2 == 0){
        echo " <img class = 'rood' src='../img/kat".$i.".jpg'>";
    }
    else{
        echo " <img class = 'groen' src='../img/kat".$i.".jpg'>";
    }

}

?>

</body>
</html>