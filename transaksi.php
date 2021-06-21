<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aplikasi Kasir Toko Buku Garuda Gresik</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" /
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Aplikasi Kasir</span>
                <span class="site-heading-lower">Toko Buku Garuda Gresik</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Aplikasi Kasir</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="home.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="transaksi.php">Transaksi</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="grafik.php">Grafik dan Laporan</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-lower">Transaksi Penjualan</span>
                            </h2>
                            
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <form method="POST" action="insert_transaksi.php">
                                <!--bagian untuk input transaksi baru-->
                                    <li class="list-unstyled-item list-hours-item d-flex">
                                        <?php
                                            $tgl = date('l, d-m-y h:i a');
                                            date_default_timezone_set("Asia/Jakarta");

                                            echo "Tanggal Transaksi : ".$tgl;
                                        ?>
                                    </li>
                                    <li class="list-unstyled-item list-hours-item d-flex">
                                        ID Transaksi
                                        <span class="ms-auto">
                                            <input type="text" name="id_transaksi">
                                                <?php

                                                ?>
                                            </input>
                                        </span>                    
                                    </li>
                                    <li class="list-unstyled-item list-hours-item d-flex">
                                        Judul Buku
                                        <br>
                                        <span class="ms-auto">
                                            <select name="id_buku" required>
                                                <?php
                                                    $nama_buku=mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id_buku ASC");
                                                    while ($r = mysqli_fetch_array($nama_buku)){
                                                    ?>

                                                        <option value="<?php echo $r['id_buku'];?>" style="width: 500px;"><?php echo $r['nama_buku'];?></option>    
                                                <?php } ?>
                                            </select>
                                        </span>                    
                                    </li>
                                    <li class="list-unstyled-item list-hours-item d-flex">
                                        Jumlah Barang
                                        <span class="ms-auto">
                                            <input type="text" name="qty"></input>
                                        </span>                    
                                    </li>
                                    <li class="list-unstyled-item list-hours-item d-flex">
                                        <span class="ms-auto">
                                            <button type="submit" style="background-color: white;">Tambah Barang</button>
                                        </span>
                                    </li>
                                </form>
                                <br>
                                <br>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
