<?php
session_start();
if(isset($_SESSION["username"])){
    echo '<h3>Welkom  '.$_SESSION["username"] . '</h3> ';
    echo '<br><br><a href="logout.php">Logout</a>';
}
else{
    header("location:opdracht2.php");
}
?>