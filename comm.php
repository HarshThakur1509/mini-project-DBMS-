<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="commstyle.css">
        
    <title>Document</title>
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
    <section>
        <p class = "head" id="head">
            COMMUNITY ACTIVITY
        </p>
        <hr>
        <div class="art">
            <p class = "head">ARTWORK</p><hr>
            <ul>
                <li><img src="https://steamuserimages-a.akamaihd.net/ugc/1931498942552690376/02C300416D0D346E45593B7663A4C39387447CC6/?imw=640&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" alt=""></li>
                <li><img src="https://steamuserimages-a.akamaihd.net/ugc/1931498942553791370/50B355A20FADA7C702C32D49548C5904B03F664D/?imw=1920&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" alt=""></li>
                <li><img src="https://steamuserimages-a.akamaihd.net/ugc/1912358732832935734/27501BE95C70B48A0C8FF8E3AF840810CB774EF7/?imw=640&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" alt=""></li>
            </ul>
        </div>
        <div class="work">
            <p class = "head">WORKSHOP</p><hr>
            <ul>
                <li><img src="https://pbs.twimg.com/media/FVYydPrXEAEU2qW?format=jpg&name=900x900" alt=""></li>
                <li><img src="https://cdn-images.win.gg/resize/w/620/format/webp/type/progressive/fit/cover/path/wp/uploads/2022/04/FRIt18WWYAASZny-1.jpg" alt=""></li>
                <li><img src="https://external-preview.redd.it/AeMGHqCVj19bx0CUAH-fGVWEWopNjz4SIySalcmG1J8.jpg?auto=webp&s=ccb45296865f93dc7c6f315fd5889da9922a448f" alt=""></li>
                <li><img src="https://gamepunk.net/wp-content/uploads/2021/07/Reaver-Bundle.jpg" alt=""></li>
            </ul>
        </div>
        <div class="news">
            <p class = "head">NEWS</p><hr>
            <ul>
                <li>No more content. So sad.
                </li>
                <li>You can help: share a screenshot,</li>
                <li>make a video, or start a new</li>
                <li>discussion!</li>
            </ul>
        </div>
    </section>

    <script>
        function toggle() {
    let side = document.getElementById("sid");
    if (side.style.transform == 'translateX(-160%)') {
        side.style.transform = "translateX(0)";
    }
    else {
        side.style.transform = "translateX(-160%)";
    }
}
window.addEventListener('scroll', function () {
    let header = document.querySelector('header');
    let ul = document.querySelector('aside ul');

    let windowPosition = window.scrollY > 0;
    header.classList.toggle('scrolling-active', windowPosition);
    ul.classList.toggle('scrolling-aside', windowPosition);
})
    </script>
</body>
</html>