<?php

require('database/dbcontroller.php');

require('database/product.php');

require('database/cart.php');

$db = new dbcontroller();

$product = new product($db);
$product_shuffle = $product->getdata();

$cart = new cart($db);
