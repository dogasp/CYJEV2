<!DOCTYPE html>
<html lang="en">

<head>
    {!! EuCookieConsent::getPopup() !!}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @if(EuCookieConsent::canIUse('Google-Analytics'))
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169885014-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-169885014-1');
        </script>
    @endif

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="CY Junior Engineering (CYJE), est une association de concept Junior-Entreprise au sein de CY Tech, située à Cergy-Pontoise (95).
    Nous vous accompagnons dans la réalisation de vos projets, de leur conception à leur mise en production.">

    <title>CY Junior Engineering</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('img/logoseul.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
    <!-- offrePresta CSS File-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" rel="stylesheet" />

    <!-- Nice-Select CSS Files -->
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">


    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/pageDeGarde.css')}}">
    <link rel="stylesheet" href="{{asset('css/intro.css')}}">
    <link rel="stylesheet" href="{{asset('css/offrePresta.css')}}">
    <link rel="stylesheet" href="{{asset('css/detailOffrePresta.css')}}">
    <link rel="stylesheet" href="{{asset('css/nousChoisir.css')}}">
    <link rel="stylesheet" href="{{asset('css/portofolio.css')}}">
    <link rel="stylesheet" href="{{asset('css/team.css')}}">
    <link rel="stylesheet" href="{{asset('css/clients.css')}}">
    <link rel="stylesheet" href="{{asset('css/devis.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">


    <!-- =======================================================
  * Template Name: NewBiz - v2.0.0
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left scrollto">
                <!-- Uncomment below if you prefer to use an text logo -->
                <!-- <h1 class="text-light"><a href="#pageDeGarde"><span>CYJE</span></a></h1>-->
                <a href="#pageDeGarde" class="scrollto"><img src="{{asset('img/logofinal.png')}}" alt="" class="img-fluid"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="{{ Route::currentRouteNamed('main') ? 'active' : '' }}"><a href="/#pageDeGarde">Accueil</a></li>
                    <li class="{{ Route::currentRouteNamed('offres') ? 'active' : '' }}"><a href="/offres">Nos prestations</a></li>
                    <li class="{{ Route::currentRouteNamed('team') ? 'active' : '' }}"><a href="/team">À propos</a></li>
                    <!-- <li><a href="">Actualités</a></li> -->
                    <li class="devis"><a href="/devis">Obtenir un devis</a></li>
                </ul>
            </nav><!-- .main-nav -->
        </div>
    </header><!-- #header -->

