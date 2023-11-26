<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TOKO SAYA - BERANDA</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark main-color">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <a class="navbar-brand me-auto" href="index.php">Toko game saya</a>
          <ul class="navbar-nav">
            <li class="nav-item me-4">
              <a class="nav-link active" aria-current="page" href="login.php"
                >Login</a
              >
            </li>
            <li class="nav-item me-4">
              <a class="nav-link active" aria-current="page" href="#"
                >Beranda</a
              >
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="gamemobile.php">Game Mobile</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="gamepc.php">Game pc</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="inputjk.php">Joki ML</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="inputct.php" tabindex="-1" aria-disabled="true">
                <i class="bi bi-file-earmark-person"></i>Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End Navbar-->

    <!--Banner-->
    <div class="container-fluid banner d-flex align-items-center">
      <div class="container">
        <h1 class="text-light text-center display-5 mb-3">
          Selamat Datang Di Toko Game Saya
        </h1>
        <h2 class="text-light text-center mb-4">Lagi mau top up apa</h2>
        <div class="col-md-8 offset-md-2">
          <div class="input-group input-group-lg">
            <select class="form-control" id="inputGroupSelect04">
              <option selected>Pilih Kategori Game...</option>
              <option value="1">Mobile Legend</option>
              <option value="2">Free Fire</option>
              <option value="3">Pubg Mobile</option>
            </select>
            <div class="input-group-append">
              <button class="btn btn-lg btn-warning text-light" type="button">
                Search
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Banner-->

    <!--Populer-->
    <div class="container-fluid py-5">
      <div class="container">
        <h2 class="text-center">Game Populer yang sering dimainkan</h2>

        <div class="row mt-5 justify-content-center">
          <div class="col-sm-6 col-lg-3 hovered-card mb-3">
            <div class="card">
              <img class="card-img-top" src="mobilelegend.jpeg" alt="" />
              <div class="card-body">
                <h5 class="card-title text-center">Mobile Legend</h5>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3 hovered-card mb-3">
            <div class="card">
              <img class="card-img-top" src="FREE FIRE.jpg" alt="" />
              <div class="card-body">
                <h5 class="card-title text-center">Free Fire</h5>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3 hovered-card mb-3">
            <div class="card">
              <img class="card-img-top" src="PUBG MOBILE.jpeg" alt="" />
              <div class="card-body">
                <h5 class="card-title text-center">Pubg Mobile</h5>
              </div>
            </div>
          </div>

          <div class="mt-4 d-flex justify-content-center">
            <div> <a href="gamemobile.php" class="btn btn-warning btn-lg text-light">Form Pembelian</div></a>
          </div>
        </div>
      </div>
    </div>
    <!--End Populer-->

    <!--Footer-->
    <div class="container-fluid py-3 bg-dark text-light">
      <div class="container d-flex justify-content-between">
        <label>&copy;2023 Toko game saya</label>
        <label>Created by Kelompok 10</label>
      </div>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
  </body>
</html>
