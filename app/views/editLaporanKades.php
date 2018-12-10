
<!DOCTYPE html>
<html lang="en">
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
<?php Flasher::flashProfil(); ?>
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
                        <h3><span class="glyphicon glyphicon-th-list"></span> Ubah Laporan</h3>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-12">
            <!-- Website Overview -->
            <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                    <h3 class="panel-title" style="font-size: medium">Ubah Laporan</h3>
                </div>
                <div class="panel-body">

                    <form enctype="multipart/form-data" action="<?=BASEURL;?>/Kades/updateLaporan/<?=$data['laporan']['idLaporan']?>" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Laporan</label>
                            <div class="col-md-6">
                                <input id="laporan" value="<?=$data['laporan']['laporan']?>" type="text" class="form-control" name="laporan" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Kecamatan</label>
                            <div class="col-md-6">
                                <input id="kecamatan" readonly="readonly" type="text" class="form-control" value="Kec. <?=$data['laporan']['kecamatan']?>" name="kelurahan">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Kelurahan</label>
                            <div class="col-md-6">
                                <input id="kelurahan" readonly="readonly" type="text" class="form-control" value="<?=$data['laporan']['kelurahan']?>" name="kelurahan">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Status Laporan</label>

                            <div class="col-md-6">
                                <select name="status" class="form-control">

                                    <option value="<?=$data['laporan']['idStatus']?>"><?=$data['laporan']['status']?></option>
                                    <option value="1">Private</option>
                                    <option value="2">Public</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <span><img id="foto" src="<?=BASEURL;?>/laporan/<?=$data['laporan']['fotoLaporan']?>" class="img-responsive" width="450px" height="300px" align=center></span>
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
                                    Ubah Laporan
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
