<?php
if ($_POST["naam"] == "" || $_POST["adres"] == "" || $_POST["email"] == "" || $_POST["wachtwoord"] == "") {
    echo '<script language="javascript">';
    echo 'alert("er zijn 1 of meerdere velden niet ingevuld")';
    echo '</script>';
    echo "<a href='opdracht2.html'><< Ga terug naar het formulier</a> <br>";
} else {
    echo $_POST["naam"] . "<br>";
    echo $_POST["adres"] . "<br>";
    echo $_POST["email"] . "<br>";


}



