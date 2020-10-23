<?php
if ($_POST["naam"] == "") {
    echo 'je moet je naam nog invullen' . "<br>";
    echo "<a href='opdracht2.html'>terug naar het formulier</a> <br>";
} else {
    echo $_POST["naam"] . "<br>";

}

if ($_POST["adres"] == "") {
    echo 'je moet je adres nog invullen'. "<br>";
    echo "<a href='opdracht2.html'>terug naar het formulier</a> <br>";
} else {
    echo $_POST["adres"] . "<br>";

}

if ($_POST["email"] == "") {
    echo 'je moet je email nog invullen' . "<br>";
    echo "<a href='opdracht2.html'>terug naar het formulier</a> <br>";
} else {
    echo $_POST["email"] . "<br>";

}
if ($_POST["wachtwoord"] == "") {
    echo 'je moet je wachtwoord nog invullen' . "<br>";
    echo "<a href='opdracht2.html'>terug naar het formulier</a> <br>";
}

