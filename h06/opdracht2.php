<?php


//Login gegevens die in de database staan
//piet@worldonline.nl - doetje123
//klaas@carpets.nl - snoepje777
//truushendriks@wegweg.nl - arkiearkie201

session_start();
//$host = 'sql310.epizy.com';
//$port = '3306';
$host = 'localhost';
$port = '3308';
$dbname = 'epiz_27085898_phpschool';
$username = 'epiz_27085898';
$password = '1LsB0MNENwmpcf';
$message = "";

try {
    $connect = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';port=' . $port, $username, $password);

    if (isset($_POST["submit"])) {

        if (empty($_POST["username"]) || empty($_POST["password"])) {
            $message = "<label class='required'>Alle velden moeten ingevuld worden</label>";


        } else {
            $query = "SELECT * FROM users WHERE username = :username AND password = :password";
            $statement = $connect->prepare($query);
            $statement->execute(
                array(
                    'username' => $_POST["username"],
                    'password' => $_POST["password"]

                )
            );
            $count = $statement->rowCount();
            if($count > 0){
                $_SESSION['username'] = $_POST['username'];
                header("location:login_succes.php");
            }
            else{
                $message = '<label class="required">Sorry, geen toegang!</label>';
            }
        }

    }
} catch (PDOException $error) {
    $message = $error->getMessage();
}
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>H06 Opdracht 2</title>
    </head>
    <style>
        body {
            text-align: center;
        }
        form{

        }
        table, tr, td{
            margin: 0 auto 0 auto;
            text-align: left;


        }
        td{
            padding: 3px;
        }
        .required{
            color: red;
            font-weight: bolder;



        }
    </style>
    <body>
    <?php
    if (isset($message)){
        echo $message;
    }
    ?>

    <form  method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="username"></td>
            </tr>


            <tr>
                <td>Password:</td>
                <td> <input type="password" name="password" placeholder="password"></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit" name="submit" value="">Verzenden</button></td>
            </tr>

        </table>

    </form>
    <ul>
        <li></li>
        <li></li>
        <li></li>
    </ul>


    </body>


    </html>
<?php










?>