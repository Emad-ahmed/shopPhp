<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="footer.css">
  </link>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Home</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info p-3">
    <div class="container-fluid">
      <a class="navbar-brand ms-5" href="index.php">Israt Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Women
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Makeup</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="#">SKin</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Hair</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Personal Care</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mom and Baby
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Baby Products</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="#">Lotions</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Oil</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Powder</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Shampo</a>
              </li>
            </ul>
          </li>

        </ul>
        <form class="d-flex">
          <?php
          if (!isset($_SESSION['email'])) {
            echo '<a href="login.php" class="btn btn-outline-warning text-white me-5" type="submit">
            Login
          </a>
          <a href="register.php" class="btn btn-outline-dark text-white me-5" type="submit">
            Register
          </a>';
          } else {
            echo '<a href="logout.php" class="btn btn-outline-warning text-white me-5" type="submit">
            Logout
          </a>
          <a href="profile.php" class="btn btn-outline-warning text-white me-5" type="submit">
            Profile
          </a>';
          }
          ?>


        </form>
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/1.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="image/2.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="image/3.jpg" class="d-block w-100" alt="..." />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container mt-5 mb-3">
    <h1 class="text-center mb-4">Product</h1>

    <div class="row">

      <?php

      include 'config.php';

      $alldata = mysqli_query($conn, "SELECT * FROM `product`");

      while ($row = mysqli_fetch_array($alldata)) {
        echo " <div class='col-lg-3'>
        <div class='card' style='width: 17rem;'>
        <img src='admin/$row[image]' class='card-img-top' alt='...'>
        <div class='card-body'>
        <h5 class='card-title'>$row[title]</h5>
        <p class='card-text'>$row[description]</p>
        <p class='text-info'> Price: $row[price]Tk</p>
        </div>
        </div>
        </div>
        ";
      }
      ?>



    </div>
  </div>


  <section class="contact-area mt-5" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="contact-content text-center">

            <h6>Dinajpur, Rangpur, Bangladesh</h6>
            <h6>+8801704-262666<span>|</span>+01305814962</h6>
            <div class="contact-social">
              <ul>
                <li><a class="hover-target" href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="hover-target" href=""><i class="fab fa-linkedin-in"></i></a></li>
                <li><a class="hover-target" href=""><i class="fab fa-github"></i></a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =============== 1.9 Contact Area End ====================-->
  <!-- =============== 1.9 Footer Area Start ====================-->
  <footer>
    <p>Copyright &copy; 2022 Israt All Rights Reserved.</p>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>