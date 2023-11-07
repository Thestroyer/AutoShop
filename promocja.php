<?php
function promocje(){
$hostname = 'localhost';
$username = 'root';
$password = NULL;
$database = 'samochody';

$mysqli = mysqli_connect($hostname, $username, $password, $daatabase);

$query = "SELECT ";

$results = mysqli_query($mysqli, $query);

while($row = mysqli_fetch_assoc($results)){
    
}

mysqli_close($mysqli);
}
?>