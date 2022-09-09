<?php

    // importamos el require
    require "conexion.php";
    


    session_start();

    if ($_POST) {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        

        $sql = "SELECT id, password, nombre, tipo_usuario FROM usuarios WHERE usuario= '$usuario'";
        
    // ejecucion 
        $resultado = $mysqli->query($sql);
        

        $num = $resultado->num_rows;

        // validar si existe el usuario o  no

        if ($num>0) {
        //    traer resultados de la consulta
            $row = $resultado->fetch_assoc();
            // consultamos el password 
            $password_bd = $row['password'];
             // validar el password
            $pass_c = sha1($password);
            // validamos si el password es correcto y si no se va al else
            if ($password_bd == $pass_c) {

                // creamos una sesion 
                $_SESSION['id'] = $row['id'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['tipo_usuario'] = $row['tipo_usuario'];

                // la enviamos con el header
                header("location: principal.php");
                
            } else {
            echo "la contraseña no coincide";

            }

        }else{

            echo "NO existe usuario";
        }

    }



?>



<!DOCTYPE html>
<html lang="en">

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
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body class="bg-primary" >

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
                                    <li><a href="https://m.facebook.com/home.php?hrc=1"><i class="fa fa-facebook"></i></a></li>
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

            <nav class="navbar navbar-inverse"  role="banner">
                <div class="container" >
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Pealmot</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="img/logo.jpg.jpeg" width="90px" alt="logo"></a>
                    </div>

                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html">PEALMOT</a></li>
                            <!-- <li><a href="about-us.html">Combos desayunos.</a></li> -->
                            <li><a href="services.html">Servicios</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-item.html">Blog Single</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li> -->
                            <li><a href="index.php">Login</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!--/.container-->
            </nav>
            <!--/nav-->

    </header>
    <!--/header-->

    <div id="layoutAuthentication" >
        <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        
                                        <form method="POST" action="<?php  echo $_SERVER['PHP_SELF']; ?>">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Usuario</label>
                                                <input class="form-control py-4" id="inputEmailAddress" name="usuario" type="text" placeholder="Enter email address" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>

                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    
    <div class="page-title" style="background-image: url(img/fondoestrella.jpg)">
        <section id="services" class="service-item" >
            <div class="container" style="background-image: url(img/fondonegro2.jpg.crdownload)">
                <div class="center fadeInDown">
                    <div class="container" >

                        <span style="--l: '!P';">¡L</span>
                        <span style="--l: 'E';">O</span>
                        <span style="--l: 'A';">G</span>
                        <span style="--l: 'L';">I</span>
                        <span style="--l: 'M';">N !</span>
                       
                       
                
                    </div>
                   
                   
                </div>
                
                <br><br>
                
                
                
    
               
                <!--/.row-->
            </div>
            <!--/.container-->
        </section>
    </div>
   
    <!--/#bottom-->
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
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
