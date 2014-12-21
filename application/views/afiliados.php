<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FavoorU - Programa de Afiliados</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().RES_DIR; ?>/front-end/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().RES_DIR; ?>/front-end/css/tienda.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().RES_DIR; ?>/front-end/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url().RES_DIR; ?>/front-end/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url().RES_DIR; ?>/front-end/css/animate.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    // <script>
    //     $(document).ready(function(){
    //         $.scrollLock( false ); 
    //     });
    // </script>

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

    <!-- info Section -->
    <section class="info-affiliate pattern-home" id="info">
      <div class="row">
          <div class="container content-section-home">
                <div class="col-md-12 col-centered">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <!-- <img src="<?php echo base_url().RES_DIR; ?>/front-end/img/logo_content.png" alt="" class="logo-content"> -->
                        <h3 class="sec-heading">Frase descriptiva sobre afiliados aquí</h3>
                        <div class="description-catalog"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis aliquam, ea illum in molestiae, quasi ipsa necessitatibus quo explicabo deserunt sit alias voluptas facilis libero earum adipisci sint, tempora dolores.</div>
                        <a href="#affiliate-data" class="btn btn-action-big btn-call affiliate-now page-scroll">Quiero Unirme</a>
                        
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src="//player.vimeo.com/video/107358693?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1" width="350" height="197" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section id="how-to">
        <div class="row">
          <div class="container">
             <div class="col-md-6 about-affiliate">
                 <h2 class="sec-heading affiliate-section">Gana dinero desde tu computadora</h2>
                 <span>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eaque reiciendis aliquid. Eum eaque totam quis doloribus itaque nisi harum debitis, iste sapiente dolorem dicta, nihil placeat impedit dolorum explicabo.
                 </span>
                 <ul class="no-style">
                   <li>
                     <i class="glyphicon glyphicon-check icon-big"></i> Lorem ipsum dolor sit amet
                   </li>
                   <li>
                     <i class="glyphicon glyphicon-check icon-big"></i> Lorem ipsum dolor sit amet
                   </li>
                    <li>
                     <i class="glyphicon glyphicon-check icon-big"></i> Lorem ipsum dolor sit amet
                   </li>
                    <li>
                     <i class="glyphicon glyphicon-check icon-big"></i> Lorem ipsum dolor sit amet
                   </li>
                 </ul>       
             </div>
             <div class="col-md-6">
               <img alt="" src="<?php echo base_url().RES_DIR; ?>/front-end/img/affiliate.png">
             </div>
          </div>
        </div>
        <div class="row call-to-action">
          <div class="container">
            <div class="col-md-9">
                Únete hoy a este programa y empieza a ganar dinero desde tu computadora
            </div>
            <div class="col-md-3 text-center">
              <a href="#affiliate-data" class="btn btn-action-big btn-call affiliate-now page-scroll">Quiero Unirme</a>
            </div>

          </div>
        </div>
    </section>

    <!-- Data Section -->
    <section id="affiliate-data" class="pattern">
        <div class="container content-section">
            <div class="row">
                <div class="col-md-6 col-centered">
                    <h2 class="heading">Afiliate a FavoorU</h2>
                    <a id="try" class="page-scroll guide" href="#info">
                        <div class="margin">
                            <div class="back-text"><span>Regresar a Inicio</span></div>
                            <div class="back-icon"><i class="glyphicon glyphicon-circle-arrow-up icon-big"></i> </div>
                            
                        </div>
                      </a>  
                    
                    <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam repudiandae similique consequatur voluptate nisi iure totam earum ducimus asperiores accusantium quis ab eos aliquid suscipit, officia, error ipsam porro atque.</p>
                 <?php echo form_open('afiliados/save_affiliate_data', array('id'=>'affiliate-form')); ?>
                    <div class="alert alert-danger" role="alert" id="form-error"></div>
                      <div class="form-group">
                        <?php echo form_input(array('name' => 'buy_name', 'id' => 'buy_name', 'value' => set_value('buy_name'), 'maxlength' => '50', 'placeholder' => 'Nombre Completo', 'class' => 'form-control input-lg')); ?>
                      </div>
                      <div class="form-group">
                         <?php echo form_input(array('name' => 'buy_email', 'id' => 'buy_email', 'value' => set_value('buy_email'), 'maxlength' => '30', 'placeholder' => 'Correo Electrónico', 'class' => 'form-control input-lg')); ?>
                      </div> 
                       <div class="form-group">
                         <?php echo form_input(array('name' => 'buy_address', 'id' => 'buy_address', 'value' => set_value('buy_address'), 'maxlength' => '50', 'placeholder' => 'Dirección', 'class' => 'form-control input-lg')); ?>
                      </div> 
                       <div class="form-group">
                         <?php echo form_input(array('name' => 'buy_phone', 'id' => 'buy_phone', 'value' => set_value('buy_phone'), 'maxlength' => '15', 'placeholder' => 'Teléfono', 'class' => 'form-control input-lg')); ?>
                      </div> 
                       <div class="form-group">
                         <?php echo form_input(array('name' => 'buy_dui', 'id' => 'buy_dui', 'value' => set_value('buy_dui'), 'maxlength' => '10', 'placeholder' => 'DUI', 'class' => 'form-control input-lg')); ?>
                      </div> 
                       <div class="form-group">
                         <?php echo form_input(array('name' => 'buy_birth_date', 'id' => 'buy_birth_date', 'value' => set_value('buy_bith_date'), 'maxlength' => '10', 'placeholder' => 'Fecha de Nacimiento', 'class' => 'form-control input-lg', 'type' => 'date')); ?>
                      </div> 
                    
                        
                      <div class="checkboxes">
                          <label class="label_check" for="checkbox-01">
                            <input id="checkbox-01" type="checkbox" checked="true" value="1"></input>
                             Acepto los <a href="#" data-toggle="modal" data-target="#conditions" class="custom-link">términos y condiciones de afiliación</a>.
                        </label>
                      </div>

                      <div class="col-md-12 text-center mmargin">
                        <?php //$attributes = 'class = "btn btn-action btn-generar btn-form-affiliate" id = "generar-afiliado"'; echo form_submit('submit', 'Generar código de afiliado', $attributes); ?>
                        <a href="#affiliate-end" class="btn btn-action-big btn-call btn-form-affiliate">Generar código de afiliado</a>
                      </div>
                    </form>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam repudiandae similique consequatur voluptate nisi iure totam earum ducimus asperiores accusantium quis ab eos aliquid suscipit, officia, error ipsam porro atque.</p>
                </div>
            </div>
        </div>    
    </section>

    <!-- Download Section -->
    <section id="affiliate-end" class="content-section text-center pattern">
        <div class="cart-end-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h3 class="sec-heading">¡Bienvenido a FavoorU Afiliados!</h3>
                    <h3>Tu código de afiliado es:</h3>
                    <h2 class="heading affiliate_id"></h2>
                    <div class="col-md-8 col-md-offset-2 description-sale"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis aliquam, ea illum in molestiae, quasi ipsa necessitatibus quo explicabo deserunt sit alias voluptas facilis libero earum adipisci sint, tempora dolores.</div>
                    
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


    <!-- Modal Condiciones Favooru Afiliados -->
    <div class="modal fade" id="conditions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header modal-header-custom">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Condiciones Generales de Contratación programa de Afiliados FAVOORU</h4>
          </div>
          <div class="row content-section-details">
              <div class="col-md-12 modal-text">
                <h2 class="modal-title">Condiciones Generales de Contratación programa de Afiliados FAVOORU</h2>
                <p>Las siguientes, son las condiciones que regulan el programa de Afiliados de FAVOORU, cuyo objeto es la generación de tráfico, promoción y ventas de los servicios de FAVOORU que expresamente forman parte del sistema de afiliados. Por su seguridad, lea atentamente las siguientes cláusulas que tendrán que ser expresamente aceptadas para formar parte del programa de afiliados de FAVOORU.
                              <ul class="no-style">
                                <li>
                                  <h2 class="modal-title">1. ÁMBITO DE APLICACIÓN Y PARTES DEL CONTRATO</h2>
                                  El programa de afiliados está dirigido exclusivamente a personas que:
                                  <ol>
                                    <li>
                                      Son menores de 18 años, y quienes  para ingresar a este programa de afiliados, deberán de contar con un REPRESENTANTE mayor de 18 años, para realizar el cobro de comisiones.
                                    </li>
                                    <li>
                                      Personas físicas mayores de 18 años,  personas jurídicas o particulares, titulares de un web site, y residentes en algunos de los países de Centroamérica y Canadá y otros para los cuales en próximas fechas, FAVOORU aperture operaciones, aún sin incluirse los nombres de estos países o ciudades en este documento. Las partes del contrato son GRUPO MEZEL SA DE CV (MEZEL STUDIOS INC)  domicilio Residencial San Luis San Salvador, Toronto, Ontario Canadá (en adelante FAVOORU) y el Afiliado.
                                    </li>
                                  </ol>
                                </li>
                                <li>
                                  El agente TIGO MONEY, introducirá ese código en el sistema, y te solicitará hagas efectivo el pago acorde al valor del producto.
                                </li>
                                <li>
                                  <h2 class="modal-title">2. ÁMBITO DE APLICACIÓN Y PARTES DEL CONTRATO</h2>
                                  A efectos de este contrato, los siguientes términos se definen tal como se señala a continuación:
                                  <ul>
                                    <li> “TIGO MONEY": Es una empresa aparte a FAVOORU, quien presta los servicios de colecturía en los países que ejecuta operación.</li>
                                    <li> El "Programa" es el conjunto de servicios ofrecidos por FAVOORU a sus Afiliados, y que permite a éstos beneficiarse de participar en dicha Red.</li>
                                    <li>Un "Clic" es la acción de pulsar sobre un Anuncio o enlace.</li>
                                    <li>El "Contrato" es el acuerdo suscrito entre FAVOORU y el Afiliado.
                                    <li>El “Cliente” Compradores de los afiliados.</li>
                                    <li>“CHIP” tarjeta SIM o número telefónico de la empresa de telefonía TIGO en su país de residencia.</li>
                                    <li>“REPRESENTANTE” Persona que adquiere el compromiso del cumplimiento de las normas de este contrato, para afiliados menores de 18 años.</li>
                                  </ul>
                                </li>
                                <li>
                                   <h2 class="modal-title">3. CONDICIONES DE ALTA DEL PROGRAMA</h2>
                                   El alta al programa de afiliación de FAVOORU tiene carácter gratuito y no supone ni obliga a los AFILIADOS a realizar inversiones extras. En caso de incompatibilidades técnicas que obliguen al afiliado a realizar una inversión, ésta será de su exclusiva responsabilidad. Se establecen como criterios generales para aceptar la solicitud:
                                  <ul class="no-style">
                                    <li>
                                      <h3>3.1 Solicitud de alta al programa</h3>
                                      El alta al programa de afiliación de FAVOORU tiene carácter gratuito y no supone ni obliga a los AFILIADOS a realizar inversiones extras. En caso de incompatibilidades técnicas que obliguen al afiliado a realizar una inversión, ésta será de su exclusiva responsabilidad. Se establecen como criterios generales para aceptar la solicitud:
                                      <ul>
                                         <li>Poseer la condición de persona físicao jurídica legalmente establecida en su país de origen.</li>
                                         <li>Ser propietario o tener los derechos sobre el web site objeto del contrato, ó sobre la cuenta de Facebook o red social que utilizará para promocionar los productos de FAVOORU.</li>
                                         <li>El interesado, al completar el formulario de solicitud de alta proporcionado por FAVOORU, acepta la totalidad de las condiciones estipuladas en este contrato, asumiendo por tanto cualquier responsabilidad derivada de su incumplimiento.</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <h3>3.2 Aceptación de la solicitud de alta</h3>
                                      FAVOORU se reserva el derecho a denegar el alta al programa por no reunir el interesado los requisitos necesarios para ello o por considerar que la página web del interesado, o cuenta en  Facebook ,o en cualquier otra red social que involucre su nombre, muestra contenidos inadecuados. FAVOORU valorará la aptitud tanto del interesado como de su página web con el único fin que no se perjudique la imagen de marca por el tipo de contenidos o conducta del web site o sus titulares. El alta surtirá efecto desde el momento en que FAVOORU, habiendo analizado el perfil del interesado, acepte la solicitud y envíe  al interesado el alta al programa, proveyendo de su enlace o código de afiliado. 
                                    </li>
                                     <li>
                                      <h3>3.3 Gestión del servicio</h3>
                                      FAVOORU pondrá a disposición del afiliado vía su sitio web, una variedad de material: vínculos, gráficos, productos, contenidos y otros tipos de vínculos determinados por Favooru.com. (Cada uno de estos vínculos algunas veces serán llamados aquí como "Vínculos" o, individuamente, como "Vínculo") que estarán sujetos a estos términos y condiciones.  El afiliado acepta desplegar en su cuenta de Facebook U OTRA RED SOCIAL, únicamente aquellos vínculos que sean facilitados por FAVOORU. Para el seguimiento de la actividad del Afiliado se pondrá a disposición un panel de control. Para comenzar a utilizar los servicios para afiliados de Favooru, el Afiliado deberá agregar el/los código/s especificados en su panel de usuario. Una vez instalados, el Afiliado deberá hacerse cargo de las pruebas de funcionamiento pertinentes que garanticen su correcta instalación. favooru.com no se responsabilizará del mal uso de los códigos que devenguen en pérdidas de comisiones. 
                                    </li>
                                     <li>
                                      <h3>3.4 Productos o servicios</h3>
                                      Formarán parte del programa de afiliados exclusivamente aquéllos servicios o productos considerados a tal efecto, e incorporados al catálogo de afiliados
                                    </li>
                                  </ul>
                                  
                                </li>
                                <li>
                                  <h2 class="modal-title">4. COMISIONES. FORMA DE LIQUIDACIÓN Y PAGO</h2>
                                  <ul class="no-style">
                                    <li>
                                      <h3>4.1 Cuantía de la comisión y derecho a obtención de la misma</h3>
                                      La comisión corresponderá a un 50%  u otras tasas de comisiones a informar al afiliado por medio de correo electrónico, de cada una de las operaciones efectivamente finalizadas. Por operaciones finalizadas debe entenderse aquéllas que efectivamente significaron una transacción completada por parte del cliente a favor de FAVOORU. Las anulaciones no darán de derecho a comisión alguna. Será imprescindible para obtener el derecho a comisión, y se define en su totalidad como TRANSACCION FINALIZADA, al hecho de que el cliente haya accedido al sitio de FAVOORU, introducido el código de afiliado del vendedor (afiliado) quien le hace la venta, haya comprado un producto por medio de la obtención de un CODIGO DE COMPRA TIGO MONEY Y  HAYA REALIZADO EL DEPOSITO DEL VALOR DEL PRODUCTO EN CUALQUIER AGENTE TIGO MONEY EN SU CIUDAD.
                                    </li>
                                    <li>
                                      <h3>4.2 Liquidación y forma de pago</h3>
                                      Para la liquidación y pago de las respectivas comisiones, el afiliado debe de:
                                      <ol>
                                       <li>Adquirir un CHIP de TIGO y registrar su número de teléfono TIGO, en nuestra plataforma, para poder depositarle su comisión en dicho teléfono y/o numero TIGO. IMPORTANTE: Para la adquisición de este CHIP, deberá regirse por las condiciones estipuladas por la empresa de telefonía TIGO, para la compra y/o adquisición de chip o numero telefónico TIGO.</li>

                                       <li>Las comisiones serán canceladas entre los días 15-18 de cada mes. Depositando las comisiones correspondientes a los días 1 al 30 ó 31, del último mes calendario. Ejemplo: Las comisiones obtenidas por el afiliado, entre los días 1 al 30 de SEPTIEMBRE, serán depositados entre los días 15 -18 del mes de octubre y así sucesivamente.</li>

                                       <li>En caso de afiliados menores de 18 años, luego de leer este contrato, acepta en su totalidad que las comisiones sean depositadas a nombre del REPRESENTANTE MAYOR DE EDAD y con posesión de DOCUMENTO UNICO DE IDENTIDAD Y NIT, que registre a la hora de solicitar afiliarse al programa FAVOORU.</li>

                                       <li>TOMAR EN CUENTA, PARA LA ENTREGA DE COMISIONES A MENORES DE EDAD: Para la COMPRA DE CHIP de TIGO, deberá de adquirirlo la misma persona a quien se realizará los depósitos de las comisiones. Ejemplo: Luis Vasquez, es menor de edad, y para afiliarse, ha registrado a Carlos Vasquez (su hermano mayor) como su representante. Ambos deben acercarse a una agencia de TIGO, para adquirir un chip con un numero telefónico de TIGO. Este CHIP y/o numero TIGO, deberá de registrarse en la empresa TIGO con el nombre de CARLOS VASQUEZ. Cuando llegue el momento de realizar el deposito de las comisiones, LAS MISMAS SE REALIZARAN al teléfono de CARLOS VASQUEZ, y dependerá del él o del REPRESENTANTE del menor de edad, la entrega del efectivo a su representado.</li>

                                       <li>En caso de afiliados mayores de edad: Deberán de adquirir un chip TIGO con el cual se les asigne, un numero telefónico de TIGO, al cual se les depositarán las comisiones obtenidas, acorde a las fechas antes estipuladas en este contrato. El chip DE TIGO, deberá de estar registrado con la empresa TIGO, con el mismo nombre del afiliado, en este caso, entendiendo que el afiliado es mayor de 18 años y cuenta con DUI y NIT.</li>

                                      <li>Ambas partes en este contrato, FAVOORU y el afiliado, dan por entendido que no se depositará la comisión al afiliado, si este no posee un chip o numero telefónico TIGO, que cumpla con las directrices  antes mencionadas en este contrato, en relación a nombres y documentos de identidad personal. </li>

                                      <li>EL AFILIADO, acepta que si no obtiene un numero TIGO o un CHIP TIGO,  y/o no lo reporta a la plataforma FAVOORU, en los próximos 60 días calendario, luego del ultimo día del mes en que realizó las ventas de productos FAVOORU, sus comisiones ya no podrán ser cobradas. </li>

                                      <li>El afiliado menor de edad descarga de toda responsabilidad de pago de sus comisiones a FAVOORU, en caso que su REPRESENTANTE, haya recibido el deposito por pare de FAVOORU y EL REPRESENTANTE no desee, entregar el dinero de dichas comisiones al representado.</li>

                                      <li>EL AFILIADO reconoce y acepta que FAVOORU no es una empresa de manejo de efectivo, por lo que utiliza los servicios de la empresa TIGO MONEY en su ciudad, para realizar los pagos de comisiones, por lo que el AFILIADO  descarga de cualquier culpa  a FAVOORU por problemas técnicos en la plataforma de TIGO MONEY   a la hora de deposito de comisiones o realización de pagos.</li>
                                      </ol>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                      <h3>5. VIGENCIA Y RESOLUCIÓN</h3>
                                      Este contrato surtirá efectos desde la confirmación que haga FAVOORU al solicitante, e indefinidamente. El contrato de afiliación puede finalizar por decisión de cualquiera de las dos partes sin motivo justificado, con el único requisito de realizar un preaviso de al menos 5 días. Se comunicará la voluntad de finalizar el contrato por escrito, siendo el correo electrónico un medio válido. Una vez finalizado el contrato, el AFILIADO deberá retirar de su página web  o cuenta de FACEBOOK u otra red social, cualquier banner o distintivo publicitario de FAVOORU. Una vez finalizado el contrato, FAVOORU regularizará todos los pagos que queden pendientes, dando así por finalizada cualquier obligación contractual con el afiliado.
                                      <ol>
                                        <li>Ruptura de cualquiera de las condiciones estipuladas en este contrato por parte del AFILIADO, como son las relacionadas con los contenidos y orientación de su web o la utilización negligente o inadecuada del material de FAVOORU.</li>
                                        <li>Manipulación de los programas informáticos y/o panel de control. Manipulación de los soportes publicitarios, tanto en sus textos, contenidos o programación.</li>
                                        <li>La utilización de la marca FAVOORU por el AFILIADO con el objeto de aparentar una asociación comercial más allá del mero acuerdo que se suscribe en el presente documento.</li>
                                        <li>La utilización por parte del AFILIADO de técnicas no autorizadas de envíos publicitarios. La responsabilidad derivada del incumplimiento de Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y de comercio electrónico, le corresponde exclusivamente al afiliado, no autorizando FAVOORU ningún tipo de comunicación comercial por medios electrónicos.</li>
                                        <li>La conclusión de operaciones o transacciones por medios ilícitos o fraudulentos.</li>
                                      </ol>
                                  </li>
                                  <li>
                                      <h3>6. PÉRDIDA DE LA CONDICIÓN DE AFILIADO</h3>
                                      FAVOORU se reserva el derecho de revocar la condición de AFILIADO a cualquiera de los mismos. Esta revocación puede tener carácter unilateral sin posibilidad de reclamación alguna y se hará efectiva de forma automática, y especialmente cuando se dé alguna de las circunstancias descritas a continuación. La aceptación de este contrato implica la aceptación de esta posibilidad de revocación. La revocación vendrá motivada por:
                                      <ol>
                                        <li>Ruptura de cualquiera de las condiciones estipuladas en este contrato por parte del AFILIADO, como son las relacionadas con los contenidos y orientación de su web o la utilización negligente o inadecuada del material de FAVOORU.</li>
                                        <li>Manipulación de los programas informáticos y/o panel de control. Manipulación de los soportes publicitarios, tanto en sus textos, contenidos o programación.</li>
                                        <li>La utilización de la marca FAVOORU por el AFILIADO con el objeto de aparentar una asociación comercial más allá del mero acuerdo que se suscribe en el presente documento.</li>
                                        <li>La utilización por parte del AFILIADO de técnicas no autorizadas de envíos publicitarios. La responsabilidad derivada del incumplimiento de Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y de comercio electrónico, le corresponde exclusivamente al afiliado, no autorizando FAVOORU ningún tipo de comunicación comercial por medios electrónicos.</li>
                                        <li>La conclusión de operaciones o transacciones por medios ilícitos o fraudulentos.</li>
                                      </ol>
                                  </li>
                                  <li>
                                      <h3>7. OBLIGACIONES DEL AFILIADO</h3>
                                      <ul>
                                       <li>El AFILIADO se compromete a cumplir este contrato y la totalidad de las cláusulas en él descritas desde el momento en que se confirme el alta en el programa de afiliación.</li>
                                       <li>Será responsabilidad del AFILIADO la actualización de su página web, sus contenidos y la información en ella mostrada, salvo los enlaces de los banners y elementos publicitarios. FAVOORU no será responsable por el incumplimiento de las obligaciones legales del AFILIADO respecto de su página web.</li>
                                       <li>El AFILIADO se compromete a mantener su página web operativa mientras dure este contrato, así como su dirección de correo electrónico con la que mantendrá la comunicación con FAVOORU.</li>
                                       <li>El AFILIADO se compromete a no modificar los elementro publicitarios, vínculos y códigos puestos a su disposición por FAVOORU para el desarrollo del servicio.</li>
                                       <li>El AFILIADO se obliga a mantener sus datos personales actualizados.</li>
                                       </ul>
                                  </li>
                                  <li>
                                      <h3>8. MODIFICACIONES CONTRACTUALES</h3>
                                       FAVOORU se compromete a notificar cualquier modificación sustancial en el contrato con la antelación suficiente. Los AFILIADOS que muestren su disconformidad a estas modificaciones disponen del derecho a solicitar exclusivamente la liquidación y la resolución de este contrato sin ningún otro tipo de pretensión. Se considerará el e-mail como un medio de comunicación válido.
                                  </li>
                                  <li>
                                      <h3>9. INCIDENCIAS</h3>
                                       ebido al estado de la técnica FAVOORU no será responsable de los problemas derivados de la falta de acceso o de los problemas inherentes a la conectividad a Internet o a las redes de telecomunicaciones cuando estas tuvieren su origen en causas ajenas a su control o a causas que no hubieran podido ser previstas por las Partes o que aún siendo previsibles, FAVOORU haya realizado todos los esfuerzos razonables para evitarlas, o que fueran consideradas como causas fortuitas o de fuerza mayor. FAVOORU no será responsable de fallos en el servicio que conlleven pérdidas de datos en el sistema de tratamiento de la información, o fallos en el sistema de seguridad o virus u otros componentes de software dañinos en el servicio de FAVOORU. FAVOORU no será responsable de ningún error en la instalación de los enlaces en la Página Web i cuenta de Facebook u otra red social del AFILIADO ni de la función especificada en los enlaces. Cualquier tipo de incidencia detectada por el AFILIADO que afecte al normal funcionamiento del sistema se pondrá en conocimiento de FAVOORU para que proceda a la subsanación. FAVOORU informa que por razones de mantenimiento de carácter técnico, el acceso a la aplicación podría verse ocasionalmente restringido, entendiendo el Afiliado que dichas mantenciones son necesarias para el buen funcionamiento del servicio.
                                  </li>
                                  <li>
                                      <h3>10. PROPIEDAD INTELECTUAL</h3>
                                       FAVOORU es titular en exclusiva de todos los derechos de propiedad intelectual e industrial sobre los diferentes soportes publicitarios, los programas informáticos, incluyendo el panel de control, el software desarrollado para el programa de afiliación, y sobre las marcas, logos, textos, creatividades, contenidos, y diseños que formen parte en su conjunto del programa de afiliación. No se podrá reproducir, distribuir, transformar, comunicar públicamente, ceder o usar códigos fuente de ninguna de las aplicaciones, web sites, desarrollos o soportes publicitarios para otros fines distintos a los estipulados en este contrato. FAVOORU no transfiere a los usuarios la propiedad de su software del programa de Afiliados, no estando autorizado el afiliado realizar actos de ingeniería inversa que permitan seccionarlo para su estudio, o descompilarlo, traducir la versión del código objeto original o su lenguaje a otro código o lenguaje. Por todo ello, FAVOORU se reserva el derecho de actuar contra cualquiera que esté infringiendo sus derechos de propiedad intelectual o industrial. EL AFILIADO no hará uso de ningún material puesto a su disposición para otros fines distintos de los aquí suscritos, a menos que obtenga autorización previa y por escrito de FAVOORU. EL AFILIADO se compromete a no usar los distintivos publicitarios en cualquier manera que desacredite o represente negativamente a FAVOORU, su imagen o sus marcas.
                                  </li>
                                  <li>
                                      <h3>11. CONSENCUENCIAS DE LA RESOLUCIÓN O TERMINACIÓN</h3>
                                       Finalizado el presente contrato por cualquier causa, el Afiliado quedará totalmente desvinculado de FAVOORU, quedando prohibido de forma expresa la utilización de logotipos y banners o cualquier alusión a la marca, logotipos, anagramas, o cualesquiera otros elementos de propiedad industrial o intelectual que correspondan en titularidad a FAVOORU.
                                  </li>
                                  <li>
                                      <h3>12. OTRAS CONSIDERACIONES</h3>
                                      <ul>
                                        <li>FAVOORU no garantiza la continuidad del programa de afiliados, por lo que podrá darlo por finalizado liquidando los pagos pendientes.</li>
                                        <li>Cada una de las partes es responsable de los contenidos y vinculos que incluya en su página web.</li>
                                      </ul>
                                  </li>
                                  <li>
                                      <h3>13. PROTECCIÓN DE DATOS</h3>
                                      Los datos serán recabados GRUPO MEZEL con la finalidad de gestionar su incorporación y permanencia en el programa de afiliados de FAVOORU. Asimismo, sus datos podrán ser tratados para enviarle información sobre nuestros productos y servicios incluso por medios electrónicos. Los datos de registro deberán ser veraces. En caso de que fueran falsos, el usuario no podrá ser parte del programa de afiliados, reservándose GRUPO MEZEL el derecho de dar de baja a quien incumpla con este requisito. Los datos registrados pasarán a un fichero propiedad de GRUPO MEZEL adecuándose a la Ley de Protección de Datos Personales. GRUPO MEZEL declara que se han adoptando las medidas técnicas y organizativas de protección de datos por el que se aprueba el Reglamento de desarrollo de la Ley Orgánica de protección de datos de carácter personal. Para ejercer sus derechos de acceso, rectificación, oposición o cancelación de sus datos, envíe su solicitud a favooru@mentesitneligentes.com
                                  </li>
                                  <li>
                                      <h3>14. RESPONSABILIDADES</h3>
                                      El AFILIADO asumirá la responsabilidad por los daños y perjuicios ocasionados a FAVOORU por el incumplimiento de las cláusulas contempladas en el presente contrato, y en concreto:
                                      <ul>
                                        <li>cuando el mal uso de los soportes causen un daño a la imagen de FAVOORU. En caso de daños a la imagen de FAVOORU, GRUPO MEZEL  se reserva el derecho de resolver el contrato de inmediato y de ejercer las acciones que en derecho correspondan.</li>
                                        <li>por las reclamaciones de terceros a FAVOORU debidas a la negligencia en el uso del programa de afiliación.</li>
                                        <li>por los gastos que se le ocasione a FAVOORU el uso incorrecto del programa de afiliación.</li>
                                      </ul>
                                      

                                      Ante cualquiera de estas causales, FAVOORU está autorizado a retener los importes en concepto de comisiones que hubiesen correspondido al afiliado.
                                  </li>
                                  <li>
                                      <h3>15. LEGISLACIÓN Y FUERO</h3>
                                      En los aspectos no estipulados en el presente contrato, así como en la interpretación y resolución de los conflictos que pudieran existir entre las partes como consecuencia de los mismos, será de aplicación la legislación Salvadoreña o presente acorde a su ciudad de origen. Para resolver cualquier tipo de controversias que pudieran surgir como consecuencia de la interpretación y ejecución de este contrato de afiliación, ambas partes se someterán a la jurisdicción y competencia de los Juzgados y Tribunales de la ciudad de San Salvador o de la ciudad de origen, renunciando expresamente a su fuero propio, de ser otro. Ninguna disposición de este Contrato dará lugar ni se interpretará que ha dado lugar, a la constitución de una Sociedad entre las partes ni de una relación laboral entre FAVOORU y el AFILIADO.
                                  </li>

                            </ul>
          
              </div>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url().RES_DIR; ?>/front-end/js/jquery-1.11.0.js"></script>

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
        $('#affiliate-data').hide();
        $('#affiliate-end').hide();


        $(function(){

            $('.btn-form-affiliate').on('click', function(){
              
            });

        });

        $(function() {
            $('#affiliate-form').bind('submit', function(event) {
            });
        });


        $(function(){
          $('.step').hover(function(){
            $(this).addClass('animated pulse');
            $(this).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',  function() {
                $(this).removeClass('animated pulse');
             });
          });
          $('.affiliate-now').bind('click', function(event) {
              $('#affiliate-data').show();
              event.preventDefault();
          });

        });
    });
    

     
    </script>

</body>

</html>
