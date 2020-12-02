<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H6 opdracht 1</title>
    <style>
        table, tr, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;

        }

        }
        th {
            width: 40px;

        }

    </style>
</head>
<body>
<table>
    <!-- host en port veranderen van lokaal naar online bij uploaden naar online server-->
    <?php
    //$host = 'sql310.epizy.com';
    //$port = '3306';
    $host = 'localhost';
    $port = '3308';
    $dbname = 'epiz_27085898_phpschool';
    $username = 'epiz_27085898';
    $password = '1LsB0MNENwmpcf';


    //proberen connectie maken met de database via het object PDO.
    try {
        $conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';port=' . $port, $username, $password);
        //echo "Connected successfully";

        //laat dit zien bij het niet kunnen maken van de connectie
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    //stukje veiligheid bereid de database op wat gaat komen met een prepare.
    $statement = $conn->prepare("SELECT * FROM cursist") or die ("Error 1.");

    //database mag de query uitvoeren
    $statement->execute() or die ("Error 2.");


    echo '<tr><th>cursistnummer</th>
<th>naam</th>
<th>roepnaam</th>
<th>straat</th>
<th>postcode</th>
<th>plaats</th>
<th>geslacht</th>
<th>geb_datum</th>
</tr>';
    while ($row = $statement->fetch()) {
        echo '<tr>';
        echo '<td>' . $row['cursistnr'] . '</td>';
        echo '<td>' . $row['naam'] . '</td>';
        echo '<td>' . $row['roepnaam'] . '</td>';
        echo '<td>' . $row['straat'] . '</td>';
        echo '<td>' . $row['postcode'] . '</td>';
        echo '<td>' . $row['plaats'] . '</td>';
        echo '<td>' . $row['geslacht'] . '</td>';
        echo '<td>' . $row['geb_datum'] . '</td>';
        echo '</tr>';
    }
    ?>
</table>
<br>
<a href="index.php"><< naar index hoofdstuk 6</a>


</body>
</html>