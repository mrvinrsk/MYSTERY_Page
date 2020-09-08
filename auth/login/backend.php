<?php
if (isset($_POST['login'])) {
    include_once "../../API/SQL/mysql_account.php";
    include_once "../../API/SQL/mysql_api.php";
    include_once "../../API/page/data.php";

    $sql = new MySQLAPI($conn);

    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $query = "SELECT * FROM User WHERE Mail='$mail'";
    $foundAccounts = $sql->rows($query);
    if ($foundAccounts == 1) {
        // ACCOUNT GEFUNDEN
        $userAccount = $sql->result($query);

        if (password_verify($password, $userAccount['Password'])) {
            // RICHTIGES PASSWORT
        }else {
            // FALSCHES PASSWORT
        }
    }else {
        // KEIN ACCOUNT GEFUNDEN
    }
} else {
    header("Location: index.php");
}