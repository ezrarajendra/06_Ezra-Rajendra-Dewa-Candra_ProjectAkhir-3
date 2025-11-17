<?php
    include 'connectdb.php';

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
    <title>House of Verse</title>
    <link rel="stylesheet" href="generaldesign.css">
    <link rel="stylesheet" href="gallery.css">
    <link rel="icon" href="logo.png">
    <link href='https://cdn.boxicons.com/3.0.3/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
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
    <br>
    <br>
    <br>
    <h1 class="headline">The Treasury of Artful Wonders</h1>
    <br>
    <br>
    <div class="gallery">
        <?php
        $res = mysqli_query($koneksi, "SELECT * FROM karyaseni");
        while($row = mysqli_fetch_assoc($res)) {

            $filePath = "images/" . $row['gambar'];
            echo '<div class="card">';
            if(file_exists($filePath) && !empty($row['gambar'])) {
                echo '<img src="'.$filePath.'" alt="Artwork">';
                echo '<h3 style="color:white;">'.$row['namaseni'].'</h3>';
                echo '<h4 style="color:white;">'.$row['kategori'].' by '.$row['author'].'</h4>';
                echo '<p style="color:white; class="desc"">'.$row['deskripsi'].'</p>';
                echo '<p style="color:white; class="tahun"">'.$row['tahun_pembuatan'].'</p>';
                echo '<p style="color:white; class="harga"">$'.$row['harga'].'</p>';
            } else {
                echo '<p style="color:white;">Image not found: '.$row['gambar'].'</p>';
            }
            echo '</div>';
        }
    ?>
    </div>
    
    <br>
    <br>
    <footer>
        <br>
        <hr>
        <br>
        <div class="footercontent">
            <p>© 2024 House of Verse. All rights reserved.</p>
            <p>Designed by Ezra Rajendra Dewa Candra</p>
            <br>
        </div>
    </footer>
</body>
</html>