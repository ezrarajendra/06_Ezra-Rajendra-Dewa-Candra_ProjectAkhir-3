<?php
    session_start();
    
    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="House of Verse is a dwelling for the noble art, where brush and quill alike conspire to weave beauty from the breath of thought. Within these walls, the soul finds voice, and imagination its quiet kingdom.">
    <meta name="keywords" content="House of Verse, poetry, art, literature, creativity, expression, imagination, beauty in words and art, fine art and poetry collective, timeless art and words">
    <meta name="author" content="Ezra Rajendra Dewa Candra">
    <title>House of Verse</title>
    <link rel="stylesheet" href="generaldesign.css">
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="landingpage.css">
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo">House of Verse</a>

        <nav class="navbar">
            <a href="about.php">About</a>
            <a href="gallery.php">Gallery</a>
            <a href="login.php">Login</a>    
        </nav>
    </header>

    <div class="carousel">
        <div class="items">
            <img src="carousel1.jpg" alt="">
            <img src="carousel2.jpg" alt="">
            <img src="carousel3.jpg" alt="">
            <img src="carousel4.jpg" alt="">
            <img src="carousel5.jpg" alt="">
        </div>
    </div>

    <div class="title">
        <h1>House of Verse</h1>
        <p>A Treasury of Art, Preserved for the Present and the Eternal</p>
    </div>

    <div class="button">
        <button class="btn" onclick="location.href='home.php'">A Treasury of Art, Preserved for the Present and the Eternal</button>
    </div>
</body>
</html>