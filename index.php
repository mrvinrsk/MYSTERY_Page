<?php
include_once "API/page/data.php";
?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $projectName ?> | Home</title>

    <link rel="stylesheet" href="index.css">
</head>
<body>

<?php
include_once "templates/navigator/navigator.php";
?>

<div id="page-container">
    <div id="title-container">
        <h1 id="page-title">Mystery</h1>
    </div>

    <div class="row" id="description">
        <div class="column">
            <p class="title">Learn</p>
            <p class="subtitle">
                With the help of our service, you're able to learn something about languages like HTML, JavaScript, PHP
                and more. If you can try not to use google and other help pages.
            </p>
        </div>

        <div class="column">
            <p class="title">Think</p>
            <p class="subtitle">
                We have a lot of different quizzes with different techniques each.
                <!-- Synonym f. 'different' suchen -->
                No puzzle is like the other, so you have to think about each quiz on it's own.
                At the moment there are no hints aviable.
            </p>
        </div>

        <div class="column">
            <p class="title">Solve</p>
            <p class="subtitle">
                Every quiz has been tested for the possibility to get solved, so we can guarantee that you may find the
                right solution if you have the needed knowledge and search at the right place. Don't get confused by our
                tricks.
            </p>
        </div>
    </div>
</div>

</body>
</html>
