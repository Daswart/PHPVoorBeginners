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
    <title>Opdracht 5</title>
    <style>
        div {
            color: red;
        }
    </style>
</head>
<body>
<!--//WANNEER ER NOG NIET OP DE KNOP IS GEDRUKT -->
<?php if (!isset($_POST['knop'])) { ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Email: <input type="Email" name="emailadres" value=""><br>
        Wachtwoord: <input type="password" name="wachtwoord" value=""><br>
        <input type="submit" name="knop" value="Verstuur">


    </form>

    <?php if (isset($_SESSION['error']) and !empty($_SESSION['error'])) {
        echo $_SESSION['error'];
        $_SESSION['error'] = null;

    }

    ?>
    <?php
    //ALS ER OP DE KNOP IS GEDRUKT >
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

//functie die de gegevens checkt (en variabelen als argumenten accepteert en een boolean teruggeeft.
    function check_credantials($emailadres, $wachtwoord)
    {   //de array users global zetten zodat ie ook binnen een functie gebruikt kan worden
        global $users;
        //Loopen door de array users met geldige  inloggegevens (dus een email en wachtwoord)
        foreach ($users as $userEmail => $userWachtwoord) {

            //bij een match van email en wachtwoord return true
            if ($userEmail == $emailadres and $userWachtwoord = $wachtwoord) {
                return true;
            }
        }
        //bij een verkeerde match van email return false
        return false;
    }

    if (check_credantials($emailadres, $wachtwoord) == true) {
        exit("Welkom!");
    } else {
        exit("Sorry geen toegang!");
    }


}
?>


</body>
</html>