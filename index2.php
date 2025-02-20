<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    <?php include("./layouts/header.php"); ?> 
  

    <div class="site-blocks-cover" style="background-image: url(images/fondo.webp);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-stark">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
          <p class="mb-4">Mejores precios</p>
            <h1 class="mb-2">Súper precios<br />en tus artículos<br /> favoritos </h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">Gana más por tu dinero</p>
              <p>
                <a href="index.php" class="btn btn-sm btn-primary">Comprar ahora</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Envío gratuito a nivel mundial</h2>
              <p>Envío gratis en compras de más de $[499]</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Contrareembolso</h2>
              <p>100% garantía de devolución de dinero</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Servicio al cliente 24/7</h2>
              <p>LLámenos 24/7 al 123-456-7890</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-blocks-2">
      <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Categorias</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="busqueda.php?texto=Computadoras">
              <figure class="image">
                <img src="images/Labtop JP2.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Coleccion</span>
                <h3>Computadoras</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="busqueda.php?texto=Telefonos">
              <figure class="image">
                <img src="images/Telefono Z2.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Coleccion</span>
                <h3>Telefonos</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="busqueda.php?texto=Relojes">
              <figure class="image">
                <img src="images/Reloj XDH2.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Coleccion</span>
                <h3>Relojes</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="busqueda.php?texto=Audifonos">
              <figure class="image">
                <img src="images/Audifono con cable2.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Coleccion</span>
                <h3>Audifonos</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Productos destacados</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/Audifono inalambricos.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="index.php">Audífonos inalámbricos con cancelación del ruido</a></h3>
                    <!--<p class="mb-0">Finding perfect t-shirt</p>-->
                    <p class="text-primary font-weight-bold">$200.00</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/Audifono Pro.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="index.php">Drums Pro audífonos inalámbricos sobre el oído</a></h3>
                    <!--<p class="mb-0">Finding perfect t-shirt</p>-->
                    <p class="text-primary font-weight-bold">$600.00</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/Reloj Moon.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="index.php">Space Moon Smartwatch con cargador</a></h3>
                    <!--<p class="mb-0">Finding perfect t-shirt</p>-->
                    <p class="text-primary font-weight-bold">$200.00</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/Reloj fitness.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="index.php">Fitboot fitness con seguimiento del ritmo</a></h3>
                    <!--<p class="mb-0">Finding perfect t-shirt</p>-->
                    <p class="text-primary font-weight-bold">$200.00</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/Telefono OVE.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="index.php">OVE Light Space 5G,</h3>
                    <h3>128GB</a></h3>
                    <!--<p class="mb-0">Finding perfect t-shirt</p>-->
                    <p class="text-primary font-weight-bold">$1000.00</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Oferta!</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <img src="images/Galeria5.jpg" alt="Image placeholder" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h1><a href="index.php">Ahorra hasta $150</a></h1>
            <p>en laptops y tabletas seleccionadas</p>
            <p><a href="index.php" class="btn btn-primary btn-sm">Tienda</a></p>
          </div>
        </div>
      </div>
    </div>
    <?php include("./layouts/footer.php"); ?> 



  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>