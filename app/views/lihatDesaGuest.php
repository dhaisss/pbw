
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="<?=BASEURL;?>/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASEURL;?>/plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=BASEURL;?>/css/sidebarStyle.css">
    <link rel="stylesheet" href="<?=BASEURL;?>/css/panelStyle.css">
    <style>
        html, body {
            background-color: white;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>

<body>
<div id="wrapper">
    <div id="sidebar">
        <div id="sidebar-wrapper">
            <div class="sidebar-title">


            </div>
            <div>
                <div class="sidebar-avatar-image">
                    <span><img style="border-radius:20px;" src="<?=BASEURL;?>/image/<?=$_SESSION['foto']?>" width="100px" height="125px" align=center></span>
                </div>
            </div>


            <div class="sidebar-avatar">
                <div class="sidebar-avatar-text"> Dhais Firmansyah </div>
            </div>


            <ul class="sidebar-nav">

                <li><a href="<?= BASEURL;?>/Guest/index"> <span>Dashboard</span></a></li>

                <li><a href="<?= BASEURL;?>/Guest/profilGuest"> <span>Profil</span></a></li>

                <li><a href="<?= BASEURL;?>/Guest/buatLaporanGuest"> <span>Buat Laporan</span></a></li>

                <li><a href="<?= BASEURL;?>/Guest/daftarKadesGuest"> <span>Daftar Kepala Desa</span></a></li>




                <li><a href="<?= BASEURL;?>/Home/logout">
                    <span>Logout</span>
                </a>


                </li>



            </ul>
            <div class="sidebar-footer">
                <hr style="border-color: #DDD">
                </a><br>
            </div>
            <div class="sidebar-avatar-image"></div><br>
        </div>
    </div>

    <div id="main-panel">
        <div id="top-nav">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <!-- Navbar toggle button -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- Sidebar toggle button -->
                        <button type="button" class="sidebar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand text-size-24" href="#"><i class="fa fa-list-alt"></i> Informasi Desa </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="content">
            <div class="container-fluid">
                <!-- basic form -->

                <!-- Basic element -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Informasi Mengenai Desa Mangaran </h3>
                                <br>

                                <div class="panel-body table-responsive table-full">
                                    <table class="table table-stripped ">

                                        <tr>
                                            <td class="text-left text-nowrap">Nama Desa:</td>
                                            <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['kelurahan']?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left text-nowrap">Kecamatan    :</td>
                                            <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['kecamatan']?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left text-nowrap">Sekretaris Desa :</td>
                                            <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['sekdes']?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left text-nowrap">Luas:</td>
                                            <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['luas']?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left text-nowrap">Jumlah Penduduk:</td>
                                            <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['penduduk']?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left text-nowrap">Batas Utara:</td>
                                            <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['utara']?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left text-nowrap">Batas Selatan:</td>
                                            <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['selatan']?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left text-nowrap">Batas Timur:</td>
                                            <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['timur']?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left text-nowrap">Batas Barat:</td>
                                            <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['barat']?></td>
                                        </tr>
                                    </table>
                                </div>

                            </div>

                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Pendapatan Desa Mangaran Tahun 2018</h3>
                            </div>
                            <div class="panel-body table-responsive table-full">
                                <table class="table table-stripped table-bordered">
                                    <tr>
                                        <td class="text-left text-nowrap">Pendapatan Pajak Daerah:</td>
                                        <td class="lnr-text-align-left text-nowrap">12000000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-nowrap">Pendapatan Asli Desa:</td>
                                        <td class="lnr-text-align-left text-nowrap">12000000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-nowrap">Alokasi Dana Desa:</td>
                                        <td class="lnr-text-align-left text-nowrap">12000000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-nowrap">Dana Desa:</td>
                                        <td class="lnr-text-align-left text-nowrap">12000000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-nowrap">Total Pendapatan Desa:</td>
                                        <td class="lnr-text-align-left text-nowrap">48000000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-nowrap">SILPA:</td>
                                        <td class="lnr-text-align-left text-nowrap">45999999</td>
                                    </tr>
                                </table>

                            </div>

                        </div>
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Pengeluaran Desa Mangaran Tahun 2018</h3>
                            </div>
                            <div class="panel-body table-responsive table-full">
                                <table class="table table-stripped table-bordered">
                                    <tr>
                                        <td class="text-center text-nowrap">Belanja Bidang</td>
                                        <td class="text-center text-nowrap">Rincian Belanja</td>
                                        <td class="text-center text-nowrap">Total Belanja</td>
                                        <td class="text-center text-nowrap">Tanggal Belanja</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-nowrap">Pelaksanaan Pembangunan Desa</td>
                                        <td class="text-center text-nowrap">Perbaikan Irigasi</td>
                                        <td class="text-center text-nowrap">1</td>
                                        <td class="text-center text-nowrap">2018-10-05 13:20:15</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-nowrap">Pelaksanaan Pembangunan Desa</td>
                                        <td class="text-center text-nowrap">Pembangunan pos jaga</td>
                                        <td class="text-center text-nowrap">2000000</td>
                                        <td class="text-center text-nowrap">2018-10-05 17:54:37</td>
                                    </tr>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=BASEURL;?>/plugins/jquery/jquery-3.1.1.min.js"></script>
<script src="<?=BASEURL;?>/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>


</html>
