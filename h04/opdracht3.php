<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H4 opdracht 3</title>
    <style>
        body{
            text-align: center;
            font-size: 30px;
        }
    </style>
</head>
<body>
<?php
echo reverseString("Daan");



function reverseString($string){
$stringlength = strlen($string);
$reversedString = "";
for($i = $stringlength - 1; $i >= 0; $i--){
    $reversedString .= substr($string, $i, 1);

}

    return $reversedString;
}

?>

</body>
</html>