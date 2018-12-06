<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="<?=BASEURL;?>/css/sidebarStyle.css">
    <link rel="stylesheet" href="<?=BASEURL;?>/css/panelStyle.css">
    <link href="<?=BASEURL;?>/css1/bootstrap.min.css" rel="stylesheet">
    <link href="<?=BASEURL;?>/css1/style.css" rel="stylesheet">
    <style>
        html, body {
            background-color: white;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .color-bg{
            background-color: #00aacc !important;
            border-color: #00aacc !important;
            color:#ffffff !important;
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

                <li><a href="<?=BASEURL;?>/Guest/index"> <span>Dashboard</span></a></li>

                <li><a href="<?=BASEURL;?>/Guest/profilGuest"> <span>Profil</span></a></li>

                <li><a href="<?=BASEURL;?>/Guest/buatLaporan"> <span>Buat Laporan</span></a></li>

                <li><a href="<?=BASEURL;?>/Guest/daftarKadesGuest"> <span>Daftar Kepala Desa</span></a></li>

                <li><a href="<?=BASEURL;?>/Home/logout"</a><span>Logout</span></li>


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
                        <a class="navbar-brand text-size-24" href="#"><i class="fa fa-list-alt"></i> Kepala Desa </a>
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
                        <div class="panel panel-default">
                            <div class="panel-heading main-color-bg">
                                <h3 class="panel-title"> Kepala Desa di Daerah Anda </h3>
                            </div>
                                <div class="panel-body table-responsive table-full">
                                    <table class="table table-stripped table-bordered">

                                        <tr>
                                            <td class="text-center text-nowrap">Nomor Telepon</td>
                                            <td class="text-center text-nowrap">Nama</td>
                                            <td class="text-center text-nowrap">Kepala Desa</td>
                                            <td class="text-center text-nowrap">Kecamatan</td>
                                            <td class="text-center text-nowrap">Action</td>
                                        </tr>

                                        <tr>
                                            <td class="text-center text-nowrap"><?=$data['kadesGuest']['noTelepon']?></td>
                                            <td class="text-center text-nowrap"><?=$data['kadesGuest']['nama']?></td>
                                            <td class="text-center text-nowrap"><?=$data['kadesGuest']['kelurahan']?></td>
                                            <td class="text-center text-nowrap"><?=$data['kadesGuest']['kecamatan']?></td>
                                            <td class="text-center text-nowrap">
                                                <a href="<?=BASEURL?>/Guest/detailKades/<?=$data['kadesGuest']['idKelurahan']?>"><button type="submit" class="btn btn-success"> <font color="white">Lihat Detail Desa</font></button></a>

                                        </tr>

                                    </table>
                                </div>



                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading color-bg">
                                <h3 class="panel-title">Data Kepala Desa</h3>
                            </div>
                            <div class="panel-body table-responsive table-full">
                                <table class="table table-stripped table-bordered">

                                    <tr>
                                        <td class="text-center text-nowrap" >Nomor Telepon</td>
                                        <td class="text-center text-nowrap">Nama</td>
                                        <td class="text-center text-nowrap">Kepala Desa</td>
                                        <td class="text-center text-nowrap">Kecamatan</td>
                                        <td class="text-center text-nowrap">Action</td>
                                    </tr>

                                    <?php foreach($data['kades'] AS $kades) {?>
                                    <tr>
                                        <td class="text-center text-nowrap"><?=$kades['noTelepon']?></td>
                                        <td class="text-center text-nowrap"><?=$kades['nama']?></td>
                                        <td class="text-center text-nowrap"><?=$kades['kelurahan']?></td>
                                        <td class="text-center text-nowrap"><?=$kades['kecamatan']?></td>
                                        <td class="text-center text-nowrap">
                                            <a href="<?=BASEURL?>/Guest/detailKades/<?=$kades['idKelurahan']?>"><button type="submit" class="btn btn-success"> <font color="white">Lihat Detail Desa</font></button></a>


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
</div>
</body>


</html>
