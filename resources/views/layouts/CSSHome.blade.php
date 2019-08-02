<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChabHuoy</title>

    <!-- Font awesome -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{asset('css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.simpleLens.css')}}">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/nouislider.css')}}">
    <!-- Theme color -->
    <link id="switcher" href="{{asset('css/theme-color/default-theme.css')}}" rel="stylesheet">
    {{--Customer CSS in header--}}
    <link id="header-custom" href="{{asset('css/Header.css')}}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{asset('css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Google Font -->
    <link href='{{asset('https://fonts.googleapis.com/css?family=Lato')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('https://fonts.googleapis.com/css?family=Raleway')}}' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <![endif]-->


</head>

<body>

<!-- Start header section -->
<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">
                            <!-- start language -->
                            <div class="aa-language">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <img src="{{asset('img/flag/english.jpg')}}" alt="english flag">ENGLISH
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><img src="{{asset('img/flag/french.jpg')}}" alt="">FRENCH</a></li>
                                        <li><a href="#"><img src="{{asset('img/flag/english.jpg')}}" alt="">ENGLISH</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- / language -->

                            <!-- start currency -->
                            <div class="aa-currency">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-usd"></i>USD
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                                        <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- / currency -->
                            <!-- start cellphone -->
                            <div class="cellphone hidden-xs">
                                <p><span class="fa fa-phone"></span>+855-76-62-99-699</p>
                            </div>
                            <!-- / cellphone -->
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">
                                {{--<li><a href="account.html">My Account</a></li>--}}
                                <li class="hidden-xs"><a href="wish-list">Wishlist</a></li>
                                <li class="hidden-xs"><a href="cart">My Cart</a></li>
                                <li class="hidden-xs"><a href="check-out">Checkout</a></li>

                                    @if (Route::has('login'))
                                         @auth
                                            {{--<li class="hidden-xs"><a href="{{ url('/profile') }}">My Account</a></li>--}}
                                            {{--@if(Auth::user()->role=='admin')--}}
                                            {{--@endif--}}
                                        {{--@role('admin')--}}
                                                <li class="hidden-xs"><a href="/product-upload">Upload Product</a></li>
                                                {{--<li class="hidden-xs"><a href="/admin-manager">Admin Page</a></li>--}}
                                        {{--@endrole--}}
                                            <li class="dropdown"><a href="">{{ Auth::user()->name }}<span class="caret"></span></a>
                                                <ul  class="dropdown-content" style="text-align: center; min-width: 100px;">
                                                        @guest
                                                        @else
                                                    <li><a href="/profile">Profile</a></li><br>
                                                            <li>
                                                                <a href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>
                                                            </li>
                                                        @endguest
                                                </ul>
                                            </li>
                                         @else
                                             {{--<a href="{{ route('login') }}">Login</a>--}}
                                         <li><a href="#login-modal" data-toggle="modal" data-target="#login-modal">Login</a></li>

                                                 @if (Route::has('register'))
                                                      <a href="#register-modal" data-toggle="modal" data-target="#register-modal">Register</a>
                                                 @endif
                                             @endauth
                                     @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="/">
                                <span class="fa fa-shopping-cart"></span>
                                <p>Chab<strong>Huoy</strong> <span>Your Shopping Partner</span></p>
                            </a>
                            <!-- img based logo -->
                            <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        {{--<div class="aa-cartbox">--}}
                            {{--<a class="aa-cart-link" href="#">--}}
                                {{--<span class="fa fa-shopping-basket"></span>--}}
                                {{--<span class="aa-cart-title">SHOPPING CART</span>--}}
                                {{--<span class="aa-cart-notify">2</span>--}}
                            {{--</a>--}}
                            {{--<div class="aa-cartbox-summary">--}}
                                {{--<ul>--}}
                                    {{--<li>--}}
                                        {{--<a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>--}}
                                        {{--<div class="aa-cartbox-info">--}}
                                            {{--<h4><a href="#">Product Name</a></h4>--}}
                                            {{--<p>1 x $250</p>--}}
                                        {{--</div>--}}
                                        {{--<a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>--}}
                                        {{--<div class="aa-cartbox-info">--}}
                                            {{--<h4><a href="#">Product Name</a></h4>--}}
                                            {{--<p>1 x $250</p>--}}
                                        {{--</div>--}}
                                        {{--<a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                      {{--<span class="aa-cartbox-total-title">--}}
                        {{--Total--}}
                      {{--</span>--}}
                                        {{--<span class="aa-cartbox-total-price">--}}
                        {{--$500--}}
                      {{--</span>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            <form method="get" action="{{url('product-search')}}" enctype="multipart/form-data">
                                <div>
                                    <input type="text" name="search" id="" placeholder="Search here ex. 'man' ">
                                    <select name="searchOption" id="" style="width: 80%">
                                        <option value="all">All</option>
                                        <option value="men">Men</option>
                                        <option value="women">Women</option>
                                        <option value="kids">Kids</option>
                                        <option value="sports">Sports</option>
                                        <option value="digital">Digital</option>
                                        <option value="all">Furniture</option>
                                    </select>
                                    <button type="submit"><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                        <!-- / search box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
<!-- / header section -->

<!-- menu -->
<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/product-category/men">Men <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Casual</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Formal</a></li>
                                <li><a href="#">Standard</a></li>
                                <li><a href="#">T-Shirts</a></li>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Trousers</a></li>
                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="/product-category/women">Women <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Kurta & Kurti</a></li>
                                <li><a href="#">Trousers</a></li>
                                <li><a href="#">Casual</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Formal</a></li>
                                <li><a href="#">Sarees</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                        <li><a href="#">And more.. <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Rings</a></li>
                                                <li><a href="#">Earrings</a></li>
                                                <li><a href="#">Jewellery Sets</a></li>
                                                <li><a href="#">Lockets</a></li>
                                                <li class="disabled"><a class="disabled" href="#">Disabled item</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Polo T-Shirts</a></li>
                                                <li><a href="#">SKirts</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Tops</a></li>
                                                <li><a href="#">Make Up</a></li>
                                                <li><a href="#">Hair Care</a></li>
                                                <li><a href="#">Perfumes</a></li>
                                                <li><a href="#">Skin Care</a></li>
                                                <li><a href="#">Hand Bags</a></li>
                                                <li><a href="#">Single Bags</a></li>
                                                <li><a href="#">Travel Bags</a></li>
                                                <li><a href="#">Wallets & Belts</a></li>
                                                <li><a href="#">Sunglases</a></li>
                                                <li><a href="#">Nail</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="/product-category/kids">Kids <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Casual</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Formal</a></li>
                                <li><a href="#">Standard</a></li>
                                <li><a href="#">T-Shirts</a></li>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Trousers</a></li>
                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="/product-category/sports">Sports</a></li>
                        <li><a href="/product-category/digital">Digital <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Tablet</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Accesories</a></li>
                            </ul>
                        </li>
                        <li><a href="/product-category/furniture">Furniture</a></li>
                        <li><a href="../blog-archive.html">Blog <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../blog-archive.html">Blog Style 1</a></li>
                                <li><a href="../blog-archive-2.html">Blog Style 2</a></li>
                                <li><a href="../blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="../contact.html">Contact</a></li>
                        <li><a href="#">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../product.html">Shop Page</a></li>
                                <li><a href="../product-detail.html">Shop Single</a></li>
                                <li><a href="../404.html">404 Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
<!-- / menu -->
<main class="py-4">
    @yield('content')
</main>
<!-- footer -->
<footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-top-area">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <h3>Main Menu</h3>
                                    <ul class="aa-footer-nav">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">Our Products</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Knowledge Base</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Discount</a></li>
                                            <li><a href="#">Special Offer</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Useful Links</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Site Map</a></li>
                                            <li><a href="#">Search</a></li>
                                            <li><a href="#">Advanced Search</a></li>
                                            <li><a href="#">Suppliers</a></li>
                                            <li><a href="#">FAQ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Contact Us</h3>
                                        <address>
                                            <p> 25 Astor Pl, NY 10003, USA</p>
                                            <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                                            <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                                        </address>
                                        <div class="aa-footer-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                            <a href="#"><span class="fa fa-youtube"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-bottom-area">
                        <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
                        <div class="aa-footer-payment">
                            <span class="fa fa-cc-mastercard"></span>
                            <span class="fa fa-cc-visa"></span>
                            <span class="fa fa-paypal"></span>
                            <span class="fa fa-cc-discover"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->
    <!-- jQuery library -->
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="{{asset('js/jquery.smartmenus.js')}}"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="{{asset('js/jquery.smartmenus.bootstrap.js')}}"></script>
    <!-- To Slider JS -->
    <script src="{{asset('js/sequence.js')}}"></script>
    <script src="{{asset('js/sequence-theme.modern-slide-in.js')}}"></script>
    <!-- Product view slider -->
    <script type="text/javascript" src="{{asset('js/jquery.simpleGallery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.simpleLens.js')}}"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="{{asset('js/slick.js')}}"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="{{asset('js/nouislider.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $(".btn-success").click(function(){
                var html = $(".clone").html();
                $(".increment").after(html);
            });

            $("body").on("click",".btn-danger",function(){
                $(this).parents(".control-group").remove();
            });

        });

    </script>
</body>
</html>
