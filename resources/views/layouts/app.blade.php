<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8" >
        <meta name="description" content="Medical & health landing page templates for online appointment that help you to medical service & patient visit" >
        <meta name="keywords" content="Medical, Health" >
        <meta name="author" content="DIN DIGITAL" >

        <meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <title>Wealth.life | Medical Landing Page Template</title>

        <!-- your favicon icon link -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" >

        <!-- Custom CSS -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" >

    </head>
    <!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <h1 class="logo-brand">WEALTH.<span class="logo">LIFE</span></h1>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li class="hidden">
                                <a href="#page-top"></a>
                            </li>
                            <li class="page-scroll">
                                <a href="{{ route('home') }}#about">APPOINMENT</a>
                            </li>
                            <li class="page-scroll">
                                <a href="{{ route('home') }}#services">FEATURE</a>
                            </li>
                            <li class="page-scroll">
                                <a href="{{ route('home') }}#doctor">DOCTOR</a>
                            </li>
                            <li class="page-scroll">
                                <a href="{{ route('home') }}#contact">CONTACT US</a>
                            </li>
                            <li class="page-scroll social">
                                <a href="#">
                                    <i class="fa fa-facebook-square fa-size"> </i>
                                </a>
                                <a href="#">
                                    <i class="fa  fa-twitter-square fa-size"> </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus-square fa-size"> </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-flickr fa-size"> </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </div>

        @yield('content')

        <div class="footer"><!-- footer section start -->
            <div class="container">
                <div class="row ft">
                    <div class="col-md-9">
                        <p> © Copyright 2014. All Rights Reserved by Wealth.life </p>
                    </div>
                    <div class="col-md-3">
                        <p>
                            <a href="#">
                                <i class="fa fa-facebook-square fa-size social-icon"> </i>
                            </a>
                            <a href="#">
                                <i class="fa  fa-twitter-square fa-size social-icon"> </i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google-plus-square fa-size social-icon"> </i>
                            </a>
                            <a href="#">
                                <i class="fa fa-flickr fa-size social-icon"> </i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest-square fa-size social-icon"> </i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- footer section close -->

        <!-- Core JavaScript Files -->
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
