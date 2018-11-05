<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Seosight - Shop</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/styles.css') }}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app/css/magnific-popup.css') }}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

<header class="header" id="site-header">

    <div class="container">

        <div class="header-content-wrapper">

            <ul class="nav-add">
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">0</span>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart">No products in the cart!</h4>
                            <p class="subtitle">Please make your choice.</p>
                            <div class="btn btn-small btn--dark">
                                <span class="text">view all catalog</span>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </div>

    </div>

</header>


<div class="content-wrapper">

    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">Udemy E-commerce tutorial</h4>
                    <p class="heading-text">Buy books, and we ship to you.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->

    @yield('page')
</div>

<!-- Footer -->

<footer class="footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{ asset('assets/app/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('assets/app/js/crum-mega-menu.js') }}"></script>
<script src="{{ asset('assets/app/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('assets/app/js/theme-plugins.js') }}"></script>
<script src="{{ asset('assets/app/js/main.js') }}"></script>
<script src="{{ asset('assets/app/js/form-actions.js') }}"></script>

<script src="{{ asset('assets/app/js/velocity.min.js') }}"></script>
<script src="{{ asset('assets/app/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('assets/app/js/animation.velocity.min.js') }}"></script>

<!-- ...end JS Script -->


</body>


</html>