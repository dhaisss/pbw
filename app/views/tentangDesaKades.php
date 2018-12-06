


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AKAD</title>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="<?=BASEURL?>/css/sidebarStyle.css">
    <link rel="stylesheet" href="<?=BASEURL?>/css/panelStyle.css">
    <link href="<?=BASEURL?>/css1/bootstrap.min.css" rel="stylesheet">
    <link href="<?=BASEURL?>/css1/style.css" rel="stylesheet">
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


    <div id="main-panel">
        <div id="top-nav">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <h3><span class="glyphicon glyphicon-user"></span> Tentang Desa Mangaran</h3>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title" style="font-size: medium">Ubah Tentang Desa Mangaran</h3>
                    </div>

                    <div class="panel-body">
                        <form enctype="multipart/form-data" action="<?=BASEURL?>/Kades/updateTentang/<?=$data['kelurahan']['idKelurahan']?>" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">


                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama Sekdes</label>
                                <div class="col-sm-6">
                                    <input type="text" value="<?=$data['kelurahan']['sekdes']?>" name="sekdes" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Luas Daerah</label>
                                <div class="col-sm-6">
                                    <input type="text"  name="luas" value="<?=$data['kelurahan']['luas']?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Jumlah Penduduk</label>
                                <div class="col-sm-6">
                                    <input type="text"  name="penduduk" value="<?=$data['kelurahan']['penduduk']?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Batas Utara</label>
                                <div class="col-sm-6">
                                    <input type="text"  name="utara" value="<?=$data['kelurahan']['utara']?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Batas Selatan</label>
                                <div class="col-sm-6">
                                    <input type="text"  name="selatan" value="<?=$data['kelurahan']['selatan']?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Batas Timur</label>
                                <div class="col-sm-6">
                                    <input type="text"  name="timur" value="<?=$data['kelurahan']['timur']?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Batas Barat</label>
                                <div class="col-sm-6">
                                    <input type="text"  name="barat" value="<?=$data['kelurahan']['barat']?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Bagi Hasil Pajak Daerah</label>
                                <div class="col-sm-6">
                                    <input type="number" min="10000"  name="pajakDaerah" value="<?=$data['kelurahan']['pajakDaerah']?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Pendapatan Asli Desa</label>
                                <div class="col-sm-6">
                                    <input type="number" min="10000" name="pendapatan" value="<?=$data['kelurahan']['pendapatan']?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Alokasi Dana Daerah</label>
                                <div class="col-sm-6">
                                    <input type="number" min="10000" name="alokasiDana" value="<?=$data['kelurahan']['alokasiDana']?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Dana Desa</label>
                                <div class="col-sm-6">
                                    <input type="number" min="10000" name="danaDesa" value="<?=$data['kelurahan']['danaDesa']?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9" align="right">
                                    <button class="btn btn-success" type="submit">Ubah Tentang</button>
                                </div>
                            </div>




                        </form>
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
