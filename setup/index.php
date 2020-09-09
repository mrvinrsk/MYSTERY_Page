<?php
session_start();

include_once "../../API/SQL/mysql_account.php";
include_once "../../API/SQL/mysql_api.php";
include_once "../../API/page/data.php";

$sql = new MySQLAPI($conn);

if (isset($_SESSION['userid'])) {
    header("Location: ../../");
}

function log($message)
{
    echo "<div class='step'>SETUP >  " . $message . "</div>";
}




$user = $sql->rows("CREATE TABLE IF NOT EXISTS Users(ID int, )"); // TODO: FINISH



?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mystery | Setup</title>
</head>
<body>


</body>
</html>