<!doctype html>


<?php
$websiteAdmin = '';
$message = 'Inloggen';
$websiteGebruiker = '';
$error = '';
$uitloggen = '';



session_start();

$users = array(
    "Daan" => array("password" => "1234", "rol" => "Administrator"),
    "Laura" => array("password" => "1235", "rol" => "gebruiker"),
    "Alexander" => array("password" => "1236", "rol" => "Administrator"),
);




if (isset($_GET["loguit"])) {
    session_destroy();
}
//Als er op de knop verzenden is gedrukt is gedrukt en de waarde username en array $users bestaat.
if (isset($_POST["submit"])){

    if(empty($_POST["username"]) or empty($_POST["password"])){
        $message = 'Inloggen';
        $error = "<p style='color: red'>Alle velden moeten worden ingevuld</p>";
    }
    else{
        if(isset($users[$_POST["username"]])) {



            //Wanneer gebruikersnaam en wachtwoord overeenkomen komt er te staan dat je bent ingelogd (met links naar de website)
            if ($users[$_POST["username"]]["password"] == $_POST["password"]) {
                $_SESSION['user'] =
                    array("naam" => $_POST['username'],
                        "password" => $users[$_POST["username"]]["password"],
                        "rol" => $users[$_POST["username"]]['rol']
                    );
                $message = "Welkom " . $_SESSION['user']["naam"] . " met de rol <span style='color: red'>" . $_SESSION['user']["rol"] . "</span>";

                //anders dan janjaap, linkjes verschijnen pas bij een succesvolle login
                $websiteGebruiker = "<br><a href= 'gebruiker.php?loguit'>naar de website >></a>";
                $websiteAdmin = "<br><a href= 'administrator.php?loguit'>naar de adminwebsite >></a>";
                echo "<a href='opdracht1.php?loguit'>uitloggen</a>";
            } //Wanneer gebruikersnaam en wachtwoord niet overeenkomen.
            else {
                //Waneeer er geen password is ingevoerd.

                if(empty($_POST["password"])){
                    $error = "<p style='color: red'>Alle velden moeten worden ingevuld</p>";
                }
                //Als er wel een password is ingevoerd maar niet de juiste
                else{
                    $message = 'Inloggen';
                    $error = "<p style='color: red'>Naam en wachtwoord zijn onbekend!</p>";
                }





            }
        }
        else{

            $error = "<p style='color: red'>Naam en wachtwoord zijn onbekend!</p>";
        }

    }








}
//Als er nog geen gegevens door zijn gekomen in de $users array
else {
    //De sessie array is niet leeg dus je blijft ingelogd
    if (!empty($_SESSION)) {
        $message = "Welkom " . $_SESSION['user']["naam"] . ", je bent nog steeds ingelogd</span>";
        $websiteGebruiker = "<a href= 'gebruiker.php?loguit'>naar de website >></a><br>";
        $websiteAdmin = "<a href= 'administrator.php?loguit'>naar de adminwebsite >></a><br>";
        $uitloggen =  "<a href='opdracht1.php?loguit'>uitloggen</a>";


    }
    //Wanneer de sessie array leeg is staat er inloggen en is er niemand ingelogd.
    else {
        $message = 'Inloggen';
    }


}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H07 Opdracht 1</title>
    <style>
        /*body {*/
        /*    text-align: center;*/
        /*}*/

        /*table {*/
        /*    margin: 0 auto 0 auto;*/
        /*    text-align: left;*/

        /*}*/

        /*td {*/
        /*    padding: 5px;*/
        /*}*/
        a {
            position: relative;
            top: -16px;
        }

    </style>
</head>
<body>
<h2><?php echo $message; ?></h2>
<?php echo $error; ?>
<?php echo $websiteGebruiker; ?>
<?php echo $websiteAdmin; ?>
<?php echo $uitloggen; ?>


<?php if (empty($_SESSION)) { ?>
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
<br>



<br><br>
<a href="index.php"><< naar index hoofdstuk 7</a>


</body>


</html>
