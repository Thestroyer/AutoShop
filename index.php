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
    <h1>AutoShop</h1>
    <header>
        <div class="wyszukiwarka">
            <input class="wyszukiwarka-pole">
            <button class="wyszukiwarka-button material-symbols-outlined">search</button>
        </div>
        <button class="koszyk material-symbols-outlined">shopping_cart</button>
    </header>
    <main>
        <section class="promocje">
            <div class="card">
                <div class="card-image"><img src="images/a2.jpg" alt="" srcset=""></div>
                <div class="card-title">Audi A2</div>
                <div class="card-price">60 000</div>
                <div class="card-price-old">65 000</div>
            </div>
            <div class="card">
                <div class="card-image"><img src="images/civic.jpg" alt="" srcset=""></div>
                <div class="card-title">Honda Civic</div>
                <div class="card-price">20 000</div>
                <div class="card-price-old">25 000</div>
            </div>
            <div class="card">
                <div class="card-image"><img src="images/micra.jpg" alt="" srcset=""></div>
                <div class="card-title">Nissan Micra</div>
                <div class="card-price">30 000</div>
                <div class="card-price-old">35 000</div>
            </div>
        </section>
        <section class="ogloszenia"></section>
    </main>
</body>
</html>