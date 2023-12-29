<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/style2.css" />
    <!-- end css -->

    <!-- js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="carousel.js"></script>
    <!-- end js -->

    <!-- fonts -->

    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <title>Baca Komik</title>
  </head>

  <body
    class="bg-image bg-cover"
    style="background-image: url(./img/patern.jpg)"
  >
    <!-- NavBar -->
    <nav
      class="d-flex flex-column navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top py-3"
      id="navbar"
      style="transition: top 0.3s ease-in-out"
    >
   
      <div class="container pb-3">
        <div class="logos mb-2">
          <a class="navbar-brand" href="#">COBAIN</a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse text-right"
          style="width: 100%"
          id="navbarSupportedContent"
        >
          <ul
            class="navbar-nav ms-auto mb-2 mb-lg-0 justify-content-evenly"
            style="width: 80%"
          >
            <li class="nav-item">
              <a class="nav-link active" aria-current="#" href="#layanan"
                >Layanan</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="#" href="#portofolio"
                >New Manga</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="#" href="#tentang"
                >Menhwa</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="#" href="#staff"
                >Library</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="#" href="#kontak"
                >Kontak Kami</a
              >
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
      <div class="header text-center fw-300 border-top">
        <div class="content d-flex justify-content-center">
          <h4 class="m-2 p-1"><a href="#">Menhua</a></h4>
          <h4 class="m-2 p-1"><a href="#">Terbaru</a></h4>
          <h4 class="m-2 p-1"><a href="#">Daftar isi</a></h4>
          <h4 class="m-2 p-1"><a href="#">Manga</a></h4>
        </div>
      </div>
    </nav>


    <!-- end   -->
    <div class="container mt-5 pt-5">
      <h1 class="text-center fw-bold display-1 mt-5 pt-2">
        Manga<span class="text-danger">Populer</span>
      </h1>
      <div class="row">
        <div class="col-12 m-auto">
          <div class="owl-carousel owl-theme">
            <div class="item mb-4">
              <div class="card border-0 shadow">
                <img src="1.jpg" alt="" class="imgcarousel" />
                <div class="card-body">
                  <div class="card-title text-center">
                    <h4>Owl Carousel</h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="card border-0 shadow">
                <img src="3.jpg" alt="" class="imgcarousel" />
                <div class="card-body">
                  <div class="card-title text-center">
                    <h4>Owl Carousel</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 shadow">
                <img src="4.jpg" alt="" class="imgcarousel" />
                <div class="card-body">
                  <div class="card-title text-center">
                    <h4>Owl Carousel</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 shadow">
                <img src="5.jpg" alt="" class="imgcarousel" />
                <div class="card-body">
                  <div class="card-title text-center">
                    <h4>Owl Carousel</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 shadow">
                <img src="6.jpg" alt="" class="imgcarousel" />
                <div class="card-body">
                  <div class="card-title text-center">
                    <h4>Owl Carousel</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 shadow">
                <img src="7.jpg" alt="" class="imgcarousel" />
                <div class="card-body">
                  <div class="card-title text-center">
                    <h4>Owl Carousel</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 shadow">
                <img src="7.jpg" alt="" class="imgcarousel" />
                <div class="card-body">
                  <div class="card-title text-center">
                    <h4>Owl Carousel</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 shadow">
                <img src="7.jpg" alt="" class="imgcarousel" />
                <div class="card-body">
                  <div class="card-title text-center">
                    <h4>Owl Carousel</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 shadow">
                <img src="7.jpg" alt="" class="imgcarousel" />
                <div class="card-body">
                  <div class="card-title text-center">
                    <h4>Owl Carousel</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Manga Terbaru -->
    <div class="container d-flex gap-4">
        
      <div class="container bg-light mt-5 pt-2">
        <h3 class="text-center m-4 pt-5">Manga Terbaru</h3>

        <div class="text-center w-50 mx-auto">
          . Praesentium rem hic repudiandae tempora libero non?
        </div>
        <div class="row row-cols-md-6 pt-4">
          <div class="col mb-5">
            <div class="card shadow">
              <img src="./img/picture4.jpg" class="card-img-top" />
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card shadow">
              <img src="./img/picture3.jpg" class="card-img-top" />
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card shadow">
              <img src="./img/picture3.jpg" class="card-img-top" />
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card shadow">
              <img src="./img/picture3.jpg" class="card-img-top" />
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card shadow">
              <img src="./img/picture3.jpg" class="card-img-top" />
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card shadow">
              <img src="./img/picture3.jpg" class="card-img-top" />
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- end Manga Terbaru -->

        <!--  Update Manga-->
        <div class="container d-inline-block py-5">
          <h1 class="text-center">Update Manga</h1>
          <div class="row row-cols-md-6 row-cols-2 g-4 py-5 p-5">
    <!-- Card  -->
          <div class="col mb-5">
              <div class="card card-sm">
                <img src="./img/picture2.jpg" class="updateManga" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Lorem,</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card-sm">
                <img src="./img/picture3.jpg " class="updateManga" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Lorem,</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card-sm">
                <img src="./img/picture4.jpg" class="updateManga" />
                <div class="card-body">
                  <h5 class="card-title">Lorem, .</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card-sm">
                <img src="./img/picture4.jpg" class="updateManga" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Lorem, .</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card-sm">
                <img src="./img/picture4.jpg" class="updateManga" />
                <div class="card-body">
                  <h5 class="card-title">Lorem, .</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card-sm">
                <img src="./img/picture4.jpg" class="updateManga" />
                <div class="card-body">
                  <h5 class="card-title">Lorem, .</h5>
                </div>
              </div>
            </div>
          </div>
    <!-- End Card -->
        </div>
      </div>
    
    <!-- End Manga Update -->
    <?php
    include 'sidebar.php';
    ?>
    <!-- footer -->
    <footer
      class="text-center text-lg-start text-white shadow-sm rounded"
      style="background-color: #f8f9fa"
    >
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <hr class="my-1 text-dark" />
        <!-- Section: Copyright -->
        <section class="p-2 pt-0">
          <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
              <!-- Copyright -->
              <div class="p-3 text-dark">
                © 2020 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/"
                  >MDBootstrap.com</a
                >
              </div>
              <!-- Copyright -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
              <!-- Facebook -->
              <a
                class="btn btn-outline-dark btn-floating m-1"
                class="text-dark"
                role="button"
                ><i class="fab fa-facebook-f"></i
              ></a>

              <!-- Twitter -->
              <a
                class="btn btn-outline-dark btn-floating m-1"
                class="text-dark"
                role="button"
                ><i class="fab fa-twitter"></i
              ></a>

              <!-- Google -->
              <a
                class="btn btn-outline-dark btn-floating m-1"
                class="text-dark"
                role="button"
                ><i class="fab fa-google"></i
              ></a>

              <!-- Instagram -->
              <a
                class="btn btn-outline-dark btn-floating m-1"
                class="text-dark"
                role="button"
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>
        </section>
      </div>
    </footer>
    

    <!-- javascript -->
    <script src="js/scrollNavbar.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
    ></script>
    <script src="js/carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
    />
  </body>
</html>
