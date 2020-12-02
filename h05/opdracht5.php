<?php
$message = "";

$users = array(
    "piet@worldonline.nl" => array("wachtwoord" => "doetje123"),
    "klaas@carpets.nl" => array("wachtwoord" => "snoepje777"),
    "truushendriks@wegweg.nl" => array("wachtwoord" => "arkiearkie201")
);
if (isset($_POST["knop"])){

    if(empty($_POST["emailadres"]) or empty($_POST["wachtwoord"])){
        $message = '<p style="color: red">Alle velden moeten worden ingevuld</p>';

    }
    else{
        if(isset($users[$_POST["emailadres"]])) {



            //Wanneer gebruikersnaam en wachtwoord overeenkomen komt er te staan dat je bent ingelogd (met links naar de website)
            if ($users[$_POST["emailadres"]]["wachtwoord"] == $_POST["wachtwoord"]) {

                $message = "<p>Welkom<p>";


            } //Wanneer gebruikersnaam en wachtwoord niet overeenkomen.
            else {
                //Waneeer er geen password is ingevoerd.

                if(empty($_POST["wachtwoord"])){
                    $message = "<p style='color: red'>Sorry, geen toegang!</p>";
                }
                //Als er wel een password is ingevoerd maar niet de juiste
                else{

                    $message = "<p style='color: red'>Sorry, geen toegang!</p>";
                }





            }
        }
        else{

            $message= "<p style='color: red'>Sorry, geen toegang!</p>";
        }

    }








}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title><style>

        table {
            margin: 0 auto 0 auto;
        }

        div {
            color: red;
            font-weight: bolder;
            text-align: center;

        }

        #center {
            font-weight: lighter;
            text-align: center;
        }

        #message {
            color: black;
        }

    </style>

</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <table>
        <tr>
            <td>Email:</td>
            <td><input type="Email" name="emailadres" value=""></td>
        </tr>
        <tr>
            <td>Wachtwoord:</td>
            <td><input type="password" name="wachtwoord" value=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="knop" value="Verstuur"></td>
        </tr>
    </table>
    <br>
    <br>


</form>
<div id="message">
    <?php echo $message; ?>
</div>


<div id="center">
    <br>
    <a href="index.php"><< naar index hoofdstuk 5</a>
    <br>

</div>
<br>

<table>
    <tr style="font-weight: bold">
        <td>De gegevens om in te loggen</td>
    </tr>
    <tr>
        <th>email</th>
        <th>wachtwoord</th>
    </tr>
    <tr>

        <td>piet@worldonline.nl</td>
        <td>doetje123</td>
    </tr>
    <tr>
        <td>klaas@carpets.nl</td>
        <td> snoepje777</td>
    </tr>
    <tr>
        <td>truushendriks@wegweg.nl</td>
        <td>arkiearkie201</td>
    </tr>
</table>

</body>
</html>