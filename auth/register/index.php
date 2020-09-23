<?php
session_start();

include_once "../../API/page/data.php";

if (isset($_SESSION['userid'])) {
    header("Location: ../../quizzes/");
}
?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $projectName ?> | Register</title>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../auth.css">
</head>
<body>

<?php
include_once "../../templates/navigator/navigator.php";
?>

<form action="backend.php" method="post">
    <div id="title-container">
        <span id="title">Register</span></br>
        <span id="subtitle">Create an Account. This helps us to save your progress.</span></br>
    </div>

    <input type="text" placeholder="E-Mail" name="mail" value="<?php $email ?>"><br>
    <input type="text" placeholder="Confirm E-Mail" name="mail_confirm" value="<?php $email_confirm ?>"><br>
    <input type="password" placeholder="Password" name="password"><br>
    <input type="password" placeholder="Confirm Password" name="password_confirm"><br>

    <input type="submit" name="register" value="Register">
</form>

</body>
</html>
