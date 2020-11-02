<?php
session_start();
$users = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201",
    "daandeprogrammeur@hotmail.com" => "lekkerbezig!100"
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H05 Opdracht 5</title>
    <style>
        div {
            color: red;
        }
        table{
            margin: 0 auto 0 auto;
        }
    </style>
</head>
<body>
<?php if (!isset($_POST['knop'])) { ?>
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
    <?php if (isset($_SESSION['error']) and !empty($_SESSION['error'])) {
        echo $_SESSION['error'];
        $_SESSION['error'] = null;

    }

    ?>
    <?php
} else {
    //kijken of een variabel bestaat of leeg is (valideren gegevens)
    //!isset (false) om te kijken of het bestaat, empty om te kijken of het leeg is
    if (!isset($_POST["emailadres"]) or empty($_POST["emailadres"])) {
        $_SESSION['error'] = "je bent vergeten je email-adres in te vullen.";
        header("Location:" . $_SERVER["PHP_SELF"]);

    }
    if (!isset($_POST["wachtwoord"]) or empty($_POST["wachtwoord"])) {
        $_SESSION['error'] = "je bent vergeten je wachtwoord in te vullen.";
        header("Location:" . $_SERVER["PHP_SELF"]);

    }
    //mailadres en wachtwoord opslaan in variabelen
    $emailadres = $_POST["emailadres"];
    $wachtwoord = $_POST["wachtwoord"];


    //Loopen door de array users met geldige  inloggegevens (dus een email en wachtwoord)
    foreach ($users as $userEmail => $userWachtwoord) {

        //bij een match van email en wachtwoord is de inlog succesvol en staat er 'Welkom' op het scherm
        if ($userEmail == $emailadres and $userWachtwoord = $wachtwoord) {
            exit("Welkom!");
        }
    }
    //bij een verkeerde match van email en wachtwoord is de inlog niet succesvol en ziew we 'Sorry! Geen toegan!'
    exit("Sorry! Geen toegang!");
}
?>


</body>
</html>