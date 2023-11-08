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
            <div class='search'>
                <input class='searchInput'>
                <button class='searchButton material-symbols-outlined'>search</button>
            </div>

            <div class='cart'>
                <button class='cartButton material-symbols-outlined'>shopping_cart</button>
            </div>
        </div>
    </header>
    ";
}
