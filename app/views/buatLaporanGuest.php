<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AKAD</title>
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

                <li><a href="<?=BASEURL;?>/Guest/buatLaporanGuest"> <span>Buat Laporan</span></a></li>

                <li><a href="<?=BASEURL;?>/Guest/daftarKadesGuest"> <span>Daftar Kepala Desa</span></a></li>



                <li><a href="<?=BASEURL;?>/Home/logout">
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
                        <h3><span class="glyphicon glyphicon-user"></span> Buat Laporan</h3>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-12">
            <!-- Website Overview -->
            <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                    <h3 class="panel-title" style="font-size: medium">Buat Laporan</h3>
                </div>
                <div class="panel-body">

                    <form enctype="multipart/form-data" action="dashboardGuest.php" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Laporan</label>
                            <div class="col-md-6">
                                <input id="laporan" type="text" class="form-control" name="laporan" required autofocus>
                                <span class="help-block">
                        <strong></strong>
                      </span>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kecamatan" class="col-md-3 control-label">Kecamatan</label>
                            <div class="col-md-6">
                                <select name="kecamatan" class="form-control">
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kelurahan" class="col-md-3 control-label">Kelurahan</label>
                            <div class="col-md-6">
                                <select name="kelurahan" class="form-control">
                                    <option>Pilih Kelurahan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Status Laporan</label>

                            <div class="col-md-6">
                                <select name="status" class="form-control">
                                    <option value="1">Private</option>
                                    <option value="2">Public</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <span><img id="foto" src="<?=BASEURL;?>/laporan/laporan.png" class="img-responsive" width="450px" height="300px" align=center></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Masukkan Foto</label>
                            <div class="col-sm-6">
                                <input class="filestyle" id="inpfoto" name="foto" type="file">
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <div class="col-sm-9" align="right">
                                <button type="submit" class="btn btn-primary">
                                    Buat Laporan
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        $('select[name="kecamatan"]').on('change', function(){
            var idKecamatan = $(this).val();
            if(idKecamatan) {
                $.ajax({
                    url: '/kelurahan/get/'+idKecamatan,
                    type:"GET",
                    dataType:"json",
                    beforeSend: function(){
                        $('#loader').css("visibility", "visible");
                    },

                    success:function(data) {

                        $('select[name="kelurahan"]').empty();

                        $.each(data, function(key, value){

                            $('select[name="kelurahan"]').append('<option value="'+ key +'">' + value + '</option>');

                        });
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