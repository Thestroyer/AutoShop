<?php
include_once('./includes/headerBanner.php'); // HEADER
include_once('./includes/footer.php'); // FOOTER
// TODO: Dużo do przerobienia, funkcje do zrobienia jakieś etc.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <?php headerBanner() ?>
    <?php
        if($_GET){
            if(!empty($_GET['id'])){
                $id = $_GET['id'];
                if(ctype_digit(strval($id))){
                    $conn = mysqli_connect('127.0.0.1', 'root', '', 'samochody');
                    if($conn){
                        $query = '
                            SELECT marki.marka AS `marka`, modele.model AS `model`, rok_produkcji, pojemnosc, przebieg,
                            paliwa.rodzaj_paliwa AS `paliwo`, moc, skrzynie.rodzaj_skrzyni AS `skrzynia`, stan.stan AS `stan` 
                            FROM `marki`, `modele`, `paliwa`, `pojazdy`, `skrzynie`, `stan` 
                            WHERE marki.id = pojazdy.marka 
                            AND modele.id = pojazdy.model 
                            AND paliwa.id = pojazdy.paliwo 
                            AND skrzynie.id = pojazdy.skrzynia_biegow 
                            AND stan.id = pojazdy.stan
                            AND pojazdy.id = ' . $id . ';
                        ';
                        $results = mysqli_query($conn, $query);
                        echo '<table>';
                        while($row = mysqli_fetch_assoc($results)){
                            echo '<tr>';
                            echo '<td>' . $row['marka'] . '</td><td>' . $row['model'] . '</td><td>' . $row['rok_produkcji'] . '</td>';
                            echo '<td>' . $row['pojemnosc'] . '</td><td>' . $row['przebieg'] . '</td><td>' . $row['paliwo'] . '</td>';
                            echo '<td>' . $row['moc'] . '</td><td>' . $row['skrzynia'] . '</td><td>' . $row['stan'] . '</td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                    }
                    mysqli_close($conn);
                }
                else{
                    echo "To ogłoszenie nie istnieje BRUH";
                }
            }
        }
    ?>
    <?php footer() ?>
</body>
</html>