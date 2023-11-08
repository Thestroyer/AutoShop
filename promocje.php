<?php
function promocje(){
    echo $conn;
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = '';
    $database = 'samochody';

    $conn = mysqli_connect($hostname, $username, $password, $database);
    $query = '
        SELECT marki.marka AS `marka`, modele.model AS `model`, cena, nowa_cena
        FROM `marki`, `modele`, `pojazdy`, `promocje`
        WHERE marki.id = pojazdy.marka
        AND modele.id = pojazdy.model
        AND promocje.id_pojazdu = pojazdy.id;
        ';

    $results = mysqli_query($conn, $query);

    echo "<table>";
    while($row = mysqli_fetch_assoc($results)){
        echo '<tr>';
        echo '<td>' . $row['marka'] . '</td><td>' . $row['model'] . '</td><td>' . $row['cena'] . '</td><td>' . $row['nowa_cena'] . '</td>';
        echo '</tr>';
    }
    echo "</table>";

    mysqli_close($conn);
}
?>