<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style2.css" />
  <!-- end css -->

  <!-- js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="carousel.js"></script>
  <!-- end js -->

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <title>Baca Komik</title>
</head>

<body class="bg-image bg-cover" style="background-image: url(./img/patern.jpg)">
  <!-- NavBar -->
  <?php
  include "navbar.php";
  ?>
  <!-- end Navbar -->
  <!-- slide bar -->
  <section class="main d-flex flex-column gap-5">
    <div class="carousel">
      <?php
      include "slidebar.php";
      ?>
    </div>
    <!-- end slide bar -->

    <!-- Manga Terbaru -->
    <div class="container d-flex gap-5">
      <div class="container-1 d-flex gap-5">
        <div class="update">
          <div class="header">
            <div class="text-head ">
              <h5>project mangasoul</h5>
            </div>
            <hr>
          </div>
          <div class="box d-flex gap-3 flex-wrap">
            <div class=" img-tmp">
              <a href="">
                <img src="assets/img/img-1.jpg" alt="tumpnail" class="position-img">
                <div class="card-text">
                  <p class="title-manga">Kono Subarashī Sekai ni Shukufuku wo!</p>
                  <p class="chapter">chapter 121</p>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="update">
          <div class="header">
            <div class="text-head ">
              <h5>update komik</h5>
            </div>
            <hr>
          </div>
          <div class="box d-flex gap-3">
            <div class=" img-tmp">
              <a href="">
                <img src="assets/img/img-1.jpg" alt="tumpnail" class="position-img">
                <div class="card-text">
                  <p class="title-manga">Kono Subarashī Sekai ni Shukufuku wo!</p>
                  <p class="chapter">chapter 121</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-2">
        <?php
        include 'sidebar.php';
        ?>
      </div>
    </div>
  </section>
  <!-- End Manga Update -->

  <!-- footer -->

  <?php
  include "footer.php";
  ?>

  <!-- javascript -->
  <script src="assets/js/scrollNavbar.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
  <script src="assets/js/carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
</body>

</html>