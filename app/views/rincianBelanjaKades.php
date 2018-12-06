
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="<?=BASEURL?>/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASEURL?>/plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=BASEURL?>/css/sidebarStyle.css">
    <link rel="stylesheet" href="<?=BASEURL?>/css/panelStyle.css">
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
            <div class="sidebar-avatar-text">  <?=$_SESSION['nama']?>  </div>

            <ul class="sidebar-nav">

                <li><a href="<?=BASEURL;?>/Kades/index"> <span>Dashboard</span></a></li>

                <li><a href="<?=BASEURL;?>/Kades/profilKades"> <span>Profil</span></a></li>

                <li><a href="<?=BASEURL;?>/Kades/laporanSaya/<?=$_SESSION['id_user']?>"> <span>Laporan Saya</span></a></li>

                <li><a href="<?=BASEURL;?>/Kades/rincianBelanja/<?=$_SESSION['kelurahan']?>"> <span>Rincian Belanja Desa</span></a></li>

                <li><a href="<?=BASEURL;?>/Kades/daftarLaporan/<?=$_SESSION['kelurahan']?>"><span>Daftar Laporan</span></a></li>

                <li><a href="<?=BASEURL;?>/Kades/tentangDesa/<?=$_SESSION['kelurahan']?>"><span>Tentang Desa</span></a></li>



                <li><a href="<?php echo BASEURL; ?>/Home/logout">
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
                        <a class="navbar-brand text-size-24" href="#"><i class="fa fa-list-alt"></i> Rincian Belanja Desa </a>
                    </div>
                </div>
            </nav>

            <div class="col-sm-6"><a href="<?=BASEURL?>/Kades/buatRincian"><button type="submit" class="btn btn-success"> <font color="white">Buat Rincian Belanja</font></button></a></div>
            <br>
            <hr class="col-lg-12">
        </div>
        <div id="content">
            <div class="container-fluid">
                <!-- basic form -->

                <!-- Basic element -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Belanja Bidang Penyelenggaraan Pemerintahan Desa </h3>
                                <br>

                                <div class="panel-body table-responsive table-full">
                                    <table class="table table-stripped table-bordered">

                                        <tr>
                                            <td class="text-center text-nowrap">Rincian Belanja</td>
                                            <td class="text-center text-nowrap">Total Pengeluaran</td>
                                            <td class="text-center text-nowrap">Tanggal Pengeluaran</td>
                                            <td class="text-center text-nowrap">Action</td>
                                        </tr>
                                        <?php foreach($data['rincian1'] AS $rincian) {?>
                                        <tr>
                                            <td class="text-center text-nowrap"><?=$rincian['rincian']?></td>
                                            <td class="text-center text-nowrap"><?=$rincian['belanja']?></td>
                                            <td class="text-center text-nowrap"><?=$rincian['tanggalBelanja']?></td>
                                            <td class="text-center text-nowrap">
                                                <a href="<?=BASEURL;?>/Kades/ubahBelanja/<?=$rincian['idBelanja']?>"><button type="submit" class="btn btn-success"> <font color="white">Ubah Rincian Belanja</font></button></a>

                                        </tr>
                                        <?php }?>

                                    </table>
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Belanja Bidang Pelaksanaan Pembangunan Desa</h3>
                            </div>
                            <div class="panel-body table-responsive table-full">
                                <table class="table table-stripped table-bordered">

                                    <tr>
                                        <td class="text-center text-nowrap">Rincian Belanja</td>
                                        <td class="text-center text-nowrap">Tanggal Pengeluaran</td>
                                        <td class="text-center text-nowrap">Total Pengeluaran</td>
                                        <td class="text-center text-nowrap">Action</td>
                                    </tr>

                                    <?php foreach($data['rincian2'] AS $rincian) {?>
                                        <tr>
                                            <td class="text-center text-nowrap"><?=$rincian['rincian']?></td>
                                            <td class="text-center text-nowrap"><?=$rincian['belanja']?></td>
                                            <td class="text-center text-nowrap"><?=$rincian['tanggalBelanja']?></td>
                                            <td class="text-center text-nowrap">
                                                <a href="<?=BASEURL;?>/Kades/ubahBelanja/<?=$rincian['idBelanja']?>"><button type="submit" class="btn btn-success"> <font color="white">Ubah Rincian Belanja</font></button></a>

                                        </tr>
                                    <?php }?>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Belanja Bidang Pembinaan Kemasyarakatan</h3>
                            </div>
                            <div class="panel-body table-responsive table-full">
                                <table class="table table-stripped table-bordered">

                                    <tr>
                                        <td class="text-center text-nowrap">Rincian Belanja</td>
                                        <td class="text-center text-nowrap">Tanggal Pengeluaran</td>
                                        <td class="text-center text-nowrap">Total Pengeluaran</td>
                                        <td class="text-center text-nowrap">Action</td>
                                    </tr>

                                    <?php foreach($data['rincian3'] AS $rincian) {?>
                                        <tr>
                                            <td class="text-center text-nowrap"><?=$rincian['rincian']?></td>
                                            <td class="text-center text-nowrap"><?=$rincian['belanja']?></td>
                                            <td class="text-center text-nowrap"><?=$rincian['tanggalBelanja']?></td>
                                            <td class="text-center text-nowrap">
                                                <a href="<?=BASEURL;?>/Kades/ubahBelanja/<?=$rincian['idBelanja']?>"><button type="submit" class="btn btn-success"> <font color="white">Ubah Rincian Belanja</font></button></a>

                                        </tr>
                                    <?php }?>


                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Belanja Bidang Pemberdayaan Masyarakat</h3>
                            </div>
                            <div class="panel-body table-responsive table-full">
                                <table class="table table-stripped table-bordered">

                                    <tr>
                                        <td class="text-center text-nowrap">Rincian Belanja</td>
                                        <td class="text-center text-nowrap">Tanggal Pengeluaran</td>
                                        <td class="text-center text-nowrap">Total Pengeluaran</td>
                                        <td class="text-center text-nowrap">Action</td>
                                    </tr>
                                    <?php foreach($data['rincian4'] AS $rincian) {?>
                                        <tr>
                                            <td class="text-center text-nowrap"><?=$rincian['rincian']?></td>
                                            <td class="text-center text-nowrap"><?=$rincian['belanja']?></td>
                                            <td class="text-center text-nowrap"><?=$rincian['tanggalBelanja']?></td>
                                            <td class="text-center text-nowrap">
                                                <a href="<?=BASEURL;?>/Kades/ubahBelanja/<?=$rincian['idBelanja']?>"><button type="submit" class="btn btn-success"> <font color="white">Ubah Rincian Belanja</font></button></a>

                                        </tr>
                                    <?php }?>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=BASEURL?>/plugins/jquery/jquery-3.1.1.min.js"></script>
    <script src="<?=BASEURL?>/js/generateWarna.js"></script>
</body>

</html>
