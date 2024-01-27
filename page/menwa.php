<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menhua</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/menwa.css" />
    <link rel="stylesheet" href="../assets/css/style2.css">
  </head>

  <style>

  .tes {
    margin-top: 10%;
  }

  .foto {
    height: 200px;
    width: 200px;
  }

  .berita-foto {
    height: 100%;
    width: 100%;
  }


  </style>

  <body style="background-image: url(./img/patern.jpg)">
    <!-- Navbar,  -->
    <!-- navbar -->
   <?php 
    include ("../view/main view/navbar.php");
   ?>

    <!-- end navbar -->
    <!-- Container -->
    
    <div class="container tes" >
      <div class="row">
        <div class="col-md-8">
          <h2 class="m-4">Menwa Terkini</h2>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4 foto" >
                <img src="../assets/img/orang 1.png" class="berita-foto img-fluid rounded-start" alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit..</p>
                  <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4 foto">
                <img src="../assets/img/img-1.jpg" class="berita-foto img-fluid rounded-start" alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit..</p>
                  <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4 foto">
                <img src="https://via.placeholder.com/200x200" class="berita-foto img-fluid rounded-start" alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit..</p>
                  <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4 foto">
                <img src="https://via.placeholder.com/200x200" class="berita-foto img-fluid rounded-start" alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit..</p>
                  <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4 foto">
                <img src="https://via.placeholder.com/200x200" class="berita-foto img-fluid rounded-start" alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit..</p>
                  <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4 foto">
                <img src="https://via.placeholder.com/200x200" class="berita-foto img-fluid rounded-start" alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit..</p>
                  <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4 foto">
                <img src="https://via.placeholder.com/200x200" class="berita-foto img-fluid rounded-start" alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit..</p>
                  <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small></p>
                </div>
              </div>
            </div>
          </div>


          <!-- end Container -->

          <!-- List Content, scrollable-list -->
        </div>
        <div class="col-md-4">
          <h2>Menwa Populer</h2>

          <?php 
            include "../view/main view/sidebar.php"
          ?>

        </div>
      </div>
    </div>
    <!-- Footer  -->
    <?php 
    include "../view/main view/footer.php"
    ?>
    
    <!-- end Footer -->

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
