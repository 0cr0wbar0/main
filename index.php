<?php
$arr = [
    "<h3>productive</h3>",
    "<h3>creative</h3>",
    "<h3>busy</h3>",
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
    <meta property="og:image" content="static/static_logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="946">
    <meta property="og:image:height" content="610">
    <script defer src="static/script.js"></script>
    <title>Welcome to the bear den!</title>
</head>

<body class="page-body">

<div class="titles">

<h1 class="header"><img src="static/logo.gif" alt="cr0wbar's den!"></h1>

<div class="subheader">
    <h2>
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
</div>

</div>

<div class="box">

<div class="panels">
    <div class="sidebar">
        <h2>The Pristine Project Portal</h2>
        <nav>
            <a href="https://fyp.cr0wbar.dev">My dissertation project!</a>
            <a href="https://threedee.cr0wbar.dev">My 3D web app uni project!</a>
            <a href="https://github.com/0cr0wbar0">My GitHub portfolio!</a>
            <a href="https://cr0wbarsartdump.neocities.org">My art website!</a>
        </nav>
    </div>
    <div class="bio">
        <p>
            I'm Finn! I enjoy programming (particularly web development) and web design, especially when I'm working with TypeScript, PHP, Python or Rust.
        </p>
        <p>
            Full-stack web development has a creative side to it that I very much enjoy, and I love PHP just as much as the HTML + CSS + JS suite.
        </p>
        <p>
            My portfolio of programming projects is presented in the Pristine Project Portal on this page.
        </p>
        <p>
            On a personal level, I also enjoy digital art, buses, trains, language-learning, etymology and single-player video games!
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
