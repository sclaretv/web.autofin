<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Autofin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS personalizado -->
    <link rel="stylesheet" type="text/css" href="assets/css/style-final.css"  >

    <script src="https://use.fontawesome.com/b21933b416.js"></script>

  </head>
  <body>

      <!-- menu -->
      <?php  include 'menu.php'; ?>
      
      <!-- contenido -->
      <div class="container-fluid align-bottom">
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/logotipo-autofin-blanco.svg" width="150" height="45" alt="">
          </div>
          <div class="col-lg-6"></div>
        </div>
      </div>

      <!-- Footer -->
      <div class="container-fluid fixed-bottom ">
        <!-- Contact -->
        <div class="row bg-black" id="footer-contact">
            <div class="col-lg-6 col-md-12 align-self-center" >
              <div class="imagen-autofin">
                <img src="assets/img/logotipo-autofin-blanco.svg" width="160" height="60" alt="">  
              </div>
            </div>
            <div class="col-lg-6 col-sm-12 align-self-center">
              <div class="contact-autofin">
                <p class="">Contáctanos</p>
                <p class="text-yellow ">+562 2235 0850</p>
                <p class="">Lunes a Viernes de 09:00 a 18:00 hrs.</p>
                <p class="">Rosario Norte 532. Oficina 1503, piso 15. Las Condes.</p>
              </div>
              
            </div>
        </div>

        <!-- Social media -->
        <div class="row bg-yellow" id="footer-social">
          <nav class="navbar navbar-expand-md col-12 ">
            <div class="container">
              <ul class="navbar-nav ml-auto flex-row">
                <li class="nav-item li-footer">
                  <a class="navbar-brand" href="#"><img src="assets/icons/icono-blog.svg"  width="25" height="25" alt=""></a>
                </li>
                <li class="nav-item li-footer">
                  <a class="navbar-brand" href="#"><img src="assets/icons/icono-facebook.svg"  width="25" height="25" alt=""></a>
                </li>
                <li class="nav-item li-footer">
                  <a class="navbar-brand" href="#"><img src="assets/icons/icono-instagram.svg"  width="25" height="25" alt=""></a>
                </li>
              </ul>
          </div>
          </nav>       
        </div>
      </div> 
    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>