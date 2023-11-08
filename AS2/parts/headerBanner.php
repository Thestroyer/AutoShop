<?php
function headerBanner()
{
    echo "
    <header>
        <div class='header-title'>
            <hr>
            <h1><a href='./index.php'>AutoShop</a></h1>
            <hr>
        </div>

        <div class='header-menu'>
            <div class='search'>
                <input class='search-input'>
                <button class='search-button material-symbols-outlined'>search</button>
            </div>

            <div class='cart'>
                <button class='cart-button material-symbols-outlined'>shopping_cart</button>
            </div>
        </div>
    </header>
    ";
}
