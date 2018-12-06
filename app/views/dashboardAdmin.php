
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
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
            <li class="active"><a href="dashboardAdmin.php">Dashboard</a></li>
            <li><a href="daftarLaporanAdmin.php">Laporan</a></li>
            <li><a href="buatLaporanAdmin.php">Posts</a></li>
            <li><a href="daftarKadesAdmin.php">Users</a></li>
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
              <a href="#" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="<?php echo BASEURL;?>/Admin/daftarLaporanAdmin" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Daftar Laporan <span class="badge">12</span></a>
              <a href="<?php echo BASEURL;?>/Admin/buatLaporanAdmin" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Buat Laporan <span class="badge"></span></a>
              <a href="<?php echo BASEURL;?>/Admin/daftarKades" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Daftar Kepala Desa <span class="badge">203</span></a>
            </div>


          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h2>
                    <h4>Pengguna</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12</h2>
                    <h4>Laporan</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 33</h2>
                    <h4>Posts</h4>
                  </div>
                </div>

              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Users</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Joined</th>
                        <th>Sebagai</th>
                      </tr>
                      <tr>
                        <td>Jill Smith</td>
                        <td>jillsmith@gmail.com</td>
                        <td>Dec 12, 2016</td>
                        <td>Kepala Desa Mangaran</td>
                      </tr>
                      <tr>
                        <td>Eve Jackson</td>
                        <td>ejackson@yahoo.com</td>
                        <td>Dec 13, 2016</td>
                        <td>Guest Desa Ajung</td>
                      </tr>
                      <tr>
                        <td>John Doe</td>
                        <td>jdoe@gmail.com</td>
                        <td>Dec 13, 2016</td>
                        <td>Kepala Desa Ajung</td>
                      </tr>
                      <tr>
                        <td>Stephanie Landon</td>
                        <td>landon@yahoo.com</td>
                        <td>Dec 14, 2016</td>
                        <td>Guest Desa Pancakarya</td>
                      </tr>
                      <tr>
                        <td>Mike Johnson</td>
                        <td>mjohnson@gmail.com</td>
                        <td>Dec 15, 2016</td>
                        <td>Kepala Desa Pancakarya</td>
                      </tr>
                    </table>
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
            <form enctype="multipart/form-data" action="<?=BASEURL;?>/Admin/buatLaporan" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
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
