
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
<div class="container">
  <div class="p-container text-center fw-bold mt-5 " data-aos="fade-right">
      <h2> INSTRUKTUR BERPENGALAMAN </h2>
  </div>
  <div class="row mt-3">
    <div class="col-md-4">
      <div class="card">
        <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="text-left">Siti</h3>
          <ul class="list-unstyled">
            <li>Tenaga Ahli</li>
            <li>Berpengalaman</li>
            <li>Tenang dan Sabar</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="text-left">Rudi</h3>
          <ul class="list-unstyled">
            <li>Tenaga Ahli</li>
            <li>Berpengalaman</li>
            <li>Tegas dan Disiplin</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="text-left">Tono</h3>
          <ul class="list-unstyled">
            <li>Tenaga Ahli</li>
            <li>Berpengalaman</li>
            <li>Penuh Energi</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
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

