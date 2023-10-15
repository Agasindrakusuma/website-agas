<?php

session_start();

$username = "admin";
$password = "123";

if (empty($_POST['username']) and empty($_POST['passwoard'])) {
    // tidak dilakukan apa-apa

} else {
    // apakkah username yang diinputkan dan passwoard yang diinputkan sesuai dengan usernamme 
    // dan variabel yang sudah di set
    if ($_POST['username'] == $username and $_POST['password'] == $password) {
        $_SESSION['id_user'] = 123456;
        $_SESSION["user_name"] = "Agas Indra Kusuma";
        header("location:dasboard.php");
    }
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url(4.jpg); /* Ganti 'background.jpg' dengan nama file gambar latar belakang Anda */
            background-size: cover;
            color: #fff;
        }
        </style>

</head>

<body>

    <!-- <form action="" method="POST">

        <h1>Halaman Login</h1>
        <br>
        <label for="">username</label>
        <input type="username" name="username">
        <br>
        <label for="">Password</label>
        <input type="password" name="password">

        <label for="role"></label>
        <select name="role" id="role">
            <option value="admin">admin</option>
            <option value="user">user</option>
        </select>
        <br>
        <button type="Submit"> Submit</button>
    </form> -->

    <div class="container">
        <h1>Halaman Login</h1>
        <form action="" method="POST">

            <div class="row mt-5">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="username" class="form-label">username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="username">
                    </div>
            </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="password">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">login</button>
                    </div>
                </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>