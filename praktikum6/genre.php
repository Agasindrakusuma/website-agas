<?php
$genreFilm = [
    "Action",
    "Horor",
    "Romance",
    "Komedi",
];

$datafilm = [
    // Data film Anda di sini
];

function getWarnaLatarBelakang($genre)
{
    // Logika warna latar belakang
}

$selectedGenre = isset($_GET['genre']) ? $_GET['genre'] : null;
$filteredData = [];

if ($selectedGenre) {
    foreach ($datafilm as $film) {
        if (in_array($selectedGenre, $film['Genre'])) {
            $filteredData[] = $film;
        }
    }
} else {
    $filteredData = $datafilm;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
        body {
            background-image: url(wallpaperflare.com_wallpaper.jpg);

            color: white;

            background-size: cover;
            background-color: #f8f9fa;
            /* Warna background umum */
        }

        .navbar {
            background-color: #343a40;
            /* Warna background navbar */
        }

        .navbar-brand {
            color: #ffffff;
            /* Warna teks navbar-brand */
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            /* Warna teks menu navbar */
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
            /* Warna ikon toggler */
        }

        .list-group-item {
            background-color: #343a40;
            /* Warna latar belakang item genre */
            border-color: #343a40;
            /* Warna border item genre */
        }

        .list-group-item a {
            color: #ffffff;
            /* Warna teks item genre */
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
        <h1 style="text-align: center;">Genre Film</h1>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="film.php?genre=Action">Action</a>
            </li>
            <li class="list-group-item">
                <a href="film.php?genre=Romance">Romance</a>
            </li>
            <li class="list-group-item">
                <a href="film.php?genre=Horor">Horor</a>
            </li>
            <li class="list-group-item">
                <a href="film.php?genre=Komedi">Komedi</a>
            </li>
            <li class="list-group-item">
                <a href="film.php?genre=Action">Action</a>
            </li>

        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>