<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?=BASEURL;?>/css1/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Kodchasan|Pacifico|Righteous" rel="stylesheet">
    <link href="<?=BASEURL;?>/gaya.css" rel="stylesheet">
    <title>LOGIN</title>
    <style>
        .form-control{
          width: 250px;
          margin: auto;
          margin-top: 30px;
        }
        .btn{
          margin-top: 30px;
          width: 250px;
          border-radius: 30px;
          margin-left: 0px;

        }
        .forgot {
          color: #2aabd2;
        }


      .carousel-caption{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
      }
    </style>
  </head>
  <?php Flasher::flash(); ?>
  <body >
    <div>
      <div>
        <div id="slides" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item">
              <img src="<?=BASEURL;?>/img1/1.jpg" style="width: 100%; max-height: 720px">
              <div class="carousel-caption">
                <div class="col-md-12 text-center">
                    <form action="<?php echo BASEURL; ?>/Home/masuk" method="POST">
                    <h1 style="font-family: 'Poppins', cursive; font-size : 24pt;" >Login to AKAD</h1>
                    <div class="form-group">
                      <input class="form-control" type="email" name="email" id="email" value="" placeholder="email">
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="password" name="password" id="password" value="" placeholder="Password">
                      <button class="btn btn-primary" type="submit" name="button">Login</button>
                      <br>
                      <a  class="forgot" href="#">Forgot Your Password?</a>
                      <br>
                      <a class="register" style="color: #00BFFF" href="reg.php">Don't have an account?</a>
                    </div>
                    </form>

                  </div>

              </div>
            </div>

          </div>
        </div>




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

  </body>
</html>
