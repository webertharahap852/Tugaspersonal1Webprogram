
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
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container-fluid">
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
<!-- carousel -->
<div id="carouselExampleCaptions" class="carousel slide pb-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="IMG/Untitled design (1).png" class="d-block w-100 carousel-img" alt="IMG1">
        <div class="carousel-caption d-none d-md-block">
          <h5>BELAJAR DI LEARN2DRIVE</h5>
          <p>Anda Mendapatkan panduan dari instruktur terbaik</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/IMG/Untitled design.png" class="d-block w-100 carousel-img" alt="IMG2">
        <div class="carousel-caption d-none d-md-block">
          <h5>BELAJAR DI LEARN2DRIVE</h5>
          <p>Membantu meningkatkan kepercayaan diri Anda di jalan raya.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/IMG/web.png" class="d-block w-100 carousel-img" alt="IMG3">
        <div class="carousel-caption d-none d-md-block">
          <h5>BELAJAR DI LEARN2DRIVE</h5>
          <p>Membantu Anda memenuhi persyaratan mendapatkan lisensi mengemudi.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- endcarousel -->

<!-- About us (start) -->
<section class="about-us mt-5 pb-3">
        <div class="container">
          <div class="about">
              <div class="container">
                  <div class="p-container text-center fw-bold mt-5 " data-aos="fade-right">
                      <h2> About </h2>
                  </div>
    <div class="row mt-4">
        <div class="col-md-6 pb-5">
            <h3 class="fw-bold about-us"data-aos="fade-up">
                Berani melaju dengan percaya diri 
                bersama kursus mengemudi kami!
            </h3>
            <p class="about-us-sub mt-3 ">
                Siap mengemudi dengan percaya diri? Bergabunglah dengan kursus 
                mengemudi kami dan rasakan pengalaman mengemudi yang tak terlupakan!
            </p>
        </div>
        <div class="col-md-6 pb-3">
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
<!-- Services -->
<div class="service mt-5">
    <div class="container">
        <div class="sev-container text-center fw-bold ">
            <h2>Service</h2>
        </div>
        <div class="row mt-3">
            <div class="title-container text-center">
                <p>
                "Kami menawarkan pelayanan kursus mobil yang lengkap dan komprehensif, 
                mencakup teori, simulasi, dan pelatihan praktis yang dirancang untuk 
                membantu Anda menjadi pengemudi yang handal dan aman di jalan raya."
                </p>
            </div>
        </div>
    </div>
    
    <!-- card -->
    <div class="container mt-3">
        <div class="row row-cols-1 row-cols-md-3 pb-3 g-4">
            <div class="col">
              <div class="card h-100 shadow-sm">
                <img src="assets/IMG/1.png" class="card-img-top" alt="IMG/"data-aos="fade-up">
                <div class="card-body">
                  <h5 class="card-title">Tranmisi matic</h5>
                  <p class="card-text">
                    Transmisi matic memberikan kenyamanan dan kemudahan saat mengemudi, 
                    tanpa perlu mengkhawatirkan pergantian gigi secara manua</p>
                  <button type="button" class="btn btn-primary btn-md">Daftar Sekarang</button>
                </div>
                <div class="card-footer">
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 shadow-sm">
                <img src="assets/IMG/2.png" class="card-img-top" alt="IMG/" data-aos="fade-up">
                <div class="card-body">
                  <h5 class="card-title">Transmisi Manual</h5>
                  <p class="card-text">
                    Transmisi manual memberikan kontrol penuh pada pengemudi dan memberikan pengalaman mengemudi 
                    yang lebih dinamis dan menyenangkan
                  </p>
                  <button type="button" class="btn btn-primary btn-md">Daftar Sekarang</button>
                </div>
                <div class="card-footer">
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 shadow-sm">
                <img src="assets/IMG/3.png" class="card-img-top" alt="..."data-aos="fade-up">
                <div class="card-body">
                  <h5 class="card-title">Khusus Truck </h5>
                  <p class="card-text">
                    Kursus khusus untuk pemula yang dirancang untuk membantu Anda meraih lisensi dan menjadi pengemudi truk yang handal.</p>
                  <button type="button" class="btn btn-primary btn-md">Daftar Sekarang</button>
                </div>
                <div class="card-footer">
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>
        <!-- endcard -->
</div>


<!--Short testimonial-->
    <div class="cotainer">
        <div class="service mt-5 pb-5">
            <div class="container">
                <div class="sev-container text-center fw-bold " data-aos="fade-right">
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

<footer class="bg-dark text-light mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5 class="mt-5 text-center">About</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod commodo eros, vel euismod dolor dictum ac. Integer venenatis, purus sit amet congue fermentum, urna mi consectetur ipsum, a lacinia orci dolor nec nulla. </p>
      </div>
      <div class="col-md-4 ">
        <div class="div text-center">
          <h5 class="mt-5">Contact WhatsApp</h5>
        <p><i class="fa-brands fa-whatsapp"></i><i class="bi bi-whatsapp me-2"></i>08123456789</p>
      </div>
        </div>
      <div class="col-md-4">
        <div class="div text-center">
          <h5 class="mt-5">Email</h5>
          <p> <i class="fa-solid fa-envelope"></i><i class="bi bi-envelope me-2"></i>info@example.com</p>
        </div>
        

    </div>
    <hr class="bg-light">
    <div class="row">
      <div class="col-md-12">
        <p class="text-center">Jl. Jend. Sudirman No.1, Jakarta 12345</p>
      </div>
    </div>
  </div>
</footer>


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