<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  
  <style>

  .card-img-top {
    height: 200px;
    width: 200px;
  }

  .card-referee {
    display: flex;
  }
  

  </style>

  <body style="background: url(./assets/img/pattern.jpg);">
<!--     navbar -->
  <?php 
    include ("../view/main view/navbar.php");
   ?>

<!--     form search -->
<div class="container mt-5 pt-5">
<div class="row  my-5">
    <div class="col-12">
        <form class="form-inline pt-5 mt-5">
            <input class="form-control mr-sm-2 p-3 shadow-lg" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
    </div>
</div>
    
<!-- Review  -->
     <div class="container my-2 py-2" style="color: black;">
        <div class="row border">
  <!--    card review -->
          <h1 class="text-center">menhua populer</h1>
            <div class="card m-4" style="width: 24rem;">
                <img src="../assets/img/orang 1.png" class="card-img-top" alt="...">
                <div class="card-body mt-5 mr-2 ">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

              <div class="card m-4" style="width: 24rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body mt-5">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

              <div class="card m-4" style="width: 24rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body mt-5">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

              <div class="card m-4" style="width: 24rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body mt-5">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              
         <!-- end card -->
        </div>
     </div>

     <!-- content -->
     <h3 class="text-center py-5 m">Lorem, ipsum dolor.</h3>
     <div class="container">
     <div class="row border ">
<!--   row content one   -->
        <div class="col-md-6">
     <div class="card-referee bg-light-subtle my-4 ">
        <img src="../assets/img/orang 1.png" 1.png class="card-img-top" alt="...">
         <div class="card-body ">
         <div class="text-section">
            <h5 class="card-title fw-bold">Card title</h5>
            <p class="card-text">Some quick example text to build on the card's content.</p>
        </div>
         <div class="cta-section">
        <div>Lorem, ipsum.</div>
        ``<a href="#" class="btn btn-dark">Lorem</a>
      </div>
    </div>
  </div>
      <div class="card-referee bg-light-subtle my-4">
        <img src="../assets/img/orang 1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="text-section">
            <h5 class="card-title fw-bold">Card title</h5>
            <p class="card-text">Some quick example text to build on the card's content.</p>
          </div>
          <div class="cta-section">
            <div>Lorem, ipsum.</div>
            <a href="#" class="btn btn-dark">Lorem</a>
          </div>
        </div>
      </div>
      <div class="card-referee bg-light-subtle my-4">
        <img class="card-img-top" alt="...">
        <div class="card-body">
          <div class="text-section">
            <h5 class="card-title fw-bold">Card title</h5>
            <p class="card-text">Some quick example text to build on the card's content.</p>
          </div>
          <div class="cta-section">
            <div>Lorem, ipsum.</div>
            <a href="#" class="btn btn-dark">Lorem</a>
          </div>
        </div>
      </div>
      <div class="card-referee bg-light-subtle my-4">
        <img class="card-img-top" alt="...">
        <div class="card-body">
          <div class="text-section">
            <h5 class="card-title fw-bold">Card title</h5>
            <p class="card-text">Some quick example text to build on the card's content.</p>
          </div>
          <div class="cta-section">
            <div>Lorem, ipsum.</div>
            <a href="#" class="btn btn-dark">Lorem</a>
          </div>
        </div>
      </div>
      <div class="card-referee bg-light-subtle my-4">
        <img class="card-img-top" alt="...">
        <div class="card-body">
          <div class="text-section">
            <h5 class="card-title fw-bold">Card title</h5>
            <p class="card-text">Some quick example text to build on the card's content.</p>
          </div>
          <div class="cta-section">
            <div>Lorem, ipsum.</div>
            <a href="#" class="btn btn-dark">Lorem</a>
          </div>
        </div>
      </div>
      <div class="card-referee bg-light-subtle my-4">
        <img class="card-img-top" alt="...">
        <div class="card-body">
          <div class="text-section">
            <h5 class="card-title fw-bold">Card title</h5>
            <p class="card-text">Some quick example text to build on the card's content.</p>
          </div>
          <div class="cta-section">
            <div>Lorem, ipsum.</div>
            <a href="#" class="btn btn-dark">Lorem</a>
          </div>
        </div>
      </div>
      <div class="card-referee bg-light-subtle my-4">
        <img class="card-img-top" alt="...">
        <div class="card-body">
          <div class="text-section">
            <h5 class="card-title fw-bold">Card title</h5>
            <p class="card-text">Some quick example text to build on the card's content.</p>
          </div>
          <div class="cta-section">
            <div>Lorem, ipsum.</div>
            <a href="#" class="btn btn-dark">Lorem</a>
          </div>
        </div>
      </div>
      <div class="card-referee bg-light-subtle my-4 ">
        <img class="card-img-top" alt="...">
        <div class="card-body">
          <div class="text-section">
            <h5 class="card-title fw-bold">Card title</h5>
            <p class="card-text">Some quick example text to build on the card's content.</p>
          </div>
          <div class="cta-section">
            <div>Lorem, ipsum.</div>
            <a href="#" class="btn btn-dark">Lorem</a>
          </div>
        </div>
      </div>
    </div>
       
<!-- Row Content two  -->
    <div class="col-md-6 ">
        <div class="card-referee bg-light-subtle my-4">
            <img class="card-img-top" alt="...">
            <div class="card-body">
              <div class="text-section">
                <h5 class="card-title fw-bold">Card title</h5>
                <p class="card-text">Some quick example text to build on the card's content.</p>
              </div>
              <div class="cta-section">
                <div>Lorem, ipsum.</div>
                <a href="#" class="btn btn-dark">Lorem</a>
              </div>
            </div>
          </div>

          <div class="card-referee bg-light-subtle my-4">
            <img class="card-img-top" alt="...">
            <div class="card-body">
              <div class="text-section">
                <h5 class="card-title fw-bold">Card title</h5>
                <p class="card-text">Some quick example text to build on the card's content.</p>
              </div>
              <div class="cta-section">
                <div>Lorem, ipsum.</div>
                <a href="#" class="btn btn-dark">Lorem</a>
              </div>
            </div>
          </div>
          
            <div class="card-referee bg-light-subtle my-4">
            <img class="card-img-top" alt="...">
            <div class="card-body">
              <div class="text-section">
                <h5 class="card-title fw-bold">Card title</h5>
                <p class="card-text">Some quick example text to build on the card's content.</p>
              </div>
              <div class="cta-section">
                <div>Lorem, ipsum.</div>
                <a href="#" class="btn btn-dark">Lorem</a>
              </div>
            </div>
          </div>

            <div class="card-referee bg-light-subtle my-4">
            <img class="card-img-top" alt="...">
            <div class="card-body">
              <div class="text-section">
                <h5 class="card-title fw-bold">Card title</h5>
                <p class="card-text">Some quick example text to build on the card's content.</p>
              </div>
              <div class="cta-section">
                <div>Lorem, ipsum.</div>
                <a href="#" class="btn btn-dark">Lorem</a>
              </div>
            </div>
          </div>

            <div class="card-referee bg-light-subtle my-4">
            <img class="card-img-top" alt="...">
            <div class="card-body">
              <div class="text-section">
                <h5 class="card-title fw-bold">Card title</h5>
                <p class="card-text">Some quick example text to build on the card's content.</p>
              </div>
              <div class="cta-section">
                <div>Lorem, ipsum.</div>
                <a href="#" class="btn btn-dark">Lorem</a>
              </div>
            </div>
          </div>

          <div class="card-referee bg-light-subtle my-4">
            <img class="card-img-top" alt="...">
            <div class="card-body">
              <div class="text-section">
                <h5 class="card-title fw-bold">Card title</h5>
                <p class="card-text">Some quick example text to build on the card's content.</p>
              </div>
              <div class="cta-section">
                <div>Lorem, ipsum.</div>
                <a href="#" class="btn btn-dark">Lorem</a>
              </div>
            </div>
          </div>

          <div class="card-referee bg-light-subtle my-4">
            <img class="card-img-top" alt="...">
            <div class="card-body">
              <div class="text-section">
                <h5 class="card-title fw-bold">Card title</h5>
                <p class="card-text">Some quick example text to build on the card's content.</p>
              </div>
              <div class="cta-section">
                <div>Lorem, ipsum.</div>
                <a href="#" class="btn btn-dark">Lorem</a>
              </div>
            </div>
          </div>

          <div class="card-referee bg-light-subtle my-4">
            <img class="card-img-top" alt="...">
            <div class="card-body">
              <div class="text-section">
                <h5 class="card-title fw-bold">Card title</h5>
                <p class="card-text">Some quick example text to build on the card's content.</p>
              </div>
              <div class="cta-section">
                <div>Lorem, ipsum.</div>
                <a href="#" class="btn btn-dark">Lorem</a>
              </div>
            </div>
          </div>
    <!-- Container -->
    </div>
   </div>
</div>
      
    <!--  End Content-->

<!--  footer -->
      <h2 class="text-center mt-3"><span>Lorem, ipsum.</span></h2>
    <div class="container-fluid bg-dark mt-5">
      <div class="row">
        <div class="col-12 border">
   <!-- card footer -->
          <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card bg-dark text-light">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card-bg-dark text-light">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
<!-- end card footer -->
        </div>
      </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>


</html>
