<?php if (!isset($included)) header('Location:./') ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Persiapan</h1>
        <p class="lead">Sebelum memulai mebuat login kita harus mempersiapkan beberapa hal terlenih dahulu.<br>Yang harus di siapkan adalah sebagai berikut</p>
        <hr>
        <h5 class="display-10">Internet</h5>
        <p>Tentunya koneksi internet harus ada, karena akan mendownload beberapa komponen. Jadi pastikan perangkat anda sudah terhubung dengan internet</p>
        <hr>
        <h5 class="display-10">PHP</h5>
        <p>Versi PHP disarankan di upgrade ke versi terbaru<br>Download XAMPP versi terbaru <a href="https://www.apachefriends.org/" target="_blank">di sini</a></p>
        <h6>Cara menginstall</h6>
        <p>Jika anda sudah pernah menginstall XAMPP sebelumnya jangan khawatir, panduan installan di bawah tidak akan mempengaruihi installan XAMPP anda sebelumnya</p>
        <p>Setelah anda mendownload XAMPP nya silahkan double-click pada file yang telah di download, maka akan tampil seperti berikut</p>
        <img src="img/xampp1.PNG">
        <p>Click next beberapa kali sampai tampil seperti gambar di bawah</p>
        <img src="img/xampp2.PNG">
        <p>Disini anda mungkin ingin merubah direktori tempat XAMPP nya. Dan jangan lupa untuk menambahkan versi XAMPP di belakang direktori agar tidak bertabrakan dengan XAMPP sebelumnya yang sudah anda install.<br>Berikut contohnya</p>
        <img src="img/xampp3.PNG">
        <p>Setelah itu click next sampai prosses instalasi di mulai, Kemudian tunggu.</p>
        <p>Setelah selesai, buka folder XAMPP tadi lalu cari file bernama <code>xampp-control.exe</code>. Click kanan folder tersebut lalu pilih <code>Send to</code> kemudian <code>Desktop (create shortcut)</code></p>
        <p>Lalu shortcut XAMPP akan muncul di desktop anda</p>
        <img src="img/xampp4.PNG">
        <hr>
        <h5 class="display-10">Composer</h5>
        <p>Composer adalah dependency management untuk bahasa pemrograman PHP</p>
        <p>Download composer <a href="https://getcomposer.org" target="_blank">di sini</a></p>
        <hr>
        <h5 class="display-10">NPM</h5>
        <p>Node Package Manager (NPM) pada dasarnya sama dengan composer, perbedaannya yaitu composer untuk bahasa PHP sedangkan NPM untuk bahasa javascript</p>
        <hr>
        <h5 class="display-10">Laravel installer</h5>
        <p>Untuk mendownload laravel biasanya menggunakan syntax <code>composer --create-project --prefer-dist laravel/laravel nama_project</code>. Daripada repot menulis sytax yang panjang dan sulit di ingat, lebih baik menginstall laravel installer</p>
    </div>
</div>