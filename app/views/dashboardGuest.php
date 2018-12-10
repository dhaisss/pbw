<?php Flasher::flashProfil(); ?>
<div id="main-panel" class="col-md-12">
    <div id="top-nav" >
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">

                    <h3><span class="glyphicon glyphicon-home"></span> Dashboard</h3>
                </div>
            </div>
        </nav>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Aduan Desa</h3>
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
                                        <span><i>Posted on <?=$laporan['updated_at']?></i></span><span><i>, Sebagai <?=$laporan['Level']?></i></span>
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
                        </article>
                    </div>
                </div>
                <?php }?>

            </div>
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

              <li><a href="<?=BASEURL;?>/Guest/index"> <span>Dashboard</span></a></li>

              <li><a href="<?=BASEURL;?>/Guest/profilGuest"> <span>Profil</span></a></li>

              <li><a href="<?=BASEURL;?>/Guest/laporanSaya/<?=$_SESSION['id_user']?>"> <span>Laporan Saya</span></a></li>

              <li><a href="<?=BASEURL;?>/Guest/daftarKadesGuest"> <span>Daftar Kepala Desa</span></a></li>



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
