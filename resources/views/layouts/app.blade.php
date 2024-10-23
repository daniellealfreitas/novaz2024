<?php
define('SITE_KEY', '6LeWLa8UAAAAACh9IFmr0VWPkQH2c3p8piwypM3I');
?>
<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <!-- SEO -->
    <meta name="author" content="Daniel Leal Freitas - Novaz - Desenvolvendo o Futuro da Web" />
    <meta name="description" content="Novaz - Criação de Logotipos, Websites e Publicidade na Internet em Curitiba" />
    <meta name="keywords" content="logotipos, websites, publicidade na internet, agencias web, agencias de publicidade, curitiba e região metropolitana" />
    <meta name="robots" content="all, index, follow" />


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> @yield('title', 'Título padrão')</title>
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/icon"  />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">

    <link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet"  type="text/css" media="screen" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css"  />
    <link href="{{ asset('css/theme-color/red-theme.css') }}" id="switcher"  rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    {{-- <!-- BEGAIN PRELOADER -->
    <div id="preloader">
        <div class="loader">&nbsp;</div>
    </div> --}}


    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>

    @yield('header')

   
    @include('partials.nav')


  

    @yield('content')


    <section id="google-map">
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-top-area">
                                <a class="footer-logo" href="{{ url('/') }}"><img src="{{ asset('images/logo_white.png') }}" alt="Logo"></a>
                                <div class="footer-social">
                                    <a class="facebook" href="https://www.facebook.com/novazwebdesign" target="_blank"><span class="fa fa-facebook"></span></a>
                                    <a class="instagram" href="https://instagram.com/novazmarketing" target="_blank"><span class="fa fa-instagram"></span></a> 
                                    <a class="youtube" href="https://www.youtube.com/channel/UC0m3rYvGQXIhkU222-RabEw" target="_blank"><span class="fa fa-youtube" target="_blank"></span></a>
                                    <a class="linkedin" href="https://www.linkedin.com/in/daniel-leal-freitas-22489719?trk=nav_responsive_tab_profile_pic" target="_blank" ><span class="fa fa-linkedin" target="_blank"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Copyright - 2024</p>
            </div>
        </footer>
    </section>

        <!-- initialize jQuery Library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/slick.js') }} "></script>
        <script type="text/javascript" src="{{ asset('js/waypoints.js') }} "></script>
        <script type="text/javascript" src="{{ asset('js/jquery.counterup.js') }} "></script>
        <script type="text/javascript" src="{{ asset('js/jquery.mixitup.js') }} "></script>
        <script type="text/javascript" src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
        <!-- Wow animation -->
        <script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
        <!-- Custom js -->
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>



    
</body>

</html>
