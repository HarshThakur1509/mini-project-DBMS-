<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Ubuntu:wght@300&display=swap');

    :root {
      --prim: #2b6777;
      --sec: #ffffff;
      --main: #52ab98;
    }

    * {
      margin: 0;
      padding: 0;

    }

    li {
      list-style: none;
    }

    html {
      scroll-behavior: smooth;
    }

    button {
      border: none;
      border-radius: 2px;
      color: white;
      background-color: #52ab98;
    }

    body {
      font-family: 'Ubuntu', sans-serif;
      color: white;

    }

    body::before {
      content: '';
      background: radial-gradient(30% 40% at 40% 30%, rgba(33, 36, 41, .5) 0%, rgba(33, 36, 41, 0) 100%) no-repeat, url(https://store.cloudflare.steamstatic.com/public/shared/images/joinsteam/acct_creation_bg.jpg) -45vw 0 no-repeat, #212429;
      background-color: #1b2838;
      height: 100%;
      width: 100%;
      position: fixed;
      z-index: -1;
    }

    ::-webkit-scrollbar {
      height: 12px;
      width: 14px;
      background: transparent;
      z-index: 12;
      overflow: visible;
    }

    ::-webkit-scrollbar-track {
      background: var(--prim);
    }

    ::-webkit-scrollbar-thumb {
      width: 10px;
      background-color: white;
      border-radius: 10px;
      z-index: 12;
      border: 4px solid rgba(0, 0, 0, 0);
      background-clip: padding-box;
      transition: background-color .32s ease-in-out;
      margin: 4px;
      min-height: 32px;
      min-width: 32px;
    }

    ::-webkit-scrollbar-corner {
      background: #202020;
    }

    ::selection {
      background: #54a5d4;
      text-shadow: 1px 1px 2px #000000aa;
      color: var(--sec);
    }

    hr {
      background-color: grey;
      border: 0px;
      height: 1px;
      width: 100%;
      opacity: 0.5;
      z-index: 1000;
    }

    .material-symbols-outlined {
      color: black;
    }

    nav {
      background-color: white;
      height: 60px;

    }

    .micon {
      position: relative;
      left: 43%;
      top: 0.5rem;
      cursor: pointer;
    }

    #ham {
      position: absolute;
      top: 1rem;
      left: 1.5rem;
      color: black;
      font-size: 2rem;
      cursor: pointer;
      z-index: 100;
    }


    #sid {
      position: fixed;
      top: 0px;
      left: 0px;
      transform: translateX(-160%);
      transition: transform 0.25s ease-in-out;
      z-index: 10;
    }

    #sid::before {
      content: '';
      background-color: var(--sec);
      width: 180px;
      height: 100vh;
      position: absolute;
      top: 0px;
      left: 0px;
      z-index: 8;
      opacity: 1;

    }

    aside ul {
      margin-top: 95px;
      margin-left: 1rem;
      display: grid;
      row-gap: 20px;
      place-items: center;
      transition: margin-top 0.5s ease-in-out;
      z-index: 2;
    }

    #sid li {
      list-style: none;
      cursor: pointer;
      z-index: 9;
    }

    #sid a {
      margin: 0 2rem;
      position: relative;
      text-decoration: none;
      color: black;
    }

    #sid a::after {
      content: '';
      width: 100%;
      height: 2px;
      background-color: black;
      position: absolute;
      left: 0;
      bottom: -3px;
      transform: scaleX(0);
      transform-origin: left;
      transition: transform .5s ease;
    }

    #sid a:hover::after {
      transform: scaleX(1);
    }

    .scrolling-aside {
      margin-top: 6rem;
    }

    .sign {
      width: 100vw;
      height: 30rem;
      display: flex;
      justify-content: center;

    }

    .sign li:nth-child(1) {
      font-weight: bolder;
      font-size: 2.5rem;
    }

    .sign p {
      font-size: 1.1rem;

    }

    .sign input {
      height: 1.8rem;
      width: 15rem;
      border-radius: 5px;
    }

    .sign ul {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 2rem;
    }

    .sign button {
      width: 6rem;
      height: 2rem;
      font-size: 1rem;
      border-radius: 5px;
      background-color: #52ab98;
      color: white;
      transition: color 1s ease;
    }

    .sign button:hover {
      background-color: #5fc5af;
    }
  </style>
</head>

<body>
  <nav>
    <span class="material-symbols-outlined" id="ham">
      menu
    </span>
    <span class="micon">
      <img src="afk-logo.png" width="176" height="44">
    </span>
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
  <div class="sign">
    <ul>
      <li>SIGN IN</li>
      <li>
        <p>account name</p><input type="text">
      </li>
      <li>
        <p>password</p><input type="password" name="" id="">
      </li>
      <li><button>Sign in</button></li>
    </ul>
  </div>
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