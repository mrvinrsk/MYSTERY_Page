<?php
session_start();

include_once "../../API/SQL/mysql_account.php";
include_once "../../API/SQL/mysql_api.php";
include_once "../../API/page/data.php";

$sql = new MySQLAPI($conn);

if (isset($_SESSION['userid'])) {
    header("Location: ../../");
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['register'])) {
    $mail = $_POST['mail'];
    $mail_confirm = $_POST['mail_confirm'];

    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];


    if ($mail === $mail_confirm) {
        if ($password === $password_confirm) {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            $sql->execute("INSERT INTO Users(Mail, Password) VALUES('" . $mail_confirm . "','" . $hashed_password . "');");
            $result = $sql->result("SELECT ID FROM Users WHERE Mail='" . $mail_confirm . "';");

            echo "Deine User-ID: " . $result;
            $_SESSION['userid'] = $result;

            header_remove();
            header("Location: ./success/");
        }
    }
}
?>