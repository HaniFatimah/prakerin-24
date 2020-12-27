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
                <img src="<?php echo base_url('./assets/img/manfaat1.png') ?>" class="card-img" alt="...">
               
                </div>
        <hr>
        <h2>Manfaat Internet of Things</h1>
        <br>
        <p>Berikut ini macam – macam manfaat dari Internet of Things:</p>
        <p><b>Monitoring Lingkungan</b><br>
        IoT dapat digunakan untuk “melihat” kondisi air secara real-time di waduk, irigasi bagi para petani ataupun peternak untuk informasi debit air masih banyak atau tinggal sedikit, di laut sebagai mitigasi bencana ke para pelaut dan nelayan. Dengan monitoring ini kita melihat pergerakan jeni usaha kiat tiap hari dan tiap bulan selama beberapa tahun untuk melihat grafik naik – turunnya usaha.</p>
        <p><b>Pengelolaan Infrastruktur</b><br>
        Untuk pengelolaan Infrastruktur sekarang sudah ada MRT Jakarta, singkatan dari Moda Raya Terpadu Jakarta (Jakarta Mass Rapid Transit), adalah sebuah sistem transportasi transit cepat menggunakan kereta rel listrik di Jakarta.  Kereta cepat IoT  ini dapat dipakai untuk mendeteksi kondisi jalur kereta aman atau tidak untuk dilintasi, sehingga palang pintu kereta akan terbuka secara otomatis tanpa harus khawatir penjaga kereta sedang terlelap tidur.
        </p>
        <p><b>Sensor Peralatan</b><br>Kebanyakan biaya konsumsi peralatan di pertambangan diukur berdasar kapasitas dan pengalaman saja. Tetapi, dengan IoT perusahaan tambang dapat mengukur peralatan mana yang BBM nya sudah mau habis, berapa stok BBM di site, peralatan mana yang olinya harus di ganti, dan lain sebagainya sehingga dapat terukur secara cepat dan tepat. Hal ini sangat memungkinkan karena modul IoT dapat memberikan informasi langsung dari mesin atau peralatan di tambang. Demikian untuk di perkapalan, di pabrik industri dan juga tentunya di infrastruktur IT perkantoran modern. Ada juga Sensor RFID pada helm untuk meminimalisir terjadinya kecelakaan.</p>
        <p><b>Bidang Kesehatan</b><br>IoT yang merambah pada pengguna elektorik rumahan dapat memudahkan orang untuk berbagai hal. Misal, untuk listrik seperti AC split, jika anda lupa mematikannya maka biaya listrik akan mahal. Dengan aplikasi home management, anda dapat mematikan AC dan lampu di rumah atau menyalakannya kembali sebelum anda tiba di rumah.Gedung perkantoran dapat lebih mengoptimalkan seluruh fasilitas yang ada, baik untuk penghematan listrik maupun untuk pengendalian gedung terintegrasi.</p>

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