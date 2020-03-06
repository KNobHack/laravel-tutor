<?php if (!isset($included)) header('Location:./') ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Persiapan</h1>
        <p class="lead">Sebelum memulai mebuat login kita harus mempersiapkan beberapa hal terlenih dahulu</p>
        <hr>
        <h5 class="display-10">Internet</h5>
        <p>Tentunya koneksi internet harus ada, karena akan mendownload beberapa komponen</p>
        <hr>
        <h5 class="display-10">PHP</h5>
        <p class="lead">Versi PHP disarankan di upgrade ke versi terbaru, versi terbaru saat ini adalah 7.4.2</p>
        <hr>
        <h5 class="display-10">Composer</h5>
        <p class="lead">Composer adalah dependency management untuk bahasa pemrograman PHP</p>
        <p class="lead">Download
            <a href="https://getcomposer.com">di sini</a>
        </p>
        <hr>
        <h5 class="display-10">NPM</h5>
        <p class="lead">Node Package Manager (NPM) pada dasarnya sama dengan composer, perbedaannya yaitu composer untuk bahasa PHP sedangkan NPM untuk bahasa javascript</p>
        <hr>
        <h5 class="display-10">Laravel installer</h5>
        <p class="lead">Untuk mendownload laravel biasanya menggunakan syntax <code>composer --create-project --prefer-dist laravel/laravel nama_project</code>. Daripada repot menulis sytax yang panjang dan sulit di ingat, lebih baik menginstall laravel installer</p>
    </div>
</div>