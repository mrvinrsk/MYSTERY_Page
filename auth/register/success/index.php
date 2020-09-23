<?php
session_start();

if (isset($_SESSION['userid'])) {
    echo "Your account got created successfully! You'll get redirected soon.";
    echo "Deine ID: " . $_SESSION['userid'];

    header_remove();
    header("Location: ../../../quizzes/");
} else {
    header("Location: ../");
}
?>