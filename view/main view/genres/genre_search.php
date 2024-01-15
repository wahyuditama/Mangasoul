<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-image bg-cover" style="background-image: url(./img/patern.jpg)">
    <!-- NavBar -->
    <nav class="d-flex flex-column navbar-expand-lg navbar-dark bg-dark shadow-lg py-3" id="navbar" style="transition: top 0.3s ease-in-out">
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
        <div class="collapse navbar-collapse text-right" style="width: 100%" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 justify-content-evenly" style="width: 80%">
            <li class="nav-item">
              <a class="nav-link active" aria-current="#" href="#layanan">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="#" href="#portofolio">New Manga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="#" href="#tentang">Menhwa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="#" href="#staff">Library</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="#" href="#kontak">Kontak Kami</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
      <div class="header text-center fw-300 border-top">
        <div class="content d-flex justify-content-center">
          <h4 class="m-2 p-1"><a href="#">Menwa</a></h4>
          <h4 class="m-2 p-1"><a href="#">Menwa</a></h4>
          <h4 class="m-2 p-1"><a href="#">Manga</a></h4>
          <h4 class="m-2 p-1"><a href="#">Terbaru</a></h4>
        </div>
      </div>
    </nav>

    <!-- Content -->
    <div class="container mt-2 pt-4 d-flex justify-content-center ">
      <div class="row ">
        <div class="col-md-12">
          <h2 class="text-center mb-4">Content Section</h2>

          <!-- Dropdown Menu -->
          <div class="dropdown">
            <button
              class="btn btn-secondary dropdown-toggle m-2 mb-4 mb-4 bg-success btn-block"
              type="button"
              id="dropdownMenuButton"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="true"
              style="width: 20vh;"
            >
              Dropdown
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Item 1</a>
              <a class="dropdown-item" href="#">Item 2</a>
              <a class="dropdown-item" href="#">Item 3</a>
            </div>

            <button
              class="btn btn-secondary dropdown-toggle m-2 mb-4 bg-danger"
              type="button"
              id="dropdownMenuButton"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="true"
              style="width: 20vh;"
            >
              Dropdown
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Item 1</a>
              <a class="dropdown-item" href="#">Item 2</a>
              <a class="dropdown-item" href="#">Item 3</a>
            </div>

            <button
              class="btn btn-secondary dropdown-toggle m-2 mb-4 bg-info"
              type="button"
              id="dropdownMenuButton"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="true"
              style="width: 20vh;"
            >
              Dropdown
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Item 1</a>
              <a class="dropdown-item" href="#">Item 2</a>
              <a class="dropdown-item" href="#">Item 3</a>
            </div>

            <button
              class="btn btn-secondary dropdown-toggle m-2 mb-4 bg-warning"
              type="button"
              id="dropdownMenuButton"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="true"
              style="width: 20vh;"
            >
              Dropdown
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Item 1</a>
              <a class="dropdown-item" href="#">Item 2</a>
              <a class="dropdown-item" href="#">Item 3</a>
            </div>

            <button
              class="btn btn-secondary dropdown-toggle m-2 mb-4 bg-primary"
              type="button"
              id="dropdownMenuButton"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="true"
              style="width: 20vh;"
            >
              Dropdown
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Item 1</a>
              <a class="dropdown-item" href="#">Item 2</a>
              <a class="dropdown-item" href="#">Item 3</a>
            </div>
            

            <form class="form-inline d-flex justify-content-center" style="width: 90%;">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-success bg-primary text-white my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...</p>

          <!-- card Container -->

          <div class="container-lg text-center" style="height: 100vh;">
            <div class="row row-cols-md-3 m-2 row-cols-2 gx-4 p-6">
              <!-- Card 1 -->
            <div class="col">
              <div class="card mt-4 pt-4" style="width: 18rem; height: 250px">
                <img class="card-img-top" src="..." alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">Card title 1</h5>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
              <div class="card mt-4 pt-4" style="width: 18rem; height: 250px">
                <img class="card-img-top" src="..." alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">Card title 2</h5>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
              <div class="card mt-4 pt-4" style="width: 18rem; height: 250px">
                <img class="card-img-top" src="..." alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">Card title 3</h5>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
              <div class="card mt-4 pt-4" style="width: 18rem; height: 250px">
                <img class="card-img-top" src="..." alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">Card title 4</h5>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

            <!-- Card 5 -->
            <div class="col">
              <div class="card mt-4 pt-4" style="width: 18rem; height: 250px">
                <img class="card-img-top" src="..." alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">Card title 5</h5>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
              <div class="card mt-4 pt-4" style="width: 18rem; height: 250px">
                <img class="card-img-top" src="..." alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">Card title 6</h5>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
          <!-- End card Container -->
        </div>
      </div>
    </div>
    <!-- end Content -->

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white shadow-sm rounded mt-5 fixed-bottom" style="background-color: #181c20">
      <div class="container p-2">
        <div class="row">
          <div class="col-lg-12 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Footer Content</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, fermentum nulla at, accumsan orci.</p>
          </div>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">© 2024 Lorem ipsum dolor sit.</div>
    </footer>
    <!-- End Footer -->

    <!-- javascript -->
    <script src="js/scrollNavbar.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.10.2/dist/umd/popper.min.js" integrity="..." crossorigin="anonymous"></script>
    <!--  -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      </body>
</html>

