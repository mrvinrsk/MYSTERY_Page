<?php
include_once "../../API/page/data.php";
?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="index.css">
</head>
<body>

<div id="container">
    <?php
    include_once "../../API/SQL/mysql_account.php";
    include_once "../../API/SQL/mysql_api.php";

    if ($conn !== null) {
        echo "The page was successfully connected to the database.";
    } else {
        echo "The Connection couldn't be established.";
    }
    ?>
</div>

</body>
</html>
