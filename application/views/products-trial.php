<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
      <link href="<?php echo base_url().RES_DIR; ?>/front-end/css/bootstrap.min.css" rel="stylesheet">
          <script src="<?php echo base_url().RES_DIR; ?>/front-end/js/jquery-1.11.0.js"></script>
  <style>
.product-list .pro-img-box {
    position: relative;
}
.product-list img {
    width: 100%;
    border-radius: 4px 4px 0px 0px;
}
.adtocart {
    background: none repeat scroll 0% 0% #FC5959;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: #FFF;
    display: inline-block;
    text-align: center;
    border: 3px solid #FFF;
    left: 39%;
    bottom: -25px;
    position: absolute;
}
a, a:hover, a:focus {
    text-decoration: none;
    outline: medium none;
}
.adtocart i {
    color: #FFF;
    font-size: 25px;
    line-height: 42px;
}
.adtocart {
    color: #FFF;
    text-align: center;
}

.pro-title {
    color: #5A5A5A;
    display: inline-block;
    margin-top: 20px;
    font-size: 16px;
}
a, a:hover, a:focus {
    text-decoration: none;
    outline: medium none;
}

.product-list .price {
    color: #FC5959;
    font-size: 15px;
}
.panel-body {
    padding: 0px!important;
}
.boxed{
  box-shadow: 2px 2px 2px 2px #8C8C8C !important;
}

  </style>
</head>
<body>
  <?php 
    $hoy = date("mdy"); echo $hoy.'<br/>';
    $precio = str_replace(".", "", "5.00"); 
    $precio = str_pad($precio, 4, "0", STR_PAD_LEFT);
    echo $precio.'<br/>';
    $idProducto = strval(1);
    $idProducto = str_pad($idProducto, 2, "0", STR_PAD_LEFT);
    echo $idProducto.'<br/>';
    $idCliente = '0001';
    echo $idCliente.'<br/>';
    $code = $idCliente.$idProducto.$precio.$hoy;
    echo $code;

  ?>

  <div class="col-md-6">
  <div class="row product-list">
                          <div class="col-md-4">
                              <section class="panel boxed">
                                  <div class="pro-img-box">
                                     <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url().RES_DIR; ?>/img/img/portada_1.jpg" alt=""/></a> 
                                      <a href="#" class="adtocart">
                                          <i class="fa fa-shopping-cart"></i>
                                      </a>
                                  </div>

                                  <div class="panel-body shop-panel text-center">
                                      <h4>
                                          <a href="#" class="pro-title">
                                              Leopard Shirt Dress
                                          </a>
                                      </h4>
                                      <p class="price">$300.00</p>
                                  </div>
                              </section>
                          </div>
                          <div class="col-md-4">
                              <section class="panel">
                                  <div class="pro-img-box">
                                      <img src="<?php echo base_url().RES_DIR; ?>/img/img/product-list/pro1.jpg" alt=""/>
                                      <a href="#" class="adtocart">
                                          <i class="fa fa-shopping-cart"></i>
                                      </a>
                                  </div>

                                  <div class="panel-body text-center">
                                      <h4>
                                          <a href="#" class="pro-title">
                                              Leopard Shirt Dress
                                          </a>
                                      </h4>
                                      <p class="price">$300.00</p>
                                  </div>
                              </section>
                          </div>
                          <div class="col-md-4">
                              <section class="panel">
                                  <div class="pro-img-box">
                                      <img src="<?php echo base_url().RES_DIR; ?>/img/img/product-list/pro2.jpg" alt=""/>
                                      <a href="#" class="adtocart">
                                          <i class="fa fa-shopping-cart"></i>
                                      </a>
                                  </div>

                                  <div class="panel-body text-center">
                                      <h4>
                                          <a href="#" class="pro-title">
                                              Leopard Shirt Dress
                                          </a>
                                      </h4>
                                      <p class="price">$300.00</p>
                                  </div>
                              </section>
                          </div>
                          <div class="col-md-4">
                              <section class="panel">
                                  <div class="pro-img-box">
                                      <img src="<?php echo base_url().RES_DIR; ?>/img/img/product-list/pro3.jpg" alt=""/>
                                      <a href="#" class="adtocart">
                                          <i class="fa fa-shopping-cart"></i>
                                      </a>
                                  </div>

                                  <div class="panel-body text-center">
                                      <h4>
                                          <a href="#" class="pro-title">
                                              Leopard Shirt Dress
                                          </a>
                                      </h4>
                                      <p class="price">$300.00</p>
                                  </div>
                              </section>
                          </div>
                          <div class="col-md-4">
                              <section class="panel">
                                  <div class="pro-img-box">
                                      <img src="<?php echo base_url().RES_DIR; ?>/img/img/product-list/pro-1.jpg" alt=""/>
                                      <a href="#" class="adtocart">
                                          <i class="fa fa-shopping-cart"></i>
                                      </a>
                                  </div>

                                  <div class="panel-body text-center">
                                      <h4>
                                          <a href="#" class="pro-title">
                                              Leopard Shirt Dress
                                          </a>
                                      </h4>
                                      <p class="price">$300.00</p>
                                  </div>
                              </section>
                          </div>
                          
       </div>  
       </div>   
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Planeta Corazón 1</h4>
      </div>
      <div class="row">
      <div class="col-md-12 text-center">
           <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src="//player.vimeo.com/video/107357748?title=0&amp;byline=0&amp;portrait=0" width="350" height="197" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
        </div>
      </div>
      
            
    </div>
  </div>
</div>
    <script src="<?php echo base_url().RES_DIR; ?>/front-end/js/bootstrap.min.js"></script>
       <script>

    // $(document).ready( function(){
    //   var num = Calculate('0001010500092914');
    //   var complete = '0001010500092914' + num;
    //   alert(num);
    //    alert(Validate(complete));
    //    alert(complete);
    // });
      function Calculate(Luhn)
     {
        var sum = 0;
        for (i=0; i<Luhn.length; i++ )
        {
        sum += parseInt(Luhn.substring(i,i+1));
        }
      var delta = new Array (0,1,2,3,4,-4,-3,-2,-1,0);
      for (i=Luhn.length-1; i>=0; i-=2 )
        {   
        var deltaIndex = parseInt(Luhn.substring(i,i+1));
        var deltaValue = delta[deltaIndex]; 
        sum += deltaValue;
      } 
      var mod10 = sum % 10;
      mod10 = 10 - mod10; 
      if (mod10==10)
      {   
        mod10=0;
      }
      return mod10;
     }

 function Validate(Luhn)
 {
  var LuhnDigit = parseInt(Luhn.substring(Luhn.length-1,Luhn.length));
  var LuhnLess = Luhn.substring(0,Luhn.length-1);
  if (Calculate(LuhnLess)==parseInt(LuhnDigit))
  {
    return true;
  } 
  return false;
 }
    </script>                  
</body>
</html>