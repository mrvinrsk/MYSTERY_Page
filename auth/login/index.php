<?php
session_start();

include_once "../../API/SQL/mysql_account.php";
include_once "../../API/SQL/mysql_api.php";
include_once "../../API/page/data.php";

$sql = new MySQLAPI($conn);

if (isset($_SESSION['userid'])) {
    header("Location: ../../");
}
?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $projectName ?> | Login</title>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../form.css">
</head>
<body>

<?php
include_once "../../templates/navigator/navigator.php";
?>

<form action="backend.php" method="post">
    <div id="title-container">
        <span id="title">Login</span></br>
        <span id="subtitle">Create an Account. This helps us to save your progress.</span></br>
    </div>

    <input type="text" placeholder="E-Mail" name="mail"><br>
    <input type="password" placeholder="Password" name="password"><br>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>
