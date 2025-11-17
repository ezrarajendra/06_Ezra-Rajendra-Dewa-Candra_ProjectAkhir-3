<?php
session_start();
include 'connectdb.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        header("location:home.php");
    } else {
        echo "<script>alert('Login Failed : Check your username and password!')</script>";
    }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House of Verse</title>
    <link rel="stylesheet" href="generaldesign.css">
    <link rel="stylesheet" href="loginregister.css">
    <link rel="icon" href="logo.png">
    <link href='https://cdn.boxicons.com/3.0.3/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">House of Verse</a>
    </header>
    <br>
    <br>
    <form method="post">
        <fieldset id="form">
            <legend><b>Input Login Credentials</b></legend>
            <table border="5" id="table">
                <tr>
                    <td><input type="text" name="username" placeholder="Username" required></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="login" value="LOGIN"></td>
                </tr>
            </table>
        </fieldset>
    </form>

    <br>
    <h3>Have no account? <a href="register.php"><b>Register here </b></a>or <a href="adminlogin.php"><b>Login as admin</b></a></h3>
    <br>

    <footer>
        <div class="footercontentlr">
            <p>© 2024 House of Verse. All rights reserved.</p>
            <p>Designed by Ezra Rajendra Dewa Candra</p>
            <br>
        </div>
    </footer>
</body>
</html>