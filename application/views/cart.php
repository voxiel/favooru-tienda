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
    <link rel="stylesheet" href="<?php echo base_url().RES_DIR; ?>/front-end/css/animate.min.css">

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url().RES_DIR; ?>/front-end/js/jquery-1.11.0.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url().RES_DIR; ?>/front-end/js/jquery.scrollLock.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script>
    $(document).ready(function(){
        //$.scrollLock( true ); 
     });
</script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand home" id="up" href="#info">
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
                        <a class="page-scroll" href="<?php echo base_url()?>/index.php">Tienda</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url()?>/index.php/afiliados">Afiliados</a>
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


    <!-- Intro Section -->
    <section class="intro pattern" id="top">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="brand-heading">Carrito de Compras</h1>
                        <a id="try" class="guide" href="<?php echo base_url()?>/index.php">
                          <div class="margin">
                              <div class="back-text"><span>Regresar a catálogo de productos</span></div>
                              <div class="back-icon"><i class="glyphicon glyphicon-circle-arrow-left icon-big"></i> </div>
                              
                          </div>
                        </a>
                        <p class="intro-text smargin">Selecciona el producto que quieres adquirir</p>
                        
                        <div class="col-md-6 nospace">
                          <select class="form-control input-lg mmargin" name="producto"> 
                            <option value="1">algo</option>
                          </select>
                            <?php echo $producto;?>
                            <a href="#cart-data" id="buy" class="btn btn-action btn-comprar page-scroll">
                            Comprar
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Section -->
    <section id="cart-data" class="pattern">
        <div class="container content-section">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="heading">Adquiere tu producto</h2>
                    <a id="try"class="page-scroll guide blue" href="#top">
                        <div class="margin">
                            <div class="back-text"><span>Regresar a selección de producto</span></div>
                            <div class="back-icon"><i class="glyphicon glyphicon-circle-arrow-up icon-big"></i> </div>
                            
                        </div>
                      </a>  
                    
                    <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam repudiandae similique consequatur voluptate nisi iure totam earum ducimus asperiores accusantium quis ab eos aliquid suscipit, officia, error ipsam porro atque.</p>
                 <?php echo form_open('tienda/save_client_data', array('id'=>'buy-form')); ?>
                    <div class="alert alert-danger" role="alert" id="form-error"></div>
                      <div class="form-group">
                        <?php echo form_input(array('name' => 'buy_name', 'id' => 'buy_name', 'value' => set_value('buy_name'), 'maxlength' => '24', 'placeholder' => 'Nombre Completo', 'class' => 'form-control input-lg')); ?>
                      </div>
                      <div class="form-group">
                         <?php echo form_input(array('name' => 'buy_email', 'id' => 'buy_email', 'value' => set_value('buy_email'), 'maxlength' => '24', 'placeholder' => 'Correo Electrónico', 'class' => 'form-control input-lg')); ?>
                      </div> 
                        <div class="checkboxes">
                          <label class="label_check" for="checkbox-01">
                            <input id="checkbox-01" type="checkbox" checked="" value="1" name="sample-checkbox-01"></input>
                             Acepto los <a href="#" class="custom-link" data-toggle="modal" data-target="#conditions">términos y condiciones de compra</a>.
                        </label>
                      </div>

                      <div class="col-md-12 text-center mmargin">
                        <?php $attributes = 'class = "btn btn-action btn-generar"'; echo form_submit('submit', 'Generar código de compra', $attributes); ?>
                      </div>
                    </form>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam repudiandae similique consequatur voluptate nisi iure totam earum ducimus asperiores accusantium quis ab eos aliquid suscipit, officia, error ipsam porro atque.</p>
                </div>
            </div>
        </div>    
    </section>

    <!-- Download Section -->
    <section id="cart-end" class="content-section text-center pattern">
        <div class="cart-end-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h3 class="sec-heading">Código de compra</h3>
                    <h2 class="heading">123456789012345678</h2>
                    <div class="col-md-8 col-md-offset-2 description-sale"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis aliquam, ea illum in molestiae, quasi ipsa necessitatibus quo explicabo deserunt sit alias voluptas facilis libero earum adipisci sint, tempora dolores.</div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <!-- <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>código</h3>
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section> -->

    <!-- Map Section -->
  <!--   <div id="map"></div> -->

  <!-- Modal Producto 1 -->
    <div class="modal fade" id="producto1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header modal-header-custom">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Planeta Corazón 1</h4>
          </div>
          <div class="row content-section-details">
              <div class="col-md-6 modal-text">
                <h2 class="modal-title">Episodio 1: Antes del Amarre</h2>
                <p>
                  DIVERTIDO E IMPORTANTE LIBRO lleno de consejos, historias reales,
                  practicidad y buen humor, que te enseñará importantes principios a tomar en cuenta antes de iniciar un noviazgo.
                </p>  
                <h3>Contenido del Libro</h3>
                <ul>
                  <li>“Todo comienza de niños”</li>
                  <li>“Los bestias y las bestias”</li>
                  <li>“Una historia de amor”</li>
                  <li>“Las 3 preguntas”</li>
                  <li>“Las fórmulas del amor”</li>
                  <li>“Respuestas fáciles a preguntas difíciles”</li>
                  <li>“El mas grande amor”</li>
                </ul>
              </div>
              <div class="col-md-6 text-center modal-text">
                 <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src="//player.vimeo.com/video/107357748?title=0&amp;byline=0&amp;portrait=0" width="350" height="197" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                  <p>Categoria: Noviazgo, juvenil  - No de paginas: 100 - Autor: Rodrigo Menesses</p> 
              </div>
          </div>
                
        </div>
      </div>
    </div>

  <!-- Modal Producto 2 -->
    <div class="modal fade" id="producto2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header modal-header-custom">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="myModalLabel">Planeta Corazón 2</h3>
          </div>
          <div class="row content-section-details">
              <div class="col-md-6 modal-text">
                <h2 class="modal-title">Episodio 2: El Amarre</h2>
                <p>
                  El episodio 2 de la serie Planeta Corazón, contiene importantes consejos para
                  todos aquellos que están viviendo un noviazgo: El tema de los suegros (sin poder
                  dejarlo afuera), la comunicación, la transparencia y el saber ponerse de acuerdo
                  son los ingredientes que hacen de este libro, un excelente recurso para todos
                  aquellos enamorados.
                  Además, contiene 25 chistes de novios, enamorados y esposos.
                </p>  
                <h3>Contenido del Libro</h3>
                <ul>
                  <li>“La conquista y el amarre”</li>
                  <li>“Los suegros”</li>
                  <li>“Amor y humor”</li>
                  <li>“Tu pasado, mi presente y nuestro futuro”</li>
                  <li>“Urge”</li>
                </ul>
              </div>
              <div class="col-md-6 text-center modal-text">
                 <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src="//player.vimeo.com/video/107357746?title=0&amp;byline=0&amp;portrait=0" width="350" height="197" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                  <p>Categoria: Noviazgo, juvenil  - No de paginas: 100 - Autor: Rodrigo Menesses</p> 
              </div>
          </div>
                
        </div>
      </div>
    </div>

  <!-- Modal Producto 3 -->
    <div class="modal fade" id="producto3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header modal-header-custom">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Planeta Corazón 3</h4>
          </div>
          <div class="row content-section-details">
              <div class="col-md-6 modal-text">
                <h2 class="modal-title">Episodio 3: Faldas y Pantalones</h2>
                <p>
                  Rodrigo Menesses habla sobre “esas divertidas diferencias” entre los hombres y las
                  mujeres en su nuevo libro de la serie PLANETA CORAZON titulado “FALDAS Y
                  PANTALONES” el cual, viene lleno de muchos consejos y aventuras que te harán
                  comprender importantes principios en cuanto a las relaciones sentimentales en la
                  pareja.
                </p>  
                <h3>Contenido del Libro</h3>
                <ul>
                  <li>“Esas extrañas criaturas”</li>
                  <li>“Lo que ellas buscan”</li>
                  <li>“Lo que ellos quieren”</li>
                  <li>“Esas divertidas diferencias”</li>
                  <li>“Lo que todos queremos y buscamos”</li>
                </ul>
              </div>
              <div class="col-md-6 text-center modal-text">
                 <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src="//player.vimeo.com/video/107357751?title=0&amp;byline=0&amp;portrait=0" width="350" height="197" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                  <p>Categoria: Noviazgo, juvenil  - No de paginas: 100 - Autor: Rodrigo Menesses</p> 
              </div>
          </div>
                
        </div>
      </div>
    </div>

  <!-- Modal Producto 4 -->
    <div class="modal fade" id="producto4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header modal-header-custom">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Tu tía en calzoneta floreada 1</h4>
          </div>
          <div class="row content-section-details">
              <div class="col-md-6 modal-text">
                <h2 class="modal-title">Episodio 1: El ataque de los calenturientos</h2>
                <p>
                  Rodrigo Menesses habla sobre los líos en los que te puedes ver involucrado cuando le das rienda suelta a esas pasiones juveniles…
                  Lo que nadie antes se atrevió a decirte, explicarte o enseñarte en cuanto a SEXUALIDAD, todo eso, lo encontrarás en este libro lleno de historias reales y sobre todo, mucho pero mucho buen humor!
                </p>  
                <h3>Contenido del Libro</h3>
                <ul>
                  <li>“El fosforito”</li>
                  <li>“El calenturiento”</li>
                  <li>“El calenturiento 2”</li>
                  <li>“El mutante”</li>
                  <li>“La porno”</li>
                  <li>“Una calurosa historia”</li>
                </ul>
              </div>
              <div class="col-md-6 text-center modal-text">
                 <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src="//player.vimeo.com/video/107358687?title=0&amp;byline=0&amp;portrait=0" width="350" height="197" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                  <p>Categoria: Noviazgo, juvenil  - No de paginas: 100 - Autor: Rodrigo Menesses</p> 
              </div>
          </div>
                
        </div>
      </div>
    </div>

  <!-- Modal Producto 5 -->
    <div class="modal fade" id="producto5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header modal-header-custom">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Quiero que me quiera</h4>
          </div>
          <div class="row content-section-details">
              <div class="col-md-6 modal-text">
                <h2 class="modal-title">Curso: Quiero que me quiera</h2>
                <p>
                  Un curso que te enseñará a conquistar a ese o a esa a quien quieres conquistar.
                </p>  
                <h3>Contenido del Libro</h3>
                <ul>
                  <li>“5 formas de decir ME GUSTAS”</li>
                  <li>“El camino a un corazón difícil”</li>
                  <li>“Es imposible que una ELLA o que un EL, sea IMPOSIBLE!”</li>
                  <li>“5 formas de conquistar con la inteligencia”</li>
                  <li>“Las buenas lenguas”</li>
                </ul>
              </div>
              <div class="col-md-6 text-center modal-text">
                 <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src="//player.vimeo.com/video/107358688?title=0&amp;byline=0&amp;portrait=0" width="350" height="197" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                  <p>Categoria: Noviazgo, juvenil  - No de paginas: 100 - Autor: Rodrigo Menesses</p> 
              </div>
          </div>
                
        </div>
      </div>
    </div>

    <!-- Modal Condiciones Favooru -->
    <div class="modal fade" id="conditions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header modal-header-custom">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Condiciones Generales de compra FAVOORU</h4>
          </div>
          <div class="row content-section-details">
              <div class="col-md-12 modal-text">
                <h2 class="modal-title">Condiciones Generales de compra FAVOORU</h2>
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
    </div>



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
    
    <!--custom checkbox & radio-->
    <script type="text/javascript" src="<?php echo base_url().RES_DIR; ?>/front-end/js/ga.js"></script>


    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().RES_DIR; ?>/front-end/js/tienda.js"></script>

    <script>
    $(document).ready(function(){
         $('#form-error').hide();
        // //$('#top').hide();
        // $('#cart-data').hide();
        // $('#cart-end').hide();

        $(function(){
          $('.step').hover(function(){
            $(this).addClass('animated pulse');
            $(this).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',  function() {
                $(this).removeClass('animated pulse');
             });
          });
        });
    });
    

     
    </script>

</body>

</html>
