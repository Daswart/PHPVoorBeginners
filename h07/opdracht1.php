<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H07 Opdracht 1</title>
    <style>
        body {
            text-align: center;
        }

        table {
            margin: 0 auto 0 auto;
            text-align: left;

        }

        td {
            padding: 5px;
        }

    </style>
</head>
<body>
<?php

if (!empty($_POST)) {

    if (!empty($_POST["username"] and !empty($_POST["password"]))){
        $naam = $_POST["username"];
        $password = $_POST["password"];

        echo "<h2>Welkom " .$naam . "</h2><hr>";
        echo "je wachtwoord is <b>". $password."</b> ";
        echo "<br><br><a href='".$_SERVER["PHP_SELF"] ."'>Opnieuw Inloggen</a>";

    }
    else{
        echo "<h2 style='color: red'>Niet alle velden zijn ingevuld</h2><hr>";
        echo "<br><br><a href='".$_SERVER["PHP_SELF"] ."'>Naar inlogpagina</a>";

    }


}
else {
?>

<h2>Inlogpagina</h2>
<hr>
<form name="formulier" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Wachtwoord:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Verzenden">
                <input type="reset" name="reset" value="Reset"</td>

        </tr>

    </table>
</form>
<?php } ?>

</body>


</html>
