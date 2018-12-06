
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="../../public/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/css/sidebarStyle.css">
    <link rel="stylesheet" href="../../public/css/panelStyle.css">
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
                    <span><img style="border-radius:20px;" src="../../public/image/rei.jpg" width="100px" height="125px" align=center></span>
                </div>
            </div>
            <div class="sidebar-avatar-text">  Reinaldi Putra  </div>

            <ul class="sidebar-nav">

                <li><a href="dashboardKades.php"> <span>Dashboard</span></a></li>

                <li><a href="profilKades.php"> <span>Profil</span></a></li>

                <li><a href="buatLaporanKades.php"> <span>Buat Laporan</span></a></li>

                <li><a href="rincianBelanjaKades.php"> <span>Rincian Belanja Desa</span></a></li>

                <li><a href="daftarLaporan.php"><span>Daftar Laporan</span></a></li>

                <li><a href="tentangDesaKades.php"><span>Tentang Desa</span></a></li>



                <li><a href="index.php">
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
        <div id="top-nav" class="col-md-12>
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
                <span class="navbar-brand text-size-24" ><i class="fa fa-list-alt"></i> Buat Rincian Belanja Desa Mangaran</span>
            </div>

        </div>
        <hr class="col-md-12">
        </nav>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <form enctype="multipart/form-data" action="<?=BASEURL?>/Kades/insertRincian" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                        <input type="hidden" name="_token" value="P3wxWWpTAThzu8THmI7vzzeTyuL4crHO02V2jEB3">

                        <div class="form-group">
                            <label class="col-md-2 control-label">Status Laporan</label>

                            <div class="col-md-6">
                                <select name="bidang" class="form-control">
                                    <option value="1">Penyelenggaraan Pemerintahan Desa</option>
                                    <option value="2">Pelaksanaan Pembangunan Desa</option>
                                    <option value="3">Pembinaan Kemasyarakatan</option>
                                    <option value="4">Pemberdayaan Masyarakat</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Rincian Belanja</label>

                            <div class="col-md-6">
                                <input id="rincian" type="text" class="form-control" name="rincian" value="" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Total Belanja</label>

                            <div class="col-md-6">
                                <input id="belanja" type="number" min="10000" class="form-control" name="belanja" value="" required autofocus>

                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Buat Rincian Anggaran
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>




<script src="../../public/plugins/jquery/jquery-3.1.1.min.js"></script>
<script src="../../public/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../../public/js/generateWarna.js"></script>
</body>

</html>
