<?php
$arr = [
    "<h3>tired</h3>",
    "<h3>so-so</h3>",
    "<h3>distracted</h3>",
    "<h3>a desire to play Hollow Knight</h3>",
    '<audio controls style="margin: 1rem">
            <source type="audio/mpeg" src="static/half-life-2-death-sound.mp3">
        </audio>',
]; ?>
<!doctype html>
<html lang="en" class="background" style="overflow-x: hidden">

<head>
	<link rel="stylesheet" href="static/homepage_style.css">
    <link rel="shortcut_icon" type="image/png" href="./static/shocked_hugh.ico">
    <link rel="apple-touch-icon" href="./static/shocked_hugh.png">
    <link rel="icon" type="image/x-icon" href="./static/shocked_hugh.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="cr0wbar's den!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://cr0wbar.dev">
    <meta property="og:image" content="static/logo.gif">
    <meta property="og:image:type" content="image/gif">
    <meta property="og:image:width" content="480">
    <meta property="og:image:height" content="320">
    <script>
        let count = 0;
        function sound() {
            if (++count >= 8) {
                document.getElementById("oneup").play();
                count = 0;
            } else {
                document.getElementById("noise").play();
            }
            let image = document.querySelector(".bearcorner");
            if (image.style.right === "unset") {
                image.style.left = "unset";
                image.style.right = "-4rem";
                image.style.rotate = "-45deg";
            } else {
                image.style.right = "unset";
                image.style.left = "-4rem";
                image.style.rotate = "45deg";
            }
            image.style.top = String(Math.random() * document.documentElement.clientHeight) + "px";
        }
    </script>
    <title>Welcome to the bear den!</title>
</head>

<body>

<div class="titles">

<h1 class="header"><img src="static/logo.gif" alt="cr0wbar's den!"></h1>

<div class="subheader">
    <h2 style="margin-bottom: 0">
        Current mood:
    </h2>
    <div id="mood">
    <?= $arr[array_rand($arr)] ?>
    </div>
    <details>
        <summary>
            How about you?
        </summary>
        <p id="question">How are you feeling?</p>
        <label>
            <input id="emotion" type="text">
            <button id="submit" type="button">Submit</button>
        </label>
    </details>
    <script>
    function sanitise(string) { // credit for function: https://stackoverflow.com/a/48226843
      const map = {
          '&': '&amp;',
          '<': '&lt;',
          '>': '&gt;',
          '"': '&quot;',
          "'": '&#x27;',
          "/": '&#x2F;',
          "`": '&grave',
      };
      const reg = /[&<>"'/]/ig;
      return string.replace(reg, (match)=>(map[match]));
    }
    function submit_feelings() {
      let emotion = document.getElementById("emotion").value;
      if (emotion === "") {
          emotion = "nothing";
      }
      document.querySelector("#mood").innerHTML = "<h3><b>" + sanitise(emotion) + "</b></h3>";
      document.querySelector(".subheader details").remove();
      document.querySelector(".subheader").insertAdjacentHTML("beforeend", "<p>You know what? Me too.</p>");
    }
    document.querySelector("#submit").addEventListener("click", submit_feelings);
    </script>
</div>

</div>

<div class="box">

<div class="panels">
    <div class="sidebar">
        <h2>The Pristine Project Portal</h2>
        <nav>
            <a href="https://cr0wbarsartdump.neocities.org">My art website!</a>
            <a href="https://fyp.cr0wbar.dev">My dissertation project!</a>
            <a href="https://threedee.cr0wbar.dev">My 3D web app uni project!</a>
        </nav>
    </div>
    <div class="bio">
        <p>
            I'm Finn! I enjoy digital art, buses, bus travel, trains, train travel, language-learning, etymology, single-player video games and occasionally programming.<br><br>
            Full-stack web development has a creative side to it that I very much enjoy, and I love PHP just as much as the HTML + CSS + vanilla JS suite. I've also learned and liked my fair share of Rust and Python!<br><br>
            A portion of my portfolio of programming projects is presented in my Pristine Project Portal on this page, or, in place of the Portal, can be perfervidly perused <a href="https://github.com/0cr0wbar0">here.</a>
        </p>
    </div>
</div>

</div>

<img width="200rem" height="200rem" onclick="sound()" src="static/maidhugh.PNG" class="bearcorner" style="left: -4rem; rotate: 45deg; right: unset; top: 50rem">

<div class="footer">
    <a href="https://cr0wbar.dev"><img src="static/icons/logo.gif"></a>
    <a href="https://j0.lol"><img src="static/icons/j0.gif"></a>
    <a href="https://meihapps.gay"><img src="static/icons/meightyeight.gif"></a>
    <a href="https://maia.crimew.gay"><img src="static/icons/maiacrimew.png"></a>
    <a href="https://andou.gay"><img src="static/icons/andou2.gif"></a>
    <a href="https://brainmade.org"><img src="static/icons/brainmade.png"></a>
    <img src="static/icons/furnow.gif">
    <img src="static/icons/forever_online.gif">
    <img src="static/icons/f_ckfb.gif">
    <img src="static/icons/pride.gif">
    <img src="static/icons/transnow.gif">
</div>

</body>

<audio id="noise">
    <source type="audio/mpeg" src="static/squeak.mp3">
</audio>

<audio id="oneup">
    <source type="audio/mpeg" src="static/1up.mp3">
</audio>

<script src="static/oneko.js"></script>

</html>
