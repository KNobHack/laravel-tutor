<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Laravel</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light  mb-3">
        <div class="container">
            <a class="navbar-brand" href="./">Laravel Login</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?page=persiapan">Persiapan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?page=membuat">Membuat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?page=memodivikasi">Memodivikasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php

        if (isset($_GET['page'])) :
            $included = true;
            if (file_exists($_GET['page'] . '.php')) :
                include($_GET['page'] . '.php');
            endif;
        else : ?>

            <div class="jumbotron">
                <h1 class="display-4">Selamat Datang</h1>
                <p class="lead">Belajar membuat login menggunakan laravel</p>
                <hr class="my-4">
                <p>Langsung aja mulai, click tombol mulai di bawah</p>
                <a class="btn btn-primary btn-lg" href="./?page=persiapan" role="button">Mulai</a>
            </div>

        <?php endif; ?>
    </div>

    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>