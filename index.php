<?php
include "footer.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Internal links -->
    <link rel="stylesheet" href="main.css">

    <!-- External links -->
    
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- Google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <header>
        <h1>AutoShop<h1>
        <div class="wyszukiwarka">
            <input class="wyszukiwarka-pole">
            <button class="wyszukiwarka-button material-symbols-outlined">search</button>
        </div>
    </header>
    <main>
        <section class="promocje"></section>
        <section class="ogloszenia"></section>
    </main>
    <?php footer(); ?>
</body>
</html>