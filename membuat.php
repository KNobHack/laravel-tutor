<?php if (!isset($included)) header('Location:./') ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container  text-justify">
        <h1 class="display-4">Membuat</h1>
        <p class="lead">Setelah semua disiapkan, saatnya membuat login</p>
        <hr>
        <p>
            Untuk membuat login di laravel sangat-sangat simpel, jika anda ingin membuat login pada project baru maka anda tinggal mengetikkan syntax berikut<br>
            <code>laravel new nama_project --auth</code><br>
            tentunya anda harus menginstall <a href="./?page=persiapan#li">laravel installer</a> sebelumnya.
            <br>Setelah itu anda tinggal menunggu proses download selesai dan jadilah project baru dengan fitur login lengkap didalamnya. simpel bukan???</p>
        <p>
            Tapi bagaimana jika sudah memiliki project dan ingin menambahkan login di dalamnya?.<br>
            Simak penjelasannya
        </p>
        <hr>
        <p><i>Catatan: seluruh syntax yang ada di bawah adalah syntax yang di tuliskan di Command Prompt dan sudah berada di direktori project</i></p>
        <p>
            Untuk membuat authentication dalam laravel membutuhkan package ui, dan mendownload package ui untuk laravel versi 6 & 7 berbeda<br>
            Untuk mengecek versi laravel anda ketikkan<br>
            <code>php artisan --version</code><br>
            Jika anda berada di versi 6 maka ketikkan syntax berikut<br>
            <code>composer require laravel/ui "^1.0" --dev</code><br>
            Jika anda berada di versi 7 maka syntax-nya <br>
            <code>composer require laravel/ui</code>
        </p>
        <p><i>Catatan: <code>laravel/ui</code> tidak di install di composer global, yang artinya anda harus mendownload ulang <code>laravel/ui</code> pada project baru jika ingin menggunakannya</i></p>
        <p>
            Setelah <code>laravel/ui</code> terinstall di project anda langkah selanjutnya adalah mengetikkan <b>salah satu</b> dari syntax berikut<br>
            <code>php artisan ui bootstrap --auth</code><br>
            <code>php artisan ui vue --auth</code><br>
            <code>php artisan ui react --auth</code><br>
            Anda pasti langsung tau, syntax di atas membiarkan anda memilih framework frontend apa yang anda inginkan untuk tampilan loginnya
        </p>
        <p>
            Setelah itu anda perlu mengetkkan 2 syntax berikut secara berurutan<br>
            <code>npm install</code><br>
            <code>npm run dev</code>
        </p>
        <p>Setelah itu tunggu proses selesai, jika sudah selesai maka halaman login anda sudah siap digunakan</p>
    </div>
</div>