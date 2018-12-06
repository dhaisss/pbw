<?php Flasher::flashProfil(); ?>
<div id="main-panel" class="col-md-12">
    <div id="top-nav" >
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
                    <h3><span class="glyphicon glyphicon-home"></span> Laporan Saya</h3>
                </div>
            </div>
        </nav>
    </div>
    <a href="<?=BASEURL;?>/Kades/buatLaporan"><button class="btn btn-primary" style="margin-left: 15px;">Buat Laporan</button></a>
    <br>
    <br>



    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Laporan Yang Telah dibuat</h3>
            </div>

            <?php foreach($data['laporan'] AS $laporan) {?>
                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <div style="margin-left: 10px;" class="row">
                                <!-- Left-aligned -->
                                <div class="media">
                                    <div class="media-left">
                                        <img src="<?=BASEURL;?>/image/<?=$laporan['foto']?>" alt="Demo Avatar John Doe" class="media-object" style="width:60px;">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> <?=$laporan['nama']?> </h4>
                                        <span><i>Posted on <?=$laporan['updated_at']?></i></span>
                                        <br>
                                        <span><i>Kelurahan <?=$laporan['kelurahan']?>, Kecamatan <?=$laporan['kecamatan']?></i></span>
                                    </div>
                                </div>

                            </div>

                            <hr class="col-md-12">
                            <img src="<?=BASEURL;?>/laporan/<?=$laporan['fotoLaporan']?>" class="img-responsive">

                            <br />
                            <div class="col-md-10" style="text-align: justify-all;">
                                <p class="lead"><?=$laporan['laporan']?></p>
                            </div>
                            <hr class="col-md-8">
                            <div><a href="<?=BASEURL;?>/Kades/editLaporanKades/<?=$laporan['idLaporan']?>"><button type="submit" class="btn btn-success"> <font color="white">Edit Laporan</font></button></a>
                                <a href="<?=BASEURL;?>/Kades/deleteLaporanKades/<?=$laporan['idLaporan']?>"><button type="submit" class="btn btn-danger"> <font color="white">Hapus Laporan</font></button></a>
                            </div>
                        </article>
                    </div>
                </div>
            <?php }?>

        </div>
    </div>

</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AKAD</title>
    <link rel="stylesheet" href="<?=BASEURL;?>/css/bootstrap.min.css">
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>

</html>
