<?php
session_start();

if (empty($_SESSION['id_user'])) {
    header("location:login.php");
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-image: url(wallpaperflare.com_wallpaper\ \(1\).jpg); /* Ganti 'background.jpg' dengan nama file gambar latar belakang Anda */
            background-size: cover;
            color: #fff;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7); /* Warna latar belakang kontainer dengan tingkat opasitas */
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.7); /* Warna latar belakang navbar dengan tingkat opasitas */
        }

        .navbar-nav .nav-link {
            color: #fff;
        }

        h1 {
            color: #fff;
            text-align: center;
        }

        .welcome-text {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .info-text {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .logout-btn {
            background-color: #fff;
            color: #000;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .logout-btn:hover {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FILMCU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-center">
                    <li class="nav-item">
                        <a class="nav-link" href="dasboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="film.php">Semua film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="genre.php">Genre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Selamat Datang <?php echo $_SESSION['user_name'] ?></h1>

        <div class="welcome-text">
            <p>Temukan berbagai macam film berkualitas dalam berbagai genre di FILMCU. Jadikan pengalaman menonton Anda lebih menghibur dan memikat.</p>
        </div>

        <div class="info-text">
            <p>Pilih genre favorit Anda dan temukan koleksi film terbaik yang sesuai dengan selera Anda. Mulai dari aksi seru hingga kisah romantis yang memukau.</p>
        </div>

        <button class="logout-btn btn-primary"><a href="logout.php" onclick="return confirm('Yakin Keluar')">LOGOUT</a></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
