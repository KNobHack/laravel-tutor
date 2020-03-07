<?php if (!isset($included)) header('Location:./') ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container text-justify">
        <h1 class="display-4">Persiapan</h1>
        <p class="lead">Sebelum memulai mebuat login kita harus mempersiapkan beberapa hal terlebih dahulu.<br>Yang harus di siapkan adalah sebagai berikut</p>
        <div class="list-group col-xl-4 col-lg-5 col-md-12 col-sm-12">
            <a href="#internet" class="list-group-item list-group-item-action">Internet</a>
            <a href="#php" class="list-group-item list-group-item-action">PHP</a>
            <a href="#composer" class="list-group-item list-group-item-action">Composer</a>
            <a href="#npm" class="list-group-item list-group-item-action">NPM</a>
            <a href="#li" class="list-group-item list-group-item-action">Laravel Installer</a>
        </div>
        <hr>
        <section id="internet">
            <h4 class="display-10">Internet</h4>
            <p>Tentunya koneksi internet harus ada, karena akan mendownload beberapa komponen. Jadi pastikan perangkat anda sudah terhubung dengan internet</p>
        </section>
        <hr>
        <section id="php">
            <h4 class="display-10">PHP</h4>
            <p>Versi PHP disarankan di upgrade ke versi terbaru<br>Download XAMPP versi terbaru <a href="https://www.apachefriends.org/" target="_blank">di sini</a></p>
            <h6>Cara menginstall</h6>
            <p>Jika anda sudah pernah menginstall XAMPP sebelumnya jangan khawatir, panduan installan di bawah tidak akan mempengaruihi installan XAMPP anda sebelumnya</p>
            <p>Setelah anda mendownload XAMPP nya silahkan double-click pada file yang telah di download, maka akan tampil seperti berikut</p>
            <img src="img/xampp1.PNG" class="img-fluid">
            <p>Click next beberapa kali sampai tampil seperti gambar di bawah</p>
            <img src="img/xampp2.PNG" class="img-fluid">
            <p>Disini anda mungkin ingin merubah direktori tempat XAMPP nya. Dan jangan lupa untuk menambahkan versi XAMPP di belakang direktori agar tidak bertabrakan dengan XAMPP sebelumnya yang sudah anda install.<br>Berikut contohnya</p>
            <img src="img/xampp3.PNG" class="img-fluid">
            <p>Setelah itu click next sampai prosses instalasi di mulai, Kemudian tunggu.</p>
            <p>Setelah selesai, buka folder XAMPP tadi lalu cari file bernama <code>xampp-control.exe</code>. Click kanan folder tersebut lalu pilih <code>Send to</code> kemudian <code>Desktop (create shortcut)</code></p>
            <p>Lalu shortcut XAMPP akan muncul di desktop anda</p>
            <img src="img/xampp4.PNG" class="img-fluid">
        </section>
        <hr>
        <section id="composer">
            <h4 class="display-10">Composer</h4>
            <p>Composer adalah dependency management untuk bahasa pemrograman PHP</p>
            <p>Download composer <a href="https://getcomposer.org" target="_blank">di sini</a></p>
            <h6>Cara menginstall</h6>
            <p>Setelah selesai mendownload composer silahkan double-click pada file tersebut, click next terus sampai tampil seperti berikut</p>
            <img src="img/composer1.PNG" class="img-fluid">
            <p>Di sana anda harus menyertakan path file PHP yang baru saja kita install. Dalam kasus saat ini path php kita ada pada XAMPP yang ada di <code>php/php.exe</code></p>
            <p>Setelah itu click next terus sampai proses instalasi dimulai, lalu tunggu proses instalasi sampai selesai</p>
            <h6>Pengecekan</h6>
            <p>Untuk mengecek berhasil atau tidak nya instalasi composer anda harus membuka Command Prompt dan ketikkan <code>composer</code> lalu tekan enter</p>
            <p>Jika tampil seperti gambar berikut, maka instalasi telah berhasil</p>
            <img src="img/composer2.PNG" class="img-fluid">
        </section>
        <hr>
        <section id="npm">
            <h4 class="display-10">NPM</h4>
            <p>Node Package Manager (NPM) pada dasarnya sama dengan composer, perbedaannya yaitu composer untuk bahasa PHP sedangkan NPM untuk bahasa javascript</p>
            <p>NPM melekat pada node.js. Tak usah bingung, intinya jika anda meninstall node.js maka NPM akan anda dapatkan</p>
            <p>Download node.js <a target="_blank">di sini</a><br>disarankan untuk mendownload versi LTS-nya</p>
            <p>Untuk meninstall sama seperti menginstall aplikasi lainnya, tidak perlu ada konfigurasi tambahan<br>anda hanya perlu click next saja sampai proses instalasi dimulai</p>
            <p>Setelah proses instalasi selesai sama seperti composer untuk mengecek berhasil atau tidak nya anda harus membuka Command Prompt dan ketikkan <code>npm</code> lalu tekan enter</p>
            <p>Jika tampil seperti gambar berikut, maka instalasi telah berhasil</p>
            <img src="img/npm1.PNG" class="img-fluid">
        </section>
        <hr>
        <section id="li">
            <h4 class="display-10">Laravel installer (opsional)</h4>
            <p>Untuk mendownload laravel biasanya menggunakan syntax <code>composer --create-project laravel/laravel --prefer-dist nama_project</code>. Daripada repot menulis sytax yang panjang dan sulit di ingat, lebih baik menginstall laravel installer.<br><i>Jika anda sudah mendownload laravel nya maka lewati bagian ini</i></p>
            <p>Untuk menginstall <i>Laravel Installer</i> anda harus mendownload nya lewat Command Prompt atau lebih tepatnya melalui composer</p>
            <h6>Cara menginstall</h6>
            <p>Buka Command Prompt ketikkan <code>composer global require laravel/installer</code> lalu tekan enter<br>Setelah itu tunggu prosesnya sampai selesai</p>
            <p>Setelah selesai anda tidak perlu lagi mengetikkan <code>composer --create-project laravel/laravel --prefer-dist nama_project</code> untuk mendownload laravel, bisa dengan mudah hanya dengan mengetikkan <code>laravel new nama_project</code></p>
        </section>
        <hr>
        <p>Semua persiapan sudah lengkap</p>
        <a class="btn btn-primary btn-lg" href="./?page=membuat" role="button">Lanjut</a>
    </div>
</div>