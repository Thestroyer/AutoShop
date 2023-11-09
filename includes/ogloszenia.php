<?php
function ogloszenia(){
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = '';
    $database = 'samochody';

    $conn = mysqli_connect($hostname, $username, $password, $database);
    $query = '
        SELECT pojazdy.id AS `id`, marki.marka AS `marka`, modele.model AS `model`, cena, zdjecie
        FROM `marki`, `modele`, `pojazdy`
        WHERE marki.id = pojazdy.marka
        AND modele.id = pojazdy.model
        AND pojazdy.id
        NOT IN(SELECT promocje.id_pojazdu FROM promocje)
    ';

    $results = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($results)){

        $out = '<a class="ogloszenia-card" href="ogloszenie.php?id=' . $row['id'] . '">';
        $out .= '<div class="ogloszenia-card-image"><img src="images/' . $row['zdjecie'] . '" class="ogloszenia-cars"></div>';
        $out .= '<div class="ogloszenia-card-opis">';
        $out .= '<div class="ogloszenia-card-title-small"><p>' . $row['marka'] . ' ' . $row['model'] . '</p></div>';
        $out .= '<div class="ogloszenia-card-price-small"><p>' . $row['cena'] . ' PLN</p></div>';
        $out .= '</div>';
        $out .= '</a>';
        echo $out;
    }

    mysqli_close($conn);
}

?>