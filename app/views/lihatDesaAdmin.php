<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Users</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASEURL;?>/css1/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL;?>/css1/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Admin Control AKAD</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo BASEURL;?>/Admin/index">Dashboard</a></li>
                <li><a href="<?php echo BASEURL;?>/Admin/daftarLaporanAdmin">Laporan</a></li>
                <li><a href="<?php echo BASEURL;?>/Admin/buatLaporanAdmin">Posts</a></li>
                <li class="active"><a href="<?php echo BASEURL;?>/Admin/daftarKades">Users</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Welcome, Brad</a></li>
                <li><a href="<?php echo BASEURL; ?>/Home/logout">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small><span>Ayo Kawal Anggaran Desa</span></small></h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown create">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Navigasi Admin
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a type="button" data-toggle="modal" data-target="#addPage">Buat Laporan</a></li>
                        <li><a href="<?php echo BASEURL;?>/Admin/daftarKades">Lihat Kades</a></li>
                        <li><a href="<?php echo BASEURL;?>/Admin/buatAkunKades">Buat Akun Kades</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="dashboardAdmin.php">Dashboard</a></li>
            <li><a href="daftarKadesAdmin.php">Daftar Kepala Desa</a></li>
            <li class="active">Informasi Desa</li>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="dashboardAdmin.php" class="list-group-item">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                    </a>
                    <a href="<?php echo BASEURL;?>/Admin/daftarLaporanAdmin" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Daftar Laporan <span class="badge"></span></a>
                    <a href="<?php echo BASEURL;?>/Admin/buatLaporanAdmin" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Buat Laporan <span class="badge"></span></a>
                    <a href="<?php echo BASEURL;?>/Admin/daftarKades" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Daftar Kepala Desa <span class="badge">203</span></a>
                </div>


            </div>
            <div class="col-md-9">
                <!-- Website Overview -->
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Informasi Desa</h3>
                    </div>
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

                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Data Pendapatan Desa Mangaran Tahun 2018</h3>
                    </div>
                    <div class="panel-body table-responsive table-full">
                        <table class="table table-stripped table-bordered">
                            <tr>
                                <td class="text-left text-nowrap">Pendapatan Pajak Daerah:</td>
                                <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['pajakDaerah']?></td>
                            </tr>
                            <tr>
                                <td class="text-left text-nowrap">Pendapatan Asli Desa:</td>
                                <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['pendapatan']?></td>
                            </tr>
                            <tr>
                                <td class="text-left text-nowrap">Alokasi Dana Desa:</td>
                                <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['alokasiDana']?></td>
                            </tr>
                            <tr>
                                <td class="text-left text-nowrap">Dana Desa:</td>
                                <td class="lnr-text-align-left text-nowrap"><?=$data['desa']['danaDesa']?></td>
                            </tr>
                            <tr>
                                <td class="text-left text-nowrap">Total Pendapatan Desa:</td>
                                <td class="lnr-text-align-left text-nowrap"><?=$data['total']['total']?></td>
                            </tr>
                            <tr>
                                <td class="text-left text-nowrap">SILPA:</td>
                                <td class="lnr-text-align-left text-nowrap"><?=$data['silpa']['silpa']?></td>
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
                            <?php foreach($data['belanja'] AS $belanja) {?>
                            <tr>
                                <td class="text-center text-nowrap"><?=$belanja['bidang']?></td>
                                <td class="text-center text-nowrap"><?=$belanja['rincian']?></td>
                                <td class="text-center text-nowrap"><?=$belanja['belanja']?></td>
                                <td class="text-center text-nowrap"><?=$belanja['tanggalBelanja']?></td>
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
</section>

<footer id="footer">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-12">
                <hr class="light">
                <h5>&copy; www.kejari-jember.com</h5>
            </div>
        </div>
    </div>
</footer>

<!-- Modals -->

<!-- Add Page -->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Buat Laporan</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Laporan</label>
                        <input id="laporan" type="text" class="form-control" name="laporan" required autofocus>
                        <span class="help-block"></span>
                    </div>


                    <div class="form-group">
                        <label>Kecamatan</label>
                        <select name="kecamatan" class="form-control">
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kelurahan</label>
                        <select name="kelurahan" class="form-control">
                            <option>Pilih Kelurahan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Status Laporan</label>
                        <select name="status" class="form-control">
                            <option value="1">Private</option>
                            <option value="2">Public</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label></label>
                        <span><img id="foto" src="<?php echo BASEURL;?>/laporan/laporan.png" class="img-responsive" width="450px" height="300px" align=center></span>
                    </div>

                    <div class="form-group">
                        <label>Masukkan Foto</label>
                        <input class="filestyle" id="inpfoto" name="foto" type="file">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Buat laporan</button>
                    </div>
            </form>
        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo BASEURL;?>/js1/bootstrap.min.js"></script>
<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inpfoto").change(function () {

        readURL(this);
    });

</script>
</body>
</html>
