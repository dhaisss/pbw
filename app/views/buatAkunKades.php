<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="../../public/css1/bootstrap.min.css" rel="stylesheet">
    <link href="../../public/css1/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>
<?php Flasher::flash(); ?>
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
                <li><a href="<?php echo BASEURL;?>/Admin/laporanSaya/<?=$_SESSION['id_user']?>">Posts</a></li>
                <li><a href="<?php echo BASEURL;?>/Admin/daftarKades">Kepala Desa</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Welcome, Admin</a></li>
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
                        <li><a href="<?php echo BASEURL; ?>/Admin/daftarKades">Lihat Kades</a></li>
                        <li><a href="<?php echo BASEURL; ?>/Admin/buatAkunKades">Buat Akun Kades</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="<?php echo BASEURL;?>/Admin/index" class="list-group-item">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                    </a>
                    <a href="<?php echo BASEURL;?>/Admin/daftarLaporanAdmin" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Daftar Laporan <span class="badge"></span></a>
                    <a href="<?php echo BASEURL;?>/Admin/laporanSaya/<?=$_SESSION['id_user']?>" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Laporan Saya <span class="badge"></span></a>
                    <a href="<?php echo BASEURL;?>/Admin/daftarKades" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Daftar Kepala Desa <span class="badge"></span></a>
                </div>



            </div>
            <div class="col-md-9">
                <!-- Website Overview -->
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Buat Akun Kepala Desa</h3>
                    </div>
                    <div class="panel-body">
                        <form enctype="multipart/form-data" action="<?=BASEURL; ?>/Admin/insert" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Nama Lengkap</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="nama" required autofocus>
                                    <span class="help-block">
                        <strong></strong>
                      </span>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Alamat Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" required autofocus>
                                    <span class="help-block">
                        <strong></strong>
                      </span>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Alamat</label>
                                <div class="col-md-6">
                                    <input id="alamat" type="text" class="form-control" name="alamat" required autofocus>
                                    <span class="help-block">
                        <strong></strong>
                      </span>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="kecamatan" class="col-md-2 control-label">Kecamatan</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="kecamatan">
                                        <option value="">Pilih Kecamatan : </option>
                                        <?php foreach ($data['kecamatan'] as $kec):?>
                                            <option value="<?= $kec['idKecamatan'];?>"><?= $kec['kecamatan'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kelurahan" class="col-md-2 control-label">Kelurahan</label>
                                <div class="col-md-4">
                                    <select name="kelurahan" class="form-control">
                                        <option>Pilih Kelurahan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Nomor KTP</label>
                                <div class="col-md-6">
                                    <input id="noKTP" type="number" min="16" max="16" class="form-control" name="noKTP" required autofocus>
                                    <span class="help-block">
                        <strong></strong>
                      </span>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-2 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Buat Akun
                                    </button>
                                </div>
                            </div>
                        </form>


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
                        <select class="form-control" name="kecamatan">
                            <option value="">Pilih Kecamatan : </option>
                            <?php foreach ($data['kecamatan'] as $kec):?>
                                <option value="<?= $kec['idKecamatan'];?>"><?= $kec['kecamatan'];?></option>
                            <?php endforeach;?>
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
                        <span><img id="foto" src="../../public/laporan/laporan.png" class="img-responsive" width="450px" height="300px" align=center></span>
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

<script src="<?=BASEURL;?>/js/app.js"></script>
<script>
    $(document).ready(function() {

        $('select[name="kecamatan"]').on('change', function(){
            var idKecamatan = $(this).val();

            if(idKecamatan) {
                $.ajax({
                    url: '<?=BASEURL;?>/Home/getKelurahan/'+idKecamatan,
                    type:"GET",
                    dataType:"json",
                    beforeSend: function(){
                        $('#loader').css("visibility", "visible");
                    },

                    success:function(data) {

                        $('select[name="kelurahan"]').empty();
                        for (var i=0;i<data.length;i++){
                            console.log(data[i]);
                            $('select[name="kelurahan"]').append('<option value="'+data[i].idKelurahan+'">' + data[i].kelurahan + '</option>');
                        }

                    },
                    complete: function(){
                        $('#loader').css("visibility", "hidden");
                    }
                });
            } else {
                $('select[name="kelurahan"]').empty();
            }

        });

    });
</script>
</body>
</html>
