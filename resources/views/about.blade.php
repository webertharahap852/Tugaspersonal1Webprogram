
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">

    <link rel="icon" type="image/x-icon" href="assets/IMG/icons8-driving-100.png">
    <title>COMPANY | WELCOME </title>
  </head>
  <body>
<!--start navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-tops">
        <div class="container-fluid pb-3">
            <a class="navbar-brand" href="#">
                <img src="assets/IMG/icons8-driving-100.png" alt="" width="30" height="24">
              </a>
          <a class="navbar-brand fw-bold" href="#"><span class="primary">LEARN</span>2DRIVE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link fw-bold active" aria-current="page" href="/home">Home</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link fw-bold dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About US
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="/about">About us</a></li>
                  <li><a class="dropdown-item" href="/coach">Coach</a></li>
                  <li><a class="dropdown-item" href="/testimonial">Testimonial</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link fw-bold" href="/services">Service</a>
              <li class="nav-item">
                <a class="nav-link fw-bold" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!-- end navbar -->

<!-- About us (start) -->
<section class="about-us mt-5">
    <div class="container">
        <div class="about-us-container">
            <h2 class="text-left fw bold">About Us</h2>
        </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <h3 class="fw-bold about-us"data-aos="fade-up">
                Berani melaju dengan percaya diri 
                bersama kursus mengemudi kami!
            </h3>
            <p class="about-us-sub mt-3">
                Siap mengemudi dengan percaya diri? Bergabunglah dengan kursus 
                mengemudi kami dan rasakan pengalaman mengemudi yang tak terlupakan!
            </p>
        </div>
        <div class="col-md-5">
            <p class="about-us-side">
                Pelajari mengemudi di perusahaan kami untuk mendapatkan pengalaman belajar yang aman, efektif, 
                dan mendapatkan panduan dari instruktur terbaik kami sehingga 
                Anda siap mengemudi dengan percaya diri dan sukses dalam karir berkendara Anda
            </p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <i class="fa-solid fa-car"></i>
                     Membantu Anda memenuhi persyaratan mendapatkan lisensi mengemudi.
                </li>
                <li class="list-group-item">
                    <i class="fa-solid fa-car"></i>
                    Membantu meningkatkan kepercayaan diri Anda di jalan raya.
                </li>
                <li class="list-group-item">
                    <i class="fa-solid fa-car"></i>
                    Membantu meningkatkan keterampilan mengemudi 
                </li>
                <li class="list-group-item">
                    <i class="fa-solid fa-car"></i>
                    Mendapatkan panduan dari instruktur terbaik
                </li>
            </ul>
        </div>
    </div>
    </div>
</section>

<!-- About us (end) -->
<div class="car-container d-flex justify-content-center align-items-end">
  <img src="assets/IMG/1.png" class="img-fluid">
</div>

<div class="vh-40"></div>   
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Logo -->
    <script src="https://kit.fontawesome.com/61746d94c0.js" crossorigin="anonymous"></script>
    <!-- Animation AOS with Java -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- END animation AOS with java -->
  </body>
</html>