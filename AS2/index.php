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
            <div>
                <h2>Promocje</h2>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="card-image"><img src="images/a2.jpg" class="cars" alt="" srcset=""></div>
                    <div class='card-opis'>
                        <div class="card-title">
                            <p>Audi A2</p>
                        </div>
                        <div class="card-price-old">
                            <p>65 000 PLN</p>
                        </div>
                        <div class="card-price-new">
                            <p>60 000 PLN</p>
                        </div>
                        <div class="img-sale"><img src="images/sale.png" class="sale" alt="" srcset=""></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-image"><img src="images/civic.jpg" class="cars" alt="" srcset=""></div>
                    <div class='card-opis'>
                        <div class="card-title">
                            <p>Honda Civic</p>
                        </div>
                        <div class="card-price-old">
                            <p>25 000 PLN</p>
                        </div>
                        <div class="card-price-new">
                            <p>20 000 PLN</p>
                        </div>
                        <div class="img-sale"><img src="images/sale.png" class="sale" alt="" srcset=""></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-image"><img src="images/micra.jpg" class="cars" alt="" srcset=""></div>
                    <div class='card-opis'>
                        <div class="card-title">
                            <p>Nissan Micra</p>
                        </div>
                        <div class="card-price-old">
                            <p>35 000 PLN</p>
                        </div>
                        <div class="card-price-new">
                            <p>30 000 PLN</p>
                        </div>
                        <div class="img-sale"><img src="images/sale.png" class="sale" alt="" srcset=""></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ogloszenia">
            <div>
                <h2>Ogłoszenia</h2>
            </div>

        <div class="cards">
                <div class="card">
                    <div class="card-image"><img src="images/ibiza.jpg" class="cars" alt="" srcset=""></div>
                    <div class='card-opis'>
                        <div class="card-title-small">
                            <p>Seat Ibiza</p>
                        </div>
                        <div class="card-price-small">
                            <p>1 999 999 PLN</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-image"><img src="images/mx5.jpg" class="cars" alt="" srcset=""></div>
                    <div class='card-opis'>
                        <div class="card-title-small">
                            <p>Mazda MX-5</p>
                        </div>
                        <div class="card-price-small">
                            <p>80 000 PLN</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-image"><img src="images/rio.jpg" class="cars" alt="" srcset=""></div>
                    <div class='card-opis'>
                        <div class="card-title-small">
                            <p>Kia Rio</p>
                        </div>
                        <div class="card-price-small">
                            <p>60 000 PLN</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-image"><img src="images/tucson.jpg" class="cars" alt="" srcset=""></div>
                    <div class='card-opis'>
                        <div class="card-title-small">
                            <p>Hyundai Tucson</p>
                        </div>
                        <div class="card-price-small">
                            <p>160 000 PLN</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-image"><img src="images/yaris.jpg" class="cars" alt="" srcset=""></div>
                    <div class='card-opis'>
                        <div class="card-title-small">
                            <p>Toyota Yaris</p>
                        </div>
                        <div class="card-price-small">
                            <p>50 000 PLN</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php footer(); ?>
</body>

</html>