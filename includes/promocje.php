<?php
function promocje(){
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = '';
    $database = 'samochody';

    $conn = mysqli_connect($hostname, $username, $password, $database);
    $query = '
        SELECT marki.marka AS `marka`, modele.model AS `model`, cena, nowa_cena, zdjecie
        FROM `marki`, `modele`, `pojazdy`, `promocje`
        WHERE marki.id = pojazdy.marka
        AND modele.id = pojazdy.model
        AND promocje.id_pojazdu = pojazdy.id;
        ';

    $results = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($results)){

        $out = '<div class="card">';
        $out .= '<div class="card-image"><img src="images/' . $row['zdjecie'] . '" class="cars"></div>';
        $out .= '<div class="card-opis">';
        $out .= '<div class="card-title"><p>' . $row['marka'] . ' ' . $row['model'] . '</p></div>';
        $out .= '<div class="card-price-old"><p>' . $row['cena'] . ' PLN</p></div>';
        $out .= '<div class="card-price-new"><p>' . $row['nowa_cena'] . ' PLN</p></div>';
        $out .= '<div class="img-sale"><img src="images/sale.png" class="sale"></div>';
        $out .= '</div>';
        $out .= '</div>';
        echo $out;
    }

    mysqli_close($conn);
}
?>