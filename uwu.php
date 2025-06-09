<?php
?>
<!doctype html>
<html lang="en" class='background'>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/uwu_style.css">
    <link rel="shortcut_icon" type="image/png" href="./static/shocked_hugh.ico">
    <link rel="apple-touch-icon" href="./static/shocked_hugh.png">
    <link rel="icon" type="image/x-icon" href="./static/shocked_hugh.ico">
    <title>Rust UwU-ifier!</title>
    <script type="module" src="/static/uwu.js"></script>
</head>

<body class='box'>

<h1 class='header'>UwU-ifier, written in Rust with WebAssembly!</h1>

<h2 class='header'>Enter text to be UwU-ified here :3</h2>

<form method='POST'>
	<textarea name='text' id='text'></textarea>
	<button type='button' name='submit' class='TextSubmit'>UwU-ify!!</button>
</form>

<p id="output">
	
</p>

</body>
</html>
