<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PENGISIAN DATA - SICEMET</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <div class="container">
		  <a class="navbar-brand" href="#"><img src="../../assets/img/logo-nav.png" width="210px"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="../../index.html">Home</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Methodology
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="../incremental/index.html">Incremental</a>
		          <a class="dropdown-item" href="../vshaped/index.html">VShaped Model</a>
		          <a class="dropdown-item" href="../spiral/index.html">Spiral</a>
		          <a class="dropdown-item" href="../rad/index.html">Rapid Application Development</a>
		          <a class="dropdown-item" href="../prototyping/index.html">Prototyping</a>
		          <a class="dropdown-item" href="../scrum/index.html">Scrum</a>
		          <a class="dropdown-item" href="../xp/index.html">Extreem Programming</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Back to Home</a>
		        </div>
		      </li>
		      
		  </div>
		  </div>
    </nav>
    
    <h1>
      <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
          <h1 class="display-4">Kenali Proyek Kamu!</h1>
          <p class="lead">Kasih tau situasi yang sesuai dengan project kamu, <em>SiCeMet</em> bakal bantu cari metodologi yang cocok buat kamu!</p>
          <hr class="my-1">
      </div>
    </h1>
        <!--start code here-->
        <section class="container">

          </div>

        	<div class="container my-3">            


              <div class="container bg-light">

              <form action="../result/index.php" method="GET" >
                <div class="form-group">
                  <label for="req">Kebutuhan Awal</label> 
                  <div>
                    <select id="req" name="req" required="required" class="custom-select">
                      <option value="" selected>--Pilih--</option>
                      <option value="dapatdijelaskan">Dapat Dijelaskan</option>
                      <option value="belumjelas">Belum Jelas</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="komp">Kompleksitas</label> 
                  <div>
                    <select id="komp" name="komp" required="required" class="custom-select">
                    <option value="" selected>--Pilih--</option>
                      <option value="sederhana">Sederhana</option>
                      <option value="kompleks">Kompleks</option>
                      <option value="sgtkompleks">Sangat Kompleks</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="deliv">Waktu Delivery</label> 
                  <div>
                    <select id="deliv" name="deliv" required="required" class="custom-select">
                      <option value="" selected>--Pilih--</option>
                      <option value="1bulan">< 1bulan</option>
                      <option value="1sd3bulan">1 - 3 Bulan</option>
                      <option value="4sd6bulan">4 - 6 bulan</option>
                      <option value="6sd12bulan">6 - 12 Bulan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdm">Jumlah Tim (SDM)</label> 
                  <div>
                    <select id="sdm" name="sdm" required="required" class="custom-select">
                      <option value="" selected>--Pilih--</option>
                      <option value="kurangdari12">< 12 Orang</option>
                      <option value="lebihdari12">> 12 Orang</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="skill">Keterampilan Tim</label> 
                  <div>
                    <select id="skill" name="skill" required="required" class="custom-select">
                      <option value="" selected>--Pilih--</option>
                      <option value="berpengalaman">Berpengalaman</option>
                      <option value="campuran">Campuran</option>
                      <option value="tdkberpengalaman">Tidak Berpengalaman</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="client">Klien Terlibat Langsung</label> 
                  <div>
                    <select id="client" name="client" required="required" class="custom-select">
                      <option value="" selected>--Pilih--</option>
                      <option value="ya">Terlibat</option>
                      <option value="tidak">Tidak Terlibat</option>
                    </select>
                  </div>
                </div> 
                <hr>
                <div class="row">
                    <div class="col-sm">
                      <button type="submit" class="btn btn-primary">Cek Metodologi</button>
                    </div>
                    <div class="col-sm">
                      <input class="btn text-white" style="background-color: #E71D36;" type="reset" value="Bersihkan">
                    </div>
                </div>

              </form>
            </div>

          <!-- Button trigger modal 
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
          </button>
          -->

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php
                  echo "Kebutuhan Awal      : ".$_POST['req']."<br>";
                  echo "Kompleksitas Proyek : ".$_POST['komp']."<br>";
                  echo "Waktu Delivery      : ".$_POST['deliv']."<br>";
                  echo "Jumlah Tim (SDM)    : ".$_POST['sdm']."<br>";
                  echo "Keterampilan Tim    : ".$_POST['skill']."<br>";
                  echo "Keterlibatan Client : ".$_POST['client']."<br>";
                  ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Cek Metodologi</button>
                </div>
              </div>
            </div>
          </div>


        </section>
        <!-- Footer-->
        <footer class="bg-dark py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 <br> SICEMET - SPEED YOUR PROJECT UP</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>

</html>
