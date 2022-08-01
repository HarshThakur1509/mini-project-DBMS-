<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cartstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <?php

    require('functions.php');

    ?>
</head>

<body>
    <nav>
        <span class="material-symbols-outlined" id="ham">
            menu
        </span>
        <span class="micon">
            <img src="afk-logo.png" width="176" height="44">
        </span>
        <a href="cart.php"><span class="material-symbols-outlined" id="cart">
                shopping_bag
            </span></a>
    </nav>
    <aside id="sid">
        <ul>
            <li><a href="login.php">LOGIN</a></li>
            <hr>
            <li><a href="index.php">STORE</a></li>
            <hr>
            <li><a href="comm.php">COMMUNITY</a></li>
            <hr>
            <li><a href="">SUPPORT</a></li>
        </ul>
    </aside>
    <section>

        <p>
            YOUR SHOPPING CART
        </p>
        <hr>
        <div class="secmid">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['delete-cart-submit'])) {
                    $deletedrecord = $cart->deletecart($_POST['item_id']);
                }
            }
            ?>
            <div class="cart">
                <ul>
                    <?php

                    foreach ($product->getdata('cart') as $item) {
                        $cart = $product->getproduct($item['item_id']);
                        array_map(function ($item) {
                    ?>
                            <li><img src="<?php echo $item['item_image'] ?? "./assets/1.jpg"; ?>" alt="" width="242px" width="242px" width="242px"><span><?php echo $item['item_name'] ?? "Unknown" ?></span><span>Rs. <?php echo $item['item_price'] ?? 0 ?></span>
                                <form method="post">
                                    <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                    <button type="submit" name="delete-cart-submit">Delete</button>
                                </form>
                            </li>
                    <?php
                        }, $cart);
                    }

                    ?>
                </ul>
                <button id="pur">Purchase</button>
            </div>
            <div class="rec">
                <ul>
                    <li><a href="https://www.youtube.com/watch?v=YvjYUYLKm0c&ab_channel=IGN"><img src="./assets/3.jpg" alt="" width="242px"> </a> </li>
                    <li> <a href="https://www.youtube.com/watch?v=o3V-GvvzjE4&ab_channel=EASPORTSFIFA"><img src="./assets/5.jpg" alt="" width="242px"> </a></li>
                </ul>
            </div>
        </div>
        <a href="index.php"><button id="cont">Continue Shopping</button></a>
    </section>

    <script>
        let ham = document.getElementById("ham");
        ham.addEventListener('click', () => {
            let side = document.getElementById("sid");
            if (side.style.transform == 'translateX(-160%)') {
                side.style.transform = "translateX(0)";
            } else {
                side.style.transform = "translateX(-160%)";
            }
        });
    </script>
</body>

</html>