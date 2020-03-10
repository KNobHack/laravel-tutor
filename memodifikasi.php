<?php if (!isset($included)) header('Location:./') ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container text-justufy">
        <h1 class="display-4">Memodifikasi</h1>
        <p class="lead">Login dari laravel kadang tidak sesuai dengan yang kita inginkan, berikut cara untuk memodifikasinya</p>
        <hr>
        <p>Sebelum mulai memodofikasi, perlu diketahui bahwa tutorial ini membutuhkan pemahaman mendalam tentang HTML dan PHP, dan akan lebih baik jika telah memahami dasar dari laravel itu sendiri.</p>
        <p>Apa yang ingin anda modifikasi ???</p>
        <div class="list-group col-xl-4 col-lg-5 col-md-12 col-sm-12">
            <a href="#form" class="list-group-item list-group-item-action">Form</a>
            <a href="#table" class="list-group-item list-group-item-action">Nama tabel</a>
            <a href="#multiauth" class="list-group-item list-group-item-action">Multi autentikasi</a>
        </div>
        <hr>
        <section id="form">
            <h4>Form</h4>
            <p>Form login secara default menampilkan email dan password</p>
            <img src="img/form1.PNG" class="img-fluid">
            <p>Dan form regirstrasi secara default seperti menampilkan Name, Email, Password, Comfirm password</p>
            <img src="img/form2.PNG" class="img-fluid">
            <p>Jika anda ingin mengubah struktur form tersebut anda tidak bisa hanya mengubah HTML nya saja berikut caranya</p>
            <h6>Database</h6>
            <p>Tentu saja, pastikann database anda sudah memiliki field yang sesuai agar bisa menampung data yang akan diinputkan. Secara default laravel akan membuat tabel <i>users</i>, dan tabel itu lah yang harus anda edit.</p>
            <h6>HTML</h6>
            <p>Tentu saja, mengedit HTML akan merubah apa saja yang bisa di inputkan oleh user</p>
            <p>Untuk Mengedit form tersebut ada di <code>resouces/view/auth</code></p>
            <i>Catatan : Di backend anda hanya perlu merubah hal hal yang ada dalam registernya saja</i>
            <h6>Controller</h6>
            <p>Di bagian ini anda akan mengubah file <code>app/http/contollers/auth/RegisterController.php</code></p>
            <img src="img/form3.PNG" class="img-fluid">
            <p>
                Pada baris 53 sampai 55 adalah validator, validator adalah aturan yang harus di penuhi pada sebuah input sebelum di masukkan ke sistem, jadi pastikan validator yang ada sesuai dengan form input yang ada pada view(HTML).<br>
                Yang berwarna merah adalah nama inputnya (dari HTML), dan yang berwarna kuning adalah aturannya.<br>
                <i>Pelajari lebih lanjut tentang validation <a href="https://laravel.com/docs/7.x/validation" target="_blank">di sini</a></i>
            </p>
            <p>Pada baris 68 sampai 70 adalah data yang akan di masukkan pada database, dan di sebelah kanan adalah data yang akan di masukkan ke dalam field tersebut</p>
            <h6>Model</h6>
            <p>Di bagian ini anda akan mengubah file <code>app/User.php</code></p>
            <img src="img/form4.PNG" class="img-fluid">
            <p>Lihat gambar di atas, yang perlu anda ubah hanyalah baris 19, ubahlah berdasarkan apa yang anda ubah pada bagian bagian sebelumnya</p>
            <h6>Email (opsional)</h6>
            <p>
                Mungkin beberapa orang ingin mengubah kolom email menjadi kolom lain, misalnya username atau no_induk.<br>
                Untuk melakukaknnya anda harus menambahkan method baru bernama username pada class LoginController, dan method username tersebut langsung mengembalikan string berisi field yang ingin anda jadikan sebagai pengganti email
            </p>
            <i>Contoh :</i><br>
            <img src="img/form5.PNG" class="img-fluid"><br>
            <i>Catatan : Class LoginController berada di direktori <code>app/http/contollers/auth/LoginControllers.php</code></i>
        </section>
        <hr>
        <section id="table">
            <h4>Nama tabel</h4>
            <p>Secara default nama tabel untuk login pada database adalah users, bagaimana jika kita ingin mengubah nama tabel menjadi siswa?.</p>
            <i>Coming Soon ...</i>
        </section>
        <hr>
        <section id="multiauth">
            <h4>Multi autentikasi</h4>
            <p>Mungkin anda ingin membuat aplikasi dengan halaman login lebih dari satu. bagaimana melakukannya di laravel?</p>
            <i>Coming Soon ...</i>
        </section>
    </div>
</div>