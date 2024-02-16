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
 <div class="contenido">
 

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <?php include 'components/header.php';?>
  </header>
  <!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
  <?php include 'components/hero.php';?>
  </section>
  <!-- End Hero -->
  <!-- <div class="contenedor">
  <h1>Mi Héroe</h1>
        <p>Un eslogan genial va aquí.</p>
  </div> -->



  <!--main-->
  <main id="main">

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
      <h1> Clientes</h1>
      <?php include 'components/clientes.php';?>
  </section><!-- End Clients Section -->

  <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

          <div class="text-center">
              <h3>Contactar</h3>
              <p> Para solicitar un servicio puede darle click al boton de abajo.</p>
              <a class="cta-btn" href="#contact">Empezar</a>
          </div>

      </div>
  </section>
  <section id="pricing" class="pricing">
      <?php include 'components/precios.php';?>
  </section><!-- End Pricing Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <?php include 'components/contacto.php';?>
  </section><!-- End Contact Section -->

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