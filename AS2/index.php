<?php
include("./parts/headerBanner.php"); // HEADER
include("./parts/footer.php"); // FOOTER
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Odwiedź AutoShop i odkryj bogatą ofertę samochodów nowych i używanych. Profesjonalne doradztwo, atrakcyjne ceny i gwarancja jakości. Znajdź swój wymarzony samochód już dziś!">
    <meta name="keywords" content="AutoShop dealer samochodowy, samochody nowe AutoShop, samochody używane AutoShop, najlepszy dealer aut, auta na sprzedaż, zakup samochodów, oferty samochodów nowych, oferty samochodów używanych, salon samochodowy AutoShop, finansowanie aut AutoShop, AutoShop serwis samochodowy, jazda próbna AutoShop, promocje dealer samochodowy, gwarancja na samochody AutoShop, AutoShop części zamienne, akcesoria samochodowe AutoShop, doradztwo w zakupie auta, AutoShop opinie klientów, bezpieczny zakup samochodu">
    <title>AutoShop</title>

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
    <?php headerBanner(); ?>



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
        <section>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo modi cum ad nemo natus vel alias a accusamus, praesentium totam. Ipsam, eos iusto voluptatum veritatis magni repellat natus sunt quam!</p>
        </section>

        <section>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo modi cum ad nemo natus vel alias a accusamus, praesentium totam. Ipsam, eos iusto voluptatum veritatis magni repellat natus sunt quam!</p>
        </section>

        <section>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo modi cum ad nemo natus vel alias a accusamus, praesentium totam. Ipsam, eos iusto voluptatum veritatis magni repellat natus sunt quam!</p>
        </section>
    </main>

    <?php footer(); ?>
</body>

</html>