<!DOCTYPE html>
<html>
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- reponsive meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic Industrial Product</title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">



    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- animate css-->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customstyle.css') }}">




    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/customstyle.css"> -->


    <!-- <link rel="stylesheet" href="css/animate.min.css"> -->
    <!-- owl-carousel-->
    <link rel="stylesheet" href="{{ asset('vendors/owlcarousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/revolution/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui-1.11.4/jquery-ui.min.css') }}">


    
    <!-- <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="vendors/revolution/css/settings.css">
    <link rel="stylesheet" href="vendors/revolution/css/layers.css">
    <link rel="stylesheet" href="vendors/revolution/css/navigation.css">
    <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css"> -->

    <!-- Main Css-->
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon.png')}}" >
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <header id="header">
      <!-- Header Gray Band-->
      <section class="wel-t-band">
        <div class="container">
          <div class="row wel-band-bg">
            <div class="col-md-6 pull-left col col-sm-12">
              <p>Welcome to Dynamic Product Solution <span>since 2007</span></p>
            </div>
            <div class="col-md-6 pull-right text-right col-sm-12">
              <p>Certified Company: <span>ISO 9001:2015</span></p>
            </div>
          </div>
        </div>
      </section>
      <!-- Header Gray Band-->
      <!-- Logo Section-->
      <div class="container">
        <div class="row pad-logo logo-wrapper">
          <!-- <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 t-logo"><a href={{Route('home')}}><img src="images/header/logo-2.png" alt="logo" class="img-responsive"></a></div> -->
          <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 t-logo"><a href={{Route('home')}}><img src="{{ asset('images/header/logo-2.png') }}" alt="logo" class="img-responsive"></a></div>

          <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 text-right">
            <div class="top-two-right">
              <div class="req-button text-right"><a href="request-qoute.html" class="submit">requet a quote</a></div>
              <div class="top-panel">
                <div class="touch_top touch_top_pad">
                  <ul class="nav">
                    <li class="item item-phone">
                      <div class="media">
                        <div class="blue-color media-left"><a href="#"><i class="icon icon-Phone2"></i></a></div>
                        <div class="media-body">
                          <p>+880 1933-302535<br><span><a href="mailto:karim@greengenesisbd.com">karim@greengenesisbd.com</a></span></p>
                        </div>
                      </div>
                    </li>
                    <li class="item item-ad">
                      <div class="media">
                        <div class="blue-color media-left"><a href="#"><i class="icon icon-Pointer"></i></a></div>
                        <div class="media-body">
                          <p>House B/113, Mosque Road,<br><span>Mohakhali DOHS, Dhaka</span></p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Navigation-->
      <div class="main_menu menu_fixed nav-home-three">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
              <div class="logo"><img src="images/logo-mobile.png" alt=""></div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="nav-menu pull-left text-left">
                <div class="nav-t-holder pull-left text-left">
                  <div class="nav-t-header">
                    <button><i class="fa fa-bars"></i></button>
                  </div>
                  <div class="nav-t-footer">
                    <ul class="nav">
                      <li class="has-t-submenu"><a href={{Route('home')}}>Home</a>
                        <!-- <ul class="submenu">
                          <li><a href={{Route('home2')}}>Home Two</a></li>
                          <li><a href={{Route('home3')}}>Home Three</a></li>
                          <li><a href={{Route('home4')}}>Home Four</a></li>
                          <li><a href={{Route('home5')}}>Home Five</a></li>
                        </ul> -->
                      </li>
                      <li class="has-t-submenu"><a href={{Route('about')}} target="_blank">about us</a>
                        <ul class="submenu">
                          <li><a href={{Route('team')}} target="_blank" >Our Team</a></li>
                          <li><a href={{Route('testimonials')}} target="_blank">Testimonials</a></li>
                          <li><a href={{Route('faq')}} target="_blank">Faq</a></li>
                        </ul>
                      </li>
                      <li class="has-t-submenu"><a href={{Route('allcategory')}} target="_blank">Product</a>
                        <ul class="submenu">
                          <li><a href={{Route('electricmotor')}} target="_blank">Dynamic Motor</a></li>
                          <li><a href={{Route('roandufmembrane')}} target="_blank">Dynamic RO</a></li>
                          <li><a href={{Route('industrialpump')}} target="_blank">Dynamic Pump</a></li>
                          <li><a href={{Route('blower')}} target="_blank">Dynamic Blower</a></li>
                          <li><a href={{Route('frpvessel')}} target="_blank">Dynamic Vessel</a></li>
                          <li><a href={{Route('electromageneticflowmeter')}} target="blank" >Dynamic Flow Meter</a></li>
                          <li><a href={{Route('roandufmembrane')}} target="_blank">Dynamic Ro Antiscalant</a></li>
                          <li><a href={{Route('watertreatmentchemicalsandmedia')}} target="_blank">Water Treatment Chemical and Media</a></li>
                          <li><a href={{Route('watertreatmentaccessories')}} target="_blank">Water Treatment Plants Accessories</a></li>
                          <li><a href={{Route('allcategory')}} target="_blank">Other Product</a></li>
                          

                        </ul>
                      </li>
                      <li class="has-t-submenu"><a href={{Route('projects')}} target="_blank">Projects</a>
                        <ul class="submenu">
                          <li><a href={{Route('classic')}} target="_blank">classic</a></li>
                          <li><a href={{Route('fullscreen')}} target="_blank">fullscreen</a></li>
                          <li><a href={{Route('lightbox')}} target="_blank">lightbox</a></li>
                          <li><a href={{Route('projects')}} target="_blank" >Projects Details</a></li>
                        </ul>

                      <li class="has-t-submenu"><a href={{Route('solutions')}} target="_blank">Industrial Solutions</a>
                        <ul class="submenu">
                          <li><a href={{Route('meterial')}} target="_blank">ETP Plant</a></li>
                          <li><a href={{Route('agricultural')}} target="_blank">STP Plant</a></li>
                          <li><a href={{Route('mechanical')}} target="_blank" >WTP Plant</a></li>
                          <li><a href={{Route('chemical')}} target="_blank">Iron Removal Plant</a></li>
                          <li><a href={{Route('power')}} target="_blank" >RO Water Plant</a></li>
                          <li><a href={{Route('oil')}} target="_blank">Water Softener Plant</a></li>
                          <li><a href={{Route('alternate')}} target="_blank">alternate energy</a></li>
                        </ul>
                      </li>
                      
                      </li>
                      <li class="has-t-submenu"><a href={{Route('resources')}} target="_blank">Resources</a>
                        <ul class="submenu">
                          <li><a href={{Route('resourcesdetails')}} target="_blank">Resources Details</a></li>
                        </ul>
                      </li>
                      
                      <li><a href={{Route('contact')}} target="_blank">contact us</a></li>
                    </ul>
                    <div class="mobile-link"><a href="request-qoute.html" class="submit">requet a quote</a>
                      <div class="widget-t widget-t-search">
                        <div class="widget-t-inner">
                          <form action="#" method="get" class="search-form">
                            <div class="input-group">
                              <input type="search" placeholder="Search" class="form-control"><span class="input-group-addon">
                                <button type="submit"><i class="icon icon-Search"></i></button></span>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="nav-search pull-right text-right">
                <div class="widget-t widget-t-search">
                  <div class="widget-t-inner">
                    <!-- <form action="#" method="get" class="search-form">
                      <div class="input-group">
                        <input type="search" placeholder="Search" class="form-control"><span class="input-group-addon">
                          <button type="submit"><i class="icon icon-Search"></i></button></span>
                      </div>
                    </form> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Navigation-->
    </header>
