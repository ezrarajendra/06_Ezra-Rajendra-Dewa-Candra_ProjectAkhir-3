<?php
    include 'connectdb.php';
    session_start();
    
    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: index.php");
        exit();
    }
    if (isset($_POST['subscribe'])) {
        $email = $_POST['email'];

        $query = "INSERT INTO subscribers (email) VALUES ('$email')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo '<script>alert("Subscribe success!")</script>';
            echo '<script>window.location="home.php"</script>';
        } else {
            echo 'Failed to subscribe.';
        }
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
    <link rel="stylesheet" href="home.css">
    <style>
        body{
            background-image: url('homebg.jpg') !important;
        }

    </style>
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">House of Verse</a>

        <nav class="navbar">
            <a href="about.php">About</a>
            <a href="gallery.php">Gallery</a>
            <?php
                if (isset($_SESSION['username'])) {
                    echo '<a href="home.php?logout=true">Logout</a>';
                } else {
                    echo '<a href="login.php">Login</a>';
                }
            ?>
        </nav>
    </header>

    <video src="homevideo.mp4" autoplay loop muted playsinline width="100%"></video>

    <div class="section1">
        <h1>Gaze upon the storied ages of humanity, thousands of years preserved in art and spirit.</h1>
        <p>From the first markings of ancient hands to the refined grace of later ages, behold how mankind has sung its tale in stone, pigment, and breath. Let each piece whisper its fragment of eternity, and let your heart gather their songs.</p>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <div class="collectionheadline">
            <h2>The Honor’d Collections Before Thee</h2>
        </div>
        <div class="collections">
            <br>
            <div class="group">
                <img src="collection1.jpg" alt="" class="card">
                <img src="collection2.jpg" alt="" class="card">
                <img src="collection3.jpg" alt="" class="card">
                <img src="collection4.jpg" alt="" class="card">
                <img src="collection5.jpg" alt="" class="card">
                <img src="collection6.jpg" alt="" class="card">
            </div>
            <div class="group">
                <img src="collection1.jpg" alt="" class="card">
                <img src="collection2.jpg" alt="" class="card">
                <img src="collection3.jpg" alt="" class="card">
                <img src="collection4.jpg" alt="" class="card">
                <img src="collection5.jpg" alt="" class="card">
                <img src="collection6.jpg" alt="" class="card">
            </div>
        </div>
        <br>
        <br>
        <br>
        <h3>See more upon the <a href="gallery.php">Gallery</a> page</h3>
        <br>
        <br>
        <br>
        <hr>
        <br>
    </div>

    <br><br><br><br><br>
    <div class="section2">
        <h1>Our doors stand open each day from nine of the morn to eight of the eve.</h1>
        <p>Come see us today!</p>
    </div>
    <br><br><br><br><br>

    <div class="section3">
        <h1> ──────────────────     Exhibitions     ──────────────────</h1>
        <br>
        <div class="ex1">
            <div class="text">
                <h2>Eternal Grace: The Renaissance Form</h2>
                <p>Behold this noble statue, wrought with a hand both skillful and reverent, where every curve and contour sings of human perfection. Let thine eyes linger upon the harmony of flesh and stone, a testament to the immortal spirit of the Renaissance, where art doth capture the very essence of beauty itself.</p>
                <p><i>Tuesday, 9 December 2025, 16.00 PM</i></p>
            </div>
            <div class="image">
                <img src="exhibition1.jpg" alt="" class="imageex">
            </div>
        </div>
        <div class="ex1">
            <div class="image">
                <img src="exhibition2.jpg" alt="" class="imageex">
            </div>
            <div class="text">
                <h2>Whispers of the Archipelago</h2>
                <p>Gaze upon this treasure of Indonesian heritage, where the hands of artisans have breathed life into tradition. Every pattern, every hue tells a tale of ancestors, of festivals, and of sacred rites. Herein lies a harmony of culture and craft, a reminder that the soul of a nation may be sung through the gentle language of art.</p>
                <i><p>Sunday, 14 December 2025, 13.00 PM</p></i>
            </div>
        </div>
        <div class="ex1">
            <div class="text">
                <h2>Embrace the Timeless Mastery</h2>
                <p>Step into a realm where every brushstroke whispers of bygone eras, where light and shadow conspire to conjure beauty eternal. Here, the hand of the master defies the fleeting whims of modern fancy, crafting a vision so profound that the soul itself doth stand in awe. Linger, and let thine eyes drink deeply of a world where elegance reigns supreme and the glory of tradition knows no end.</p>
                <i><p>Friday, 19 December 2026, 18.00 PM</p></i>
            </div>
            <div class="image">
                <img src="exhibition3.jpg" alt="" class="imageex">
            </div>
        </div>
        <br>
        <h1>──────────────────</h1>
        <br>
        <br>
    </div>

    <br><br><br><br><br>
    <div class="section2">
        <h1>The Doors Stand Open to Thee!</h1>
        <p>We invite thee to wander through our halls of art and verse, to let thy eyes and soul partake in the beauty preserved within. Step forth, and let the timeless creations stir thy imagination and awaken wonder.</p>
    </div>
    <br><br><br><br><br>

    <footer>
        <div class="footercontent">
            <div class="newsletters">
                <h2>Subscribe to our Newsletter</h2>
                <form method="post">
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <button type="submit" name="subscribe">Subscribe</button>
                </form>
            </div>

            <br>
            <hr>
            <br>

            <p>© 2024 House of Verse. All rights reserved.</p>
            <p>Designed by Ezra Rajendra Dewa Candra</p>
            <br><br>
        </div>
    </footer>

</body>
</html>