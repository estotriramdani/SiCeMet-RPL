<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HASIL - SICEMET</title>
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
              <h1 class="display-4">Rekomendasi <em>SiCeMet</em></h1>
              <p class="lead">Berikut kami sajikan Daftar Metodologi Pengembangan Sistem yang cocok banget buat kamu!</p>
              <hr class="my-1">
          </div>
        </h1>

        <!--start code here-->
        <section class="container">
          
          <div class="container">
            <?php
            // echo "Kebutuhan Awal      : ".$_GET['req']."<br>";
            // echo "Kompleksitas Proyek : ".$_GET['komp']."<br>";
            // echo "Waktu Delivery      : ".$_GET['deliv']."<br>";
            // echo "Jumlah Tim (SDM)    : ".$_GET['sdm']."<br>";
            // echo "Keterampilan Tim    : ".$_GET['skill']."<br>";
            // echo "Keterlibatan Client : ".$_GET['client']."<br>";

            //$idform = array("req", "komp", "deliv", "sdm", "skill", "client");

            $valueform = array(
                                "req" => $_GET['req'], 
                                "komp" => $_GET['komp'], 
                                "deliv" => $_GET['deliv'], 
                                "sdm" => $_GET['sdm'], 
                                "skill" => $_GET['skill'], 
                                "client" => $_GET['client']
                              );

            $skormetodologi = array(
              "Incremental" => 0,
              "V-Shaped Model" => 0,
              "Spiral" => 0,
              "Rapid Application Development" => 0,
              "Prototyping" => 0,
              "Scrum" => 0,
              "Extreme Programming" => 0
            );

            foreach($valueform as $key => $value) {
              switch ($value) {
                case "dapatdijelaskan":
                    $skormetodologi['Incremental']++;
                    $skormetodologi['V-Shaped Model']++;
                    $skormetodologi['Spiral']++;
                    $skormetodologi['Rapid Application Development']++;
                case "belumjelas":
                    $skormetodologi['Prototyping']++;
                    $skormetodologi['Scrum']++;
                    $skormetodologi['Extreme Programming']++;
                case "sederhana":
                    $skormetodologi['V-Shaped Model']++;
                    $skormetodologi['Prototyping']++;
                    $skormetodologi['Scrum']++;
                case "kompleks":
                    $skormetodologi['Incremental']++;
                    $skormetodologi['Rapid Application Development']++;
                    $skormetodologi['Scrum']++;
                    $skormetodologi['Extreme Programming']++;

                case "sgtkompleks":
                    $skormetodologi['Incremental']++;
                    $skormetodologi['Spiral']++;
                    $skormetodologi['Scrum']++;
                 }    
            }

            arsort($skormetodologi);

            ?>
          </div>
          


          <div class="container">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Nama Metodologi</th>
                  <th scope="col">Aksi</th>
                  <th scope="col">Kecocokan</th>
                </tr>
              </thead>
              <tbody>

                <?php //Incremental

                for ($i=0; $i < 3; $i++ ) { 
                  // echo key($skormetodologi);
                  // echo $skormetodologi[key($skormetodologi)];
                  // next($skormetodologi);
                  echo '
                  <tr>
                    <td>'.key($skormetodologi).'</td>
                    <td><a href="../'.key($skormetodologi).'/index.html">Detail</a></td>
                    <td>'.($skormetodologi[key($skormetodologi)]).'/6</td>
                  </tr>';

                  //masih salah dipertambahannya

                  next($skormetodologi);
                }

                $skormetodologi = array(
                  "Incremental" => 0,
                  "V-Shaped Model" => 0,
                  "Spiral" => 0,
                  "Rapid Application Development" => 0,
                  "Prototyping" => 0,
                  "Scrum" => 0,
                  "Extreme Programming" => 0
                );

                ?>
              </tbody>
            </table>

            <div class="container">
            <a class="btn btn-primary" href="../form/index.php" role="button">Coba Lagi</a>
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
