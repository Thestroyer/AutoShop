<?php
function headerBanner()
{
    echo "
    <header>
        <div class='headerTitle'>
            <hr>
            <h1><a href='./index.php'>AutoShop</a></h1>
            <hr>
        </div>

        <div class='headerMenu'>
            <button class='cart material-symbols-outlined'>shopping_cart</button>
            
            <input class='wyszukiwarka-pole'>
            <button class='wyszukiwarka-button material-symbols-outlined'>search</button>
        </div>
    </header>
    ";
}
