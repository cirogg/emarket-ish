<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>E-Mercat</title>
  </head>
  <body>
    <!-- <div class="main-container"> -->
    <div class="main-container">


      <header class="main-header">
        <h1>Nombre del e-Market</h1>
      </header>

      <div class="row">

        <div class="navigation col-12 col-lg-12 col-md-12 col-sm-12">

          <nav class="navigation-bar">
            <ul class="navigation-ul">
              <li class="item-navigation-bar"><a href="#container-oferta">Ofertas</a></li>
              <li class="item-navigation-bar"><a href="#section-articulos">Productos</a></li>              
              <li class="item-navigation-bar"><a href="login">Log-In</a></li>
              <li class="item-navigation-bar"><a href="registrarse">Registrarse</a></li>
            </ul>
          </nav>
        </div>

      </div>


      <!-- Carousel  -->
      
      <div class="row">
        <div class="container-oferta col-12 col-lg-12 col-md-12">
          
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/summer-tech-wide.jpg" alt="First slide">
                <div class="carousel-caption d-md-block">
                  <h5>SUMMER SALE</h5>
                  <p>Descuentos de verano!</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/outlet-tech-small-wide.jpg" alt="Second slide">
                <div class="carousel-caption d-md-block">
                  <h5>OUTLET</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/sales-img-small-wide.jpg" alt="Third slide">
                <div class="carousel-caption d-md-block">
                  <h5>SUMMER SALE</h5>
                  <p>Descuentos de verano!</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
         </div>  

        </div>

      </div>
      

      <div class="row" id="container-oferta">
        <div class="container-oferta col-12 col-lg-12 col-md-12">
          <div class="oferta1">
            <h2>OFERTA 1</h2>
            <h3>$precio</h3>
            <button class="button-oferta" type="button" name="button">SHOP NOW</button>
          </div>
        </div>
      </div> 

      <div class="row">
        <div class="container-oferta col-12 col-lg-12 col-md-12">
          <div class="oferta2">
            <h3>40% SALE</h3>
            <h2>OFERTA 2</h2>
            <button class="button-oferta" type="button" name="button">SHOP NOW</button>
          </div>
        </div>
      </div>

      <section class="section-articulos" id="section-articulos">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <article class="articulo">
              <img src="https://http2.mlstatic.com/monitores-D_NP_592925-MLA25521012722_042017-Q.jpg" alt="foto del producto">
              <h4>Articulo Nombre</h4>
              <h3>$9999</h3>
              <button class="button-buy-now" type="button" name="button">SHOP NOW</button>
            </article>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <article class="articulo">
              <img src="https://http2.mlstatic.com/monitores-D_NP_592925-MLA25521012722_042017-Q.jpg" alt="foto del producto">
              <h4>Articulo Nombre</h4>
              <h3>$9999</h3>
              <button class="button-buy-now" type="button" name="button">SHOP NOW</button>
            </article>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <article class="articulo">
              <img src="https://http2.mlstatic.com/monitores-D_NP_592925-MLA25521012722_042017-Q.jpg" alt="foto del producto">
              <h4>Articulo Nombre</h4>
              <h3>$9999</h3>
              <button class="button-buy-now" type="button" name="button">SHOP NOW</button>
            </article>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <article class="articulo">
              <img src="https://http2.mlstatic.com/monitores-D_NP_592925-MLA25521012722_042017-Q.jpg" alt="foto del producto">
              <h4>Articulo Nombre</h4>
              <h3>$9999</h3>
              <button class="button-buy-now" type="button" name="button">SHOP NOW</button>
            </article>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <article class="articulo">
              <img src="https://http2.mlstatic.com/monitores-D_NP_592925-MLA25521012722_042017-Q.jpg" alt="foto del producto">
              <h4>Articulo Nombre</h4>
              <h3>$9999</h3>
              <button class="button-buy-now" type="button" name="button">SHOP NOW</button>
            </article>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <article class="articulo">
              <img src="https://http2.mlstatic.com/monitores-D_NP_592925-MLA25521012722_042017-Q.jpg" alt="foto del producto">
              <h4>Articulo Nombre</h4>
              <h3>$9999</h3>
              <button class="button-buy-now" type="button" name="button">SHOP NOW</button>
            </article>
          </div>
        </div>
      </section>

    </div>
  </body>
</html>
