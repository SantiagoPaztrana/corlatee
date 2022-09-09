<?php

    session_start();

    if (!isset($_SESSION['id'])){
        header("Location: index.php");


    }
       

    $nombre = $_SESSION['nombre'];
    $tipo_usuario = $_SESSION['tipo_usuario'];

    


?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pealmot</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="stile.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="img/logo.jpg.jpeg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->


<body style="background-image: url(img/fondoestrella.jpg)" >

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i> +57 313 587 62 66</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Pealmot</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.jpg.jpeg" width="70px" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">PEALMOT</a></li>
                        <li class="active"><a href="principal.php">Carrito Compras</a></li>
                        <!-- <li><a href="services.html">Servicios</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li> -->
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="index.php">Blog</a></li> -->
                        <!-- <li><a href="contact-us.html">Contact</a></li> -->
                    </ul>
                    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre;?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuracion</a>
                      
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="loggout.php">Salir</a>
                    </div>
                </li>
            </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->
    
  
<br>
<br>
    <?php if($tipo_usuario == 2) { ?>
    <div class="container"  >
       
        <div class="center fadeInDown">
            <div class="container" >

                <span style="--l: '!P';">¡C</span>
                <span style="--l: 'E';">A</span>
                <span style="--l: 'A';">R</span>
                <span style="--l: 'L';">R</span>
                <span style="--l: 'M';">I</span>
                <span style="--l: 'O';">T</span>
                <span style="--l: 'T¡';">O!</span>
            
            </div>
        </div> 
        <hr>
  
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Item</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Acción</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody id="items"></tbody>
            <tfoot>
              <tr id="footer">
                <th scope="row" colspan="5">Carrito vacío - comience a comprar!</th>
              </tr>
            </tfoot>
          </table>
  
          <div class="row" id="cards"></div>
  
    </div>
  <br>
  <br>

    <template id="template-footer">
        <th scope="row" colspan="2">Total productos</th>
        <td>10</td>
        <td>
            <button class="btn btn-danger btn-sm" id="vaciar-carrito">
                vaciar todo
            </button>
        </td>
        <td class="font-weight-bold">$ <span>5000</span></td>
    </template>
    
    <template id="template-carrito">
        <tr>
            <th scope="row">id</th>
            <td>Café</td>
            <td>1</td>
            <td>
                <button class="btn btn-info btn-sm">
                    +
                </button>
                <button class="btn btn-danger btn-sm">
                    -
                </button>
            </td>
            <td>$ <span>500</span></td>
        </tr>
        </template>
    <br>
    <br>
  <!-- templte para evitar el reflouw -->

    <template id="template-card">
        <div class="col-12 mb-2 col-md-3">
        <div class="card">
            <img src="" alt=""  width="300px" height="300px" class="card-img-top ">
            <div class="card-body">
            <h5>Titulo</h5>
            <p>precio</p>
            <h2>descuento</h2>
            <h3>¡¡ aprovecha!!</h3>
            
            <button class="btn btn-dark">Comprar</button>
            </div>
            <br>
            <br>
        </div>
        </div>
    </template>   

    <?php } ?>
    <!-- restringimos el carrito de compras---el usuario es el que lo desea ver el admin no. -->

    <section id="about-us" style="background-image: url(img/logo.jpg.jpeg)">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-img">
                        <img src="img/logo.jpg.jpeg" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2>QUIENES SOMOS..</h2>
                        <p><font color="black">Somos una tienda de detalles emprededora que satisface tus necesidades de obsequiar detalles a los ser que mas quieres. pealmot.arteconamor lo hace realidad y lo personalizamos a tu gusto.. </font> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="middle" class="skill-area" style="background-image: url(img/ojo.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 fadeInDown">
                    <div class="skill">
                    <div class="container" >

                            <span style="--l: '!P';">!H</span>
                            <span style="--l: 'E';">A</span>
                            <span style="--l: 'A';">B</span>
                            <span style="--l: 'L';">I</span>
                            <span style="--l: 'M';">L</span>
                            <span style="--l: 'O';">I</span>
                            <span style="--l: 'T¡';">D</span>
                            <span style="--l: 'T¡';">A</span>
                            <span style="--l: 'T¡';">D</span>
                            <span style="--l: 'T¡';">E</span>
                            <span style="--l: 'T¡';">S</span>
                    
                        </div>
                        <p><font color="tan">Todos los usuarios que han podido tener la experiencia de hacer pedidos con pealmot  <br>siempre han quedado totalmente satisfechos..</font></p>
                    </div>
                </div>
                <!--/.col-sm-6-->

                <div class="col-sm-6">
                    <div class="progress-wrap">
                        <h3>Compromiso</h3>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Buena antencion</h3>
                        <div class="progress">
                            <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="progress-wrap">
                        <h3>Alta calidad..</h3>
                        <div class="progress">
                            <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Entregas eficaz</h3>
                        <div class="progress">
                            <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#middle-->
    
    <section id="team-area" style="background-image: url(img/fondoestrella.jpg)" >
        <div class="container2">
            <div class="center fadeInDown">
                <div class="container" >

                    <span style="--l: '!P';">! E</span>
                    <span style="--l: 'E';">M</span>
                    <span style="--l: 'A';">P</span>
                    <span style="--l: 'L';">L</span>
                    <span style="--l: 'M';">E</span>
                    <span style="--l: 'O';">A</span>
                    <span style="--l: 'T¡';">D</span>
                    <span style="--l: 'T¡';">O</span>
                    <span style="--l: 'T¡';">S ¡</span>
                   
            
                </div>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="img/paulina.jpeg" alt="">
                        </div>
                        <div class="team-content">
                       
                            <span class="desg">Paulina</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="img/santiago.jpg" alt="">
                        </div>
                        <div class="team-content">
                           
                            <span class="desg">Santiago</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="img/susuna2.jpg" alt="">
                        </div>
                        <div class="team-content">
                           
                            <span class="desg">Susana</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="images/team4.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Edwin Gross</h4>
                            <span class="desg">UI/UX Designer</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="images/team5.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Mable Schwartz</h4>
                            <span class="desg">UI/UX Designer</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="images/team6.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Adele Washington</h4>
                            <span class="desg">UI/UX Designer</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>


    <footer style="background-image: url(img/fondoestrella.jpg)" >
        <div class="text-center bg-dark pt-5 text-light">

          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <img src="img/agenda.png" width="40" height="30" class="d-inline-block align-center" alt="">
                <hr />
                <h4 class="text-center">contactos</h4>
                <a href="tel:+246 - 542 550 5462 " class="text-light">+57 - 313 587 62 66</a>
                <p>pealmot07<a href="mailto:"></a>@gmail.com</p>
              </div>
              


              <div class="col-lg-4">
                <img src="img/horarios.png" width="40" height="30" class="d-inline-block align-center" alt="">
                <hr />
                <div class="media-body">
                  <h4 class="text-center">Horario de atencion</h4>
                  <p>08:00 - 12:00 &amp; 13:00 - 19:00<br>lunes / viernes&nbsp;<br>08:00 - 11:00 &amp; 13:00 -
                    16:00&nbsp;<br>fines de semanas&nbsp;</p>
                </div>
                <br>
                <br>
                <div>
                  <img src="img/whatsapp.png" width="40" height="30" class="d-inline-block align-center" alt="">
                  <img src="img/twitter.png" width="40" height="30" class="d-inline-block align-center" alt="">
                  <img src="img/instagram.png" width="40" height="30" class="d-inline-block align-center" alt="">
                  <img src="img/facebook.png" width="40" height="30" class="d-inline-block align-center" alt="">
                </div>
               
              </div>
              

              <div class="col-lg-4">
                <img src="img/ubicacion.png" width="40" height="30" class="d-inline-block align-center" alt="">
                <hr />
                <div class="media-body">
                  <h4 class="text-center"><font color="white">Ubicacion</font></h4>
                </div>
                

                

                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7933.3123629185575!2d-75.59585061463152!3d6.17675998628388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e46824e0bb0bc81%3A0xdff8f93dead8aac7!2s%C3%89xito+Envigado+Centro!5e0!3m2!1ses-419!2sco!4v1557429482733!5m2!1ses-419!2sco"
                  width="200" height="200" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="col-lg-4">
                <img src="img/instagram.png" width="40" height="30" class="d-inline-block align-center" alt="">
                <hr />
                <h4 class="text-center"><font color="white">instagram</font></h4>
                
                <p><font color="white">pealmot.arteconamor<a href="mailto:"></a></font></p>
                
              </div>
              <div class="col-lg-4">
                <img class="w-10" src="img/whatsapp.png" alt="" width="10%">
                <hr />
                <div class="container2" >

                    <span style="--l: '!P';">W</span>
                    <span style="--l: 'E';">h</span>
                    <span style="--l: 'A';">a</span>
                    <span style="--l: 'L';">t</span>
                    <span style="--l: 'M';">s</span>
                    <span style="--l: 'O';">a</span>
                    <span style="--l: 'T¡';">p</span>
                    <span style="--l: 'T¡';">p</span>
                  
                   
            
                </div>
                
                <p><font color="white">313 587 62 66</font><a href="mailto:"></a></p>
                
                
              </div>
              <div class="col-lg-4">
                <img class="w-10" src="img/twitter.png" alt="" width="10%">
                <hr />
                <div class="container2" >

                 
                    <h4 class="text-center"><font color="white">facebook</font></h4>
                    <p><font color="white">Paulina Mejia Garcia<a href="mailto:"></a></font></p>
                  
                   
            
                </div>

            </div>
            
            <div class="text-center bg-dark text-light">
              <form class="bg-dark">
                <div class="container">
                  <div class="row ">
                    <div class="col-md-12 mt-3 ">
                      <p class="text-center text-light"><font color="white">© Copyright 2018&nbsp; - All rights reserved.</font> </p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </footer>
    <!--/#bottom-->

    
    <!--/#footer-->

    <script src="app.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

