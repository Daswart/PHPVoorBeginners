<?php
session_start();
if(isset($_SESSION["username"])){
    echo '<h3>Welkom  '.$_SESSION["username"] . '</h3> ';
    echo '<br><br><a href="logout.php">Logout</a>';
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
}
else{
    header("location:opdracht2.php");

}
