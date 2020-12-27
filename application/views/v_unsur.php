<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .content{
            margin-top: 100px;
        }

        img{
            height: 430px;
        }

        p{
            font-size: 21px;
            font-family: sans-serif;

        }
    </style>
    
    <title>Web IOT</title>
  </head>
  <body id="page-top">

        <nav class="navbar navbar-expand-lg navbar navbar-light bg-light fixed-top" id="mainNav">
        <div class="container">
            <span class="navbar-brand mb-0 h1 "><a href="<?php echo base_url('C_blog') ?>">KELOMPOK PRAKERIN 24</a></span>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
        
                <li class="nav-item active">
                   <b><a class="nav-link js-scroll-trigger " href="<?php echo base_url('C_blog/profil') ?>">PROFIL KELOMPOK<span class="sr-only"></span></a></b>
                </li>
                <li class="nav-item">
                    <b><a class="nav-link js-scroll-trigger " href="<?php echo base_url('C_blog/pengertian') ?>">PENGERTIAN</a></b>
                </li> 
                <li class="nav-item">
                    <b><a class="nav-link js-scroll-trigger " href="<?php echo base_url('C_blog/sejarah') ?>">SEJARAH</a></b>
                </li>  
                <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      LAINNYA
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <li><a class="dropdown-item " href="<?php echo base_url('C_blog/manfaat') ?>">Manfaat Iot</a></li>
        <li><a class="dropdown-item " href="<?php echo base_url('C_blog/cara') ?>">Cara Kerja Iot</a></li>
        <li><a class="dropdown-item " href="<?php echo base_url('C_blog/unsur') ?>">Unsur Pembentuk Iot</a></li>
        <li><a class="dropdown-item " href="<?php echo base_url('C_blog/penerapan') ?>">Contoh Penerapan Iot</a></li>

      </ul>
    </li>
                </ul>
            </div>
        </div>
        </nav>

        <div class="container">
            <div class="content">
            <div class="card bg-dark text-white">
                <img src="<?php echo base_url('./assets/img/unsur1.png') ?>" class="card-img" alt="...">
               
                </div>
        <hr>
        <h2>Unsur Pembentuk Internet of Things</h1>
        <br>
        <p>Teknologi seperti Artificial Intelligence, Machine Learning, dan Computer Vision bisa ditambahkan ke sistem IoT. Namun pada bentuk yang paling sederhana, inilah 4 elemen utama yang membentuk sebuah sistem IoT:</p>
        <p><b>Sensor atau device</b><br> Solusi IoT memiliki berbagai bentuk. Terkadang sebuah device memiliki lebih dari 1 sensor. Contohnya, solusi manajemen aset likuid, INTANK, memiliki sensor temperatur dan sensor pengukur level likuid. Solusi monitoring aset seperti APM memiliki 2 device bersensor yang diletakan di aset dan di ruangan atau alat transportasi aset.</p>
        <p>Sesuai dengan kegunaan masing-masing, sensor-sensor ini bertugas mengumpulkan data setiap saat, sesuai interval waktu yang ditentukan. Karena sensor mengumpulkan data berukuran kecil, baterai pada device bisa lebih tahan lama, seperti sensor NB-IoT bisa bertahan selama 10 tahun tanpa ganti baterai.</p>   
        <hr>
        <p><b>Konektivitas</b><br> Tanpa konektivitas, data pada device tidak akan sampai ke sistem. Sarana komunikasi device dengan sistem IoT bisa beragam. Koneksi selular, satelit, WiFi, bluetooth, low power wide area network (LPWAN), dan lainnya.
        </p><p>Pemilihan konektivitas selalu disesuaikan dengan kebutuhan pengguna. Untuk industri yang menggunakan banyak device kecil di area yang luas seperti pada pertanian dan penyaluran listrik, LPWAN adalah jenis konektivitas tepat. Sedangkan untuk industri finansial yang memerlukan keamanan tinggi, SD-WAN dan Managed Service Connectivity.
        </p>
        <hr>
        <p><b>Data Processing</b><br>Saat data dari sensor masuk ke cloud, processing pun dimulai. Karena data selalu datang dan selalu diperbaharui, software bisa melihat perkembangan aset secara real-time dan memastikan aktivitas aset sesuai rule/parameter yang telah ditentukan.
        </p><p>Prosesnya bisa sederhana seperti memastikan tanggal maintenance truk pengiriman di solusi FleetSight. Bisa juga kompleks seperti mengidentifikasi penggunaan masker atau Alat Pelindung Diri (APD) di ruang publik lewat gambar dari kamera security berteknologi Computer Vision.
        </p><p>Proses ini terjadi sangat cepat dan segera mengaktifkan action instan seperti memberi notifikasi pada manajer armada tentang kebutuhan maintenance sebuah truk atau menotifikasi petugas keamanan tentang orang yang tidak mengenakan APD di area yang telah ditentukan.</p>
        <hr>
        <p><b>Dashboard atau User Interface</b><br>Dashboard adalah tempat data ditampilkan agar user dapat mengamati aktivitas real-time yang terjadi pada seluruh device dalam perusahaan. Di sini user juga dapat mengubah pengaturan, rules, dan action yang dilakukan oleh sistem IoT.
        </p><p>Misalnya, dengan menggunakan fitur Location Information (LOCI) sebagai tracker lokasi device, Anda bisa membuat aturan atau rule bahwa mesin EDC tidak bisa keluar dari toko. Lalu, Anda bisa menentukan action otomatis yang akan terjadi jika rule ini dilanggar. Dalam kasus ini, Anda bisa mematikan koneksi SIM card pada EDC untuk memastikan tidak ada pencurian data. Fitur ini bernama “set and forget automation” yang memerintahkan sistem untuk selalu menggunakan action yang sama saat skenario serupa terjadi.
        </p><p>Dashboard solusi Telkomsel IoT dapat diakses 24 jam dari browser di laptop atau handphone. Sehingga, di manapun Anda berada, Anda bisa memantau aktivitas usaha dari jarak jauh. User interface yang sederhana memudahkan pegawai untuk mengelola dengan cepat dan mengerti data yang paling komprehensif.
        </p>

        
        <br><br>
<!--  -->
            </div>
        </div>
        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>