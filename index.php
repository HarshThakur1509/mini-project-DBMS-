<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <?php

    require('functions.php');

    ?>
</head>

<body>
    <header id="main">


        <button onclick="toggle()"><span class="material-symbols-outlined" id="ham">
                menu
            </span>
        </button>
        <span class="micon">
            <img src="afk-logo.png" width="176" height="44">
        </span>

        <nav id="nav">

            <ul>
                <li><a href="index.php">STORE</a> </li>
                <li><a href="comm.php">COMMUNITY</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SUPPORT</a></li>
            </ul>
            <div class="in">
                <input type="text" placeholder="Search">
                <button></button>
            </div>
        </nav>
        <a href="cart.php"><span class="material-symbols-outlined" id="cart">
                shopping_bag
            </span></a>

    </header>
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

    <div class="container">
        <!--image slider start-->
        <div class="slider">
            <div class="slides">
                <!--radio buttons start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!--radio buttons end-->
                <!--slide images start-->
                <div class="slide first">
                    <img src="./assets/1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/4.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/2.jpg" alt="">
                </div>
                <!--slide images end-->
                <!--automatic navigation start-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <!--automatic navigation end-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->
        </div>
        <!--image slider end-->
    </div>
    <section>
        <div class="avail">
            <?php

            $product_shuffle = $product->getdata();
            shuffle($product_shuffle);

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $cart->addtocart($_POST['user_id'], $_POST['item_id']);
            }

            ?>
            <p>AVAILABLE GAMES</p>
            <hr>
            <ul>
                <?php
                foreach ($product_shuffle as $item) { ?>

                    <li class="game"><img src="<?php echo $item['item_image'] ?? "./assets/1.jpg"; ?>" alt="" width="242px" width="242px" width="242px"><span><?php echo $item['item_name']  ?> </span><span>Rs. <?php echo $item['item_price'] ?? '0'; ?></span><span>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="submit">Add to cart</button>
                            </form>
                        </span> </li>
                <?php } ?>
            </ul>
        </div>
        <div class="stream">
            <p>GAMES STREAMING NOW</p>
            <hr>
            <ul>
                <li><a href="https://www.youtube.com/watch?v=o3V-GvvzjE4&ab_channel=EASPORTSFIFA"><img src="./assets/1.jpg" alt="" width="242px"></a></li>
                <li><a href="https://www.youtube.com/watch?v=pYqyVpCV-3c&ab_channel=BethesdaSoftworks"><img src="./assets/2.jpg" alt="" width="242px"></a></li>
                <li><a href="https://www.youtube.com/watch?v=YvjYUYLKm0c&ab_channel=IGN"><img src="./assets/3.jpg" alt="" width="242px"></a></li>
            </ul>
        </div>
    </section>



    <script>
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);

        function toggle() {
            let side = document.getElementById("sid");
            if (side.style.transform == 'translateX(-160%)') {
                side.style.transform = "translateX(0)";
            } else {
                side.style.transform = "translateX(-160%)";
            }
        }
        window.addEventListener('scroll', function() {
            let header = document.querySelector('header');
            let ul = document.querySelector('aside ul');

            let windowPosition = window.scrollY > 0;
            header.classList.toggle('scrolling-active', windowPosition);
            ul.classList.toggle('scrolling-aside', windowPosition);
        })
    </script>
</body>

</html>