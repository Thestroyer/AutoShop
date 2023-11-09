<?php
include_once('./includes/headerBanner.php'); // HEADER
include_once('./includes/footer.php'); // FOOTER
// TODO: Dużo do przerobienia, funkcje do zrobienia jakieś etc.
?>

<?php
if ($_GET) {
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        if (ctype_digit(strval($id))) {

            $hostname = '127.0.0.1';
            $username = 'root';
            $password = '';
            $database = 'samochody';

            $conn = mysqli_connect('127.0.0.1', 'root', '', 'samochody');

            if ($conn) {
                $query = '
                            SELECT marki.marka AS `marka`, modele.model AS `model`, rok_produkcji, pojemnosc, przebieg,
                            paliwa.rodzaj_paliwa AS `paliwo`, moc, skrzynie.rodzaj_skrzyni AS `skrzynia`, stan.stan AS `stan`, pojazdy.zdjecie AS `zdjecie`, pojazdy.cena AS `cena` 
                            FROM `marki`, `modele`, `paliwa`, `pojazdy`, `skrzynie`, `stan` 
                            WHERE marki.id = pojazdy.marka 
                            AND modele.id = pojazdy.model 
                            AND paliwa.id = pojazdy.paliwo 
                            AND skrzynie.id = pojazdy.skrzynia_biegow 
                            AND stan.id = pojazdy.stan
                            AND pojazdy.id = ' . $id . ';
                            ';

                $results = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($results)) {
                    $marka = $row['marka'];
                    $model = $row['model'];
                    $rok_produkcji = $row['rok_produkcji'];
                    $pojemnosc = $row['pojemnosc'];
                    $przebieg = $row['przebieg'];
                    $paliwo = $row['paliwo'];
                    $moc = $row['moc'];
                    $skrzynia = $row['skrzynia'];
                    $stan = $row['stan'];
                    $zdjecie = $row['zdjecie'];
                    $cena = $row['cena'];
                }
            }
            mysqli_close($conn);
        }
    }
}
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

    <main>
        <?php
        if (!$_GET) {
            echo "
            <section class='nieZnaleziono'>
                <h1>Ogłoszenie nie zostało znalezione.</h1>
                <h2>Możliwe, że ogłoszenie jest już nie aktulane.</h2>
                <div>
                    <a href='./index.php'>Wróć na stronę główną</a>
                </div>
            </section>
            ";
        }
        ?>
        <section class='ogloszenie'>
            <section class='informacje'>
                <img src="<?php echo "./images/$zdjecie" ?>" class='zdjecie-ogloszenie'>
                
                <h2>Szczegóły</h2>
                
                <table>
                    <tr>
                        <td>Marka</td><td><?php echo $marka ?></td>
                    </tr>
                    <tr>
                        <td>Model</td><td><?php echo $model ?></td>
                    </tr>
                    <tr>
                        <td>Rok produkcji</td><td><?php echo $rok_produkcji ?></td>
                    </tr>
                    <tr>
                        <td>Pojemność</td><td><?php echo $pojemnosc ?></td>
                    </tr>
                    <tr>
                        <td>Przebieg</td><td><?php echo $przebieg ?></td>
                    </tr>
                    <tr>
                        <td>Paliwo</td><td><?php echo $paliwo ?></td>
                    </tr>
                    <tr>
                        <td>Moc</td><td><?php echo $moc ?></td>
                    </tr>
                    <tr>
                        <td>Skrzynia</td><td><?php echo $skrzynia ?></td>
                    </tr>
                    <tr>
                        <td>Stan</td><td><?php echo $stan ?></td>
                    </tr>
                </table>
            </section>

            <aside class='ogloszenie-aside'>
                <h2><?php echo "$marka $model" ?></h2>
                <p><?php echo $stan ?></p>
                <h2 class='ogloszenie-cena'><?php echo "$cena PLN" ?></h2>
            </aside>
    </main>

    <?php footer() ?>
</body>

</html>