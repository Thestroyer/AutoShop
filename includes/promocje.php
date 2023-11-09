<?php
function promocje(){
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = '';
    $database = 'samochody';

    $conn = mysqli_connect($hostname, $username, $password, $database);
    $query = '
        SELECT pojazdy.id AS `id`, marki.marka AS `marka`, modele.model AS `model`, cena, nowa_cena, zdjecie
        FROM `marki`, `modele`, `pojazdy`, `promocje`
        WHERE marki.id = pojazdy.marka
        AND modele.id = pojazdy.model
        AND promocje.id_pojazdu = pojazdy.id;
        ';

    $results = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($results)){

        $out = '<a class="promocje-card" href="ogloszenie.php?id=' . $row['id'] . '">';
        $out .= '<div class="promocje-card-image"><img src="images/' . $row['zdjecie'] . '" class="promocje-cars"></div>';
        $out .= '<div class="promocje-card-opis">';
        $out .= '<div class="promocje-card-title"><p>' . $row['marka'] . ' ' . $row['model'] . '</p></div>';
        $out .= '<div class="promocje-card-price-old"><p>' . $row['cena'] . ' PLN</p></div>';
        $out .= '<div class="promocje-card-price-new"><p>' . $row['nowa_cena'] . ' PLN</p></div>';
        $out .= '<div class="img-sale"><img src="images/sale.png" class="sale"></div>';
        $out .= '</div>';
        $out .= '</a>';
        echo $out;
    }

    mysqli_close($conn);
}
?>