
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
                <img src="IMG/icons8-driving-100.png" alt="" width="30" height="24">
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
<!-- endnavbar -->

<!--Short testimonial-->
<div class="cotainer">
  <div class="service mt-5 pb-5">
      <div class="container">
          <div class="sev-container text-center fw-bold mt-5 " data-aos="fade-right">
              <h2>Testimonial</h2>
          </div>
          <div class="row mt-2">
              <div class="title-container text-center">
                  <p>Berikut pengalaman mereka mengikuti kelas kemudi kami ! </p>
              </div>
          </div>
      </div>
</div>      
  <div class="row text-center d-flex align-items-stretch">
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #9d789b;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
            class="rounded-circle img-fluid"data-aos="fade-right" />
        </div>
        <div class="card-body"data-aos="fade-right">
          <h4 class="mb-4">Maria Smantha</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>
            Saya sangat merekomendasikan kursus mengemudi ini kepada 
            siapa pun yang ingin belajar mengemudi dengan cepat dan efektif. 
            Instruktur kami sangat berpengalaman dan membantu saya merasa percaya diri di jalan raya."
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #7a81a8;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
            class="rounded-circle img-fluid"data-aos="fade-right" />
        </div>
        <div class="card-body"data-aos="fade-right">
          <h4 class="mb-4">Lisa Cudrow</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>
            Kursus mengemudi ini benar-benar mengubah hidup saya! Sebelumnya, saya takut mengemudi, 
            tetapi dengan bantuan instruktur kami yang sabar dan dukungan teman-teman sekelas, 
            sekarang saya bisa mengemudi dengan percaya diri dan sukses dalam karir berkendara saya."
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #6d5b98;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
            class="rounded-circle img-fluid"data-aos="fade-right" />
        </div>
        <div class="card-body">
          <h4 class="mb-4">John Smith</h4>
          <hr />
          <p class="dark-grey-text mt-4"data-aos="fade-right">
            <i class="fas fa-quote-left pe-2"></i>
            Pelatihan mengemudi yang saya terima di kursus ini tidak hanya mempersiapkan saya untuk ujian, 
            tetapi juga membekali saya dengan keterampilan dan pengetahuan yang penting 
            untuk mengemudi secara aman dan bertanggung jawab. Terima kasih banyak!"
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--end testimonial-->



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

