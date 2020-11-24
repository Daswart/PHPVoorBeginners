<?php
session_start();



if(isset($_SESSION["user"]) && $_SESSION['user']["rol"] == "Administrator") {
    echo "<h1> Welkom " .$_SESSION["user"]["naam"] . " op de het admingedeelte van de website </h1>";
    echo "<a href='opdracht1.php'><< Terug naar de hoofdpagina</a>";

    }
else{

        header('location: noAdmin.php');


}
