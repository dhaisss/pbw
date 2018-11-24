
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Pages</title>
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
          <li ><a href="dashboardAdmin.php">Dashboard</a></li>
          <li class="active"><a href="daftarLaporanAdmin.php">Laporan</a></li>
          <li><a href="buatLaporanAdmin.php">Posts</a></li>
          <li><a href="daftarKadesAdmin.php">Users</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Welcome, Brad</a></li>
          <li><a href="index.php">Logout</a></li>
        </ul>
      </div>
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
          <li><a href="dashboardAdmin.php">Dashboard</a></li>
          <li class="active">Daftar Laporan</li>
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
              <a href="<?php echo BASEURL;?>/Admin/daftarLaporanAdmin" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Daftar Laporan <span class="badge">12</span></a>
              <a href="<?php echo BASEURL;?>/Admin/buatLaporanAdmin" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Buat Laporan <span class="badge"></span></a>
              <a href="<?php echo BASEURL;?>/Admin/daftarKades" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Daftar Kepala Desa <span class="badge">203</span></a>
            </div>

          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Daftar Laporan</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter ...">
                      </div>
                </div>
                <br>

                  <?php foreach($data AS $laporan) {?>
                <div class="row">
                  <div class="col-md-12">
                    <article>
                      <div style="margin-left: 10px;" class="row">
                        <!-- Left-aligned -->
                        <div class="media">
                          <div class="media-left">
                            <img src="<?php echo BASEURL;?>/image/<?=$laporan['foto']?>" alt="Demo Avatar John Doe" class="media-object" style="width:60px;">
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"> <?=$laporan['nama']?> </h4>
                            <span><small><i>Posted on <?=$laporan['updated_at']?></i></small></span>
                            <br>
                            <span><small><i>Kelurahan <?=$laporan['kelurahan']?>, Kecamatan <?=$laporan['kecamatan']?></i></small></span>
                          </div>
                        </div>
                      </div>
                      <hr class="col-md-12">
                      <img src="<?php echo BASEURL;?>/laporan/<?=$laporan['fotoLaporan']?>" class="img-responsive">

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
