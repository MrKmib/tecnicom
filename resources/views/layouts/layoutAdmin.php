<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'admin') {
    header("Location: /login");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>sed</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> 
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href='assets/css/estilos.css'>

  <!-- =======================================================
  *  Name: Camilo Barral
  ======================================================== -->
</head>

<body>

 <div class ="contenido">



  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

<h1 class="logo"><a href="index.html">SED S.R.L.</a></h1>
<!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

<nav id="navbar" class="navbar">
  <ul>
    <li><a class="nav-link scrollto active" href="/">Home</a></li>
      <!-- <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
      <li><a class="nav-link scrollto" href="#team">Equipo</a></li>
      <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
      <li><a class="nav-link scrollto" href="/about">Nosotros</a></li>
    <!-- <li><a class="nav-link scrollto" href="/#pricing">Precios</a></li> -->
    <li><a class="nav-link scrollto"><form action="/logout" method="post">
            <button type="submit" class="logout-button" value="logout">Cerrar sesión</button>
        </form></a></li>

  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

</div>
  </header>
  <!-- End Header -->

  <!--main-->
    <main id="main">
        <?php echo $content; ?>
    </main>
<!-- End #main -->

</div>

  <!-- ======= Footer ======= -->
  <footer>
      <div class="container-foot">
          <div class="footer-section">
              <p>&copy; 2024 Camibet. Todos los derechos reservados.</p>
          </div>
          <div class="footer-section">
              <p><a href="/cookies">Cookies</a>.</p>
          </div>
          <div class="footer-section">
              <p><a href="/privacidad">Política de Privacidad</a></p>
          </div>
          <div class="footer-section">
              <p><a href="avisolegal">Aviso Legal</a></p>
          </div>
          <div class="footer-section">
              <p><a href="/about">Acerca de Nosotros</a></p>
          </div>
      </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script> 

  <!-- Template Main JS File -->
  
  <script src="assets/js/main.js"></script>

</body>

</html>

