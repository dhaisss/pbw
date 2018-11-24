<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/1.css">
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Fjalla+One|Kodchasan|Pacifico|Righteous" rel="stylesheet">
    <title>Register</title>
    <style>
      @media (min-width: 992px) {
        .form-control{
          float: left;
         }
         .btn{
           border-radius: 30px;
           margin-top: 20px;
           width:430px;
         }

      }
    </style>
  </head>
  <body class="bg" background="<?=BASEURL;?>/img1/1.jpg">
  <?php Flasher::flash(); ?>
    <div class="container">
      <div class="row">
        <form class="" action="<?=BASEURL; ?>/Home/insert" method="post">
          <div class="col-md-12 text-center">
            <div class="kontenreg">
              <h1 style="font-family: 'Poppins', cursive; font-size : 24pt;" >Register to AKAD</h1>
              <div class="form-group">
                <h3>Nama Lengkap</h3>
                <input required="required" class="form-control" type="'text'" name="nama" value="">
              </div>
              <div class="form-group">
                <h3>Alamat Email</h3>
                <input required="required" class="form-control" type="'email'" name="email" value="">
              </div>
              <div class="form-group">
                <h3>Alamat</h3>
                <input required="required" class="form-control" type="'text'" name="alamat" value="">
              </div>
              <div class="form-group">
                <h3>Kecamatan</h3>
                <select class="form-control" name="kecamatan">
                  <option value="">Pilih Kecamatan : </option>
                    <?php foreach ($data['kecamatan'] as $kec):?>
                    <option value="<?= $kec['idKecamatan'];?>"><?= $kec['kecamatan'];?></option>
                    <?php endforeach;?>
                </select>
              </div>
              <div class="form-group">
                <h3>Kelurahan</h3>
                <select class="form-control" name="kelurahan">
                  <option value="">Pilih Kelurahan : </option>
                </select>
                  <input type="hidden" name="idKelurahan">
              </div>
              <div class="form-group">
                <h3>Nomor KTP</h3>
                <input required="required"  class="form-control" type="'number'" name="noktp" value="">
              </div>
              <div class="form-group">
                <h3>Password</h3>
                <input required="required" class="form-control" type="password" name="password" value="">
              </div>
              <div class="form-group">
                <h3>Confirm Password</h3>
                <input required="required" class="form-control" type="password" name="confirmpassword" value="">
              </div>
              <div style="" class="form-group">
                <button class="btn btn-primary " type="submit" name="register">Register</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <footer>
      <div class="container-fluid padding">
        <div class="row text-center">
          <div class="col-12">
            <hr class="light">
            <h5>&copy; www.kejari-jember.com</h5>
          </div>
        </div>
      </div>
    </footer>
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
