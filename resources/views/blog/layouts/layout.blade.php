<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i&amp;amp;subset=latin-ext">

    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/fonts/fontawesome/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/fonts/themify-icons/themify-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/style.css')}}">
</head>

<body>
<div class="page-wrap">

    <!-- header -->
    <header class="header">
        <div class="container">
            <div class="header__logo"><img src="{{asset('assets/front/img/logo.png')}}" alt="logo"/></div>

            <!-- consult-nav -->
            <nav class="consult-nav">

                <!-- consult-menu -->
                <ul class="consult-menu">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">about</a>
                    </li>
                    <li class="menu-item-has-children current-menu-item">
                        <a href="{{route('blog')}}">blog</a>
                    </li>
                    <li><a href="#">contact</a>
                    </li>
                </ul><!-- consult-menu -->

                <div class="navbar-toggle"><span></span><span></span><span></span></div>
            </nav><!-- End / consult-nav -->

        </div>
    </header><!-- End / header -->

    @yield('content')

    <!-- footer -->
    <footer class="footer">
        <div class="footer__main">
            <div class="row row-eq-height">
                <div class="col-8 col-sm-7 col-md-9 col-lg-3 ">
                    <div class="footer__item"><a class="consult_logo" href="#"><img src="{{asset('assets/front/img/logo.png')}}" alt=""/></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet ut lacus a tincidunt.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                    <div class="footer__item">

                        <!-- widget-text__widget -->
                        <section class="widget-text__widget widget">
                            <div class="widget-text__content">
                                <ul>
                                    <li><a href="#">Term of Services </a></li>
                                    <li><a href="#">Privacy Policy </a></li>
                                    <li><a href="#">Sitemap </a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </section><!-- End / widget-text__widget -->

                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 ">
                    <div class="footer__item">

                        <!-- widget-text__widget -->
                        <section class="widget-text__widget widget">
                            <div class="widget-text__content">
                                <ul>
                                    <li><a href="#">How It Work </a></li>
                                    <li><a href="#">Carrier </a></li>
                                    <li><a href="#">Pricing </a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </section><!-- End / widget-text__widget -->

                    </div>
                </div>
                <div class="col-md-4 col-lg-2 col-xl-2 ">
                    <div class="footer__item">

                        <!-- form-sub -->
                        <div class="form-sub">
                            <h4 class="form-sub__title">Our Newsletter</h4>
                            <form class="form-sub__form">
                                <div class="form-item">
                                    <input class="form-control" type="email" placeholder="Enter Your Email Address..."/>
                                </div>
                                <div class="form-submit">
                                    <button class="form-button" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                </div>
                            </form>
                        </div><!-- End / form-sub -->

                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2  consult_backToTop">
                    <div class="footer__item"><a href="#" id="back-to-top"> <i class="fa fa-angle-up" aria-hidden="true"> </i><span>Back To Top</span></a></div>
                </div>
            </div>
        </div>
        <div class="footer__copyright"><script>document.write(new Date().getFullYear());</script> &copy; MyBlog</div>
    </footer><!-- End / footer -->

</div>

<!-- App-->
<script type="text/javascript" src="{{asset('assets/front/js/main.js')}}"></script>
</body>
</html>
