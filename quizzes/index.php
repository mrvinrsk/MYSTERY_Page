<?php
session_start();

if ($_SESSION['userid']) {
    echo "Eingeloggt!";
} else {
    echo "Nicht eingeloggt!";
}
?>