<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FavoorU - Tienda</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().RES_DIR; ?>/front-end/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().RES_DIR; ?>/front-end/css/tienda.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().RES_DIR; ?>/front-end/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url().RES_DIR; ?>/front-end/css/typography.css">
<!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url().RES_DIR; ?>/front-end/js/jquery-1.11.0.js"></script>
    <script src="<?php echo base_url().RES_DIR; ?>/front-end/js/jquery.scrollLock.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand home" id="up" href="#catalog">
                    <img alt="" src="<?php echo base_url().RES_DIR; ?>/front-end/img/logo_menu_small.png"></img>
                    <!-- <span class="light">LOGO</span> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#catalog">Tienda</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Preguntas Frecuentes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Catalog Section -->
    <section class="info pattern-home" id="info">
      <div class="row">
          <div class="container content-section-conditions">
                <div class="col-md-12 col-centered">
                        <h3 class="sec-heading">Condiciones Generales de compra FAVOORU</h3>
                        <div class="description-catalog">
                            <p>Antes de obtener tu código de compra, te recomendamos leas las siguientes indicaciones.
                              <ol class="conditions">
                                <li>
                                  Una vez obtengas tu código de compra, deberas de acercarte  a cualquier agente TIGO MONEY (acorde al mapa y/o listado presentado en este sitio), y llevar contigo el código; el mismo, puedes imprimirlo, tomarle una foto con tu celular, o llevarlo anotado en una hoja de papel (cuida de escribir puntualmente cada numero). Deberás también llevar tu DUI, y en caso no poseas DUI por ser menor de edad ó por haberlo extraviado, deberás de acompañarte de alguien que si tenga DUI VIGENTE.
                                </li>
                                <li>
                                  El agente TIGO MONEY, introducirá ese código en el sistema, y te solicitará hagas efectivo el pago acorde al valor del producto.
                                </li>
                                <li>
                                  Una vez realizado el pago, recibirás una confirmación del mismo.
                                </li>
                                <li>
                                  En un período de 5 a 24 horas, recibirás en el mismo correo electrónico que ingresaste para obtener tu código de compra de FAVOORU, el usuario y contraseña para acceder al producto adquirido.
                                </li>
                                <li>
                                  Deberás de revisar en tu bandeja de entrada, o bandeja de SPAM, nuestro correo con el usuario y contraseña del producto que adquiriste.
                                </li>
                                <li>
                                  Algunos de nuestros productos (con el fin de evitar el plagio de los mismos), tienen ingresos limitados, es decir, posiblemente puedas ingresar solamente 10 veces para leer o disfrutar del mismo.
                                </li>
                                <li>
                                  Para cualquier consulta en temas de compra o de nuestros productos, escribanos a: favooru@mentesinteligentes.com y nos pondremos en contacto contigo, en un período de 48 a 72 horas.
                                </li>
                              </ol>
                            </p>
                        </div>
                </div>
                
            </div>
        </div>
    </section>
   

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>FavoorU - Copyright &copy; 2014 | <a href="http://binomiosolutions.com"></a>Binomio Solutions - Diseño Web</p>
        </div>
    </footer>

    

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().RES_DIR; ?>/front-end/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url().RES_DIR; ?>/front-end/js/jquery.easing.min.js"></script>


    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().RES_DIR; ?>/front-end/js/tienda.js"></script>

    <script>
    $(document).ready(function(){
        $('#form-error').hide();
        $('#top').hide();
        $('#cart-data').hide();
        $('#cart-end').hide();
    });
    

     
    </script>

</body>

</html>
