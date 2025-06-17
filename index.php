<?php
$arr = array("Funny number string: ", "Your funky lil number string: ", "I see you. ", "Current location: ");
?>
<!doctype html>
<html lang="en" class="background">

<head>
	<link rel="stylesheet" href="static/homepage_style.css">
    <link rel="shortcut_icon" type="image/png" href="./static/shocked_hugh.ico">
    <link rel="apple-touch-icon" href="./static/shocked_hugh.png">
    <link rel="icon" type="image/x-icon" href="./static/shocked_hugh.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        function sound() {
            let noise = document.getElementById("noise");
            noise.play();
        }
    </script>
    <title>Welcome to the bear den!</title>
</head>

<body>

<div class="titles">

<h1 class="header">cr0wbar's den!</h1>

<h3 class="subheader"><?= $arr[array_rand($arr)] . $_SERVER['REMOTE_ADDR'] ?></h3>

</div>

<div class="box">

<div class="panels">
    <div class="sidebar">
        <h2>The Pristine Project Portal</h2>
        <nav>
            <a href="https://cr0wbarsartdump.neocities.org">My art website!</a>
            <a href="https://fyp.cr0wbar.dev">My dissertation project!</a>
            <a href="https://threedee.cr0wbar.dev">My 3D web app uni project!</a>
            <a href="uwu.php">UwU-ifier!</a>
        </nav>
    </div>
    <div class="bio">
        <p>
            I'm Finn! I enjoy art, buses, trains, train travel, language-learning, etymology, single-player video games and occasionally programming.
        </p>
    </div>
</div>

</div>

<img width="200rem" height="200rem" onclick="sound()" src="static/maidhugh.PNG" class="bearcorner">

<div class="footer">
    <a href="https://cr0wbar.dev"><img src="static/icons/logo.gif"></a>
    <a href="https://j0.lol"><img src="static/icons/j0.gif"></a>
    <a href="https://meihapps.gay"><img src="static/icons/mei-ghtyeight.gif"></a>
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

<script src="static/oneko.js"></script>

</html>