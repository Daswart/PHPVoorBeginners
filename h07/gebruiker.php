<?php
session_start();

if(isset($_SESSION["user"])){
    echo "<h1> Welkom " .$_SESSION["user"]['naam'] . " op de website </h1>";
    echo "<a href='opdracht1.php'><< Terug naar de hoofdpagina</a>";


}
else{
    header("location: login.php");

}
