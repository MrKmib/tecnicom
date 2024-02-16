<div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">SED S.R.L.</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/about">Nosotros</a></li>
            <!-- <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
            <li><a class="nav-link scrollto" href="#team">Equipo</a></li>
            <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link scrollto" href="/#pricing">Precios</a></li>
          <li><a class="nav-link scrollto" href="/#contact">Enviar Mensaje</a></li>
          <li>
          <?php
          // Inicia la sesión
          session_start();
          // Verifica si el usuario está autenticado
          if(isset($_SESSION['usuario'])) {
              // El usuario está autenticado
              header("location: /mensajes");
          }
          ?>
            <a class="nav-link scrollto" href="/login">login</a>
          </li>

          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

</div>