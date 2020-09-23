<?php
session_start();

include_once "../API/SQL/mysql_account.php";
include_once "../API/SQL/mysql_api.php";
include_once "../API/page/data.php";

$sql = new MySQLAPI($conn);

function logMessage($message)
{
    echo "<div class='step'>SETUP >  " . $message . "</div>";
}

?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mystery | Setup</title>

    <link rel="stylesheet" href="index.css">
</head>
<body>

<?php
$sql->execute("CREATE TABLE IF NOT EXISTS Users(ID int AUTO_INCREMENT PRIMARY KEY, Mail VARCHAR(100), Password VARCHAR(164));");
logMessage("Die Tabelle 'Users' wurde erstellt, falls Sie noch nicht existiert hat. Außerdem wurde ggf. der Primärschlüssel gesetzt.");

$quiz = $sql->execute("CREATE TABLE IF NOT EXISTS Quiz(ID int AUTO_INCREMENT PRIMARY KEY, Displayname VARCHAR(100), Difficulty int);");
logMessage("Die Tabelle 'Quiz' wurde erstellt, falls Sie noch nicht existiert hat.");
?>

</body>
</html>