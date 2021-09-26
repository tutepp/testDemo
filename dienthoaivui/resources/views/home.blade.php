
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Dienthoaivui</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href={{ URL("/frontend/css/bootstrap.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/font-awesome.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/elegant-icons.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/nice-select.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/jquery-ui.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/owl.carousel.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/slicknav.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/style.css") }} type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="ogani-master/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./ogani-master/shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__top__left">
                        <img src="data:image/png;base64,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" alt="logo" style="width:128px;height:43px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">

                        <div class="input-group rounded">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fa fa-search"></i>
                        </span>
                        </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li><a href="#"><i class="fa fa-phone" style="color:white"></i></a></li>
                                <li><a href="#"><i class="fa fa-check-square" style="color:white"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart" style="color:white"></i></a></li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">

            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero" style="margin-top:15px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img alt="Vsmart chính hãng siêu rẻ" src="https://dienthoaihay.vn/images/slideshow/2021/09/19/compress/vsmart_1631876921_1632013582.jpg">
                </div>
                <div class="col-lg-3">
                <img class="img-old img-responsive" alt="Banner phải slideshow 1" src="https://dienthoaihay.vn/images/banners/original/chuan_1630552293.jpg">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Backmid Section Start -->
    <section class="background-center">
     <img class="img-old img-responsive" alt="Dưới slideshow" src="https://dienthoaihay.vn/images/banners/original/bh-vip_1624009757.gif">
    </section>
    <!-- Backmid Section End -->

    <!-- Categories Section Begin -->
    <section class="categories" style="margin-top:15px">
        <div class="container">
            <div class="row">

                    <div class="col-lg-3">
                    <img  alt="Realme" src ="https://dienthoaihay.vn/images/products/cat/resized/hang3_1629782127.png">
                    </div>
                    <div class="col-lg-3">
                    <img  alt="Xiaomi" src ="https://dienthoaihay.vn/images/products/cat/resized/hang4_1629782113.png">
                    </div>
                    <div class="col-lg-3">
                    <img  alt="iPhone" src ="https://dienthoaihay.vn/images/products/cat/resized/hang1_1629782045.png">
                    </div>
                    <div class="col-lg-3">
                    <img  alt="Samsung" src ="https://dienthoaihay.vn/images/products/cat/resized/hang2_1629782097.png">
                    </div>

            </div>
        </div>
    </section>
    <!-- Categories Section End -->
<section class="category">
<div class="container">
    <div class="layout">
    <div class="layout-item">
        <div class="brand-phone">
        <p style="color: white;text-align: center;">Sản phẩm bán chạy</p>
        </div>
    </div>

        <div class="layout-item-brand">
            <div class="brand-phone">
                <img alt="iPhone" width="" height="20.27px" src="https://dienthoaihay.vn/images/products/cat/resized/hang1_1629782045.png">
            </div>
        </div>

        <div class="layout-item-brand">
            <div class="brand-phone">
            <img alt="Xiaomi" width="" height="" src="https://dienthoaihay.vn/images/products/cat/resized/hang4_1629782113.png">
            </div>
        </div>
        <div class="layout-item-brand">
        <div class="brand-phone">
        <img alt="Samsung" width="" height="" src="https://dienthoaihay.vn/images/products/cat/resized/hang2_1629782097.png">
        </div>
        </div>
        <div class="layout-item-brand">
        <div class="brand-phone">
        <img alt="Realme" width="" height="" src="https://dienthoaihay.vn/images/products/cat/resized/hang3_1629782127.png">
        </div>
        </div>
        <div class="layout-item-price">
        <div class="brand-phone">
        <p style="color: black;text-align: center;">Dưới 3 triệu</p>
        </div>
        </div>
        <div class="layout-item-price">
        <div class="brand-phone">
        <p style="color: black;text-align: center;">3- 5 triệu</p>
        </div>
        </div>
        <div class="layout-item-price">
        <div class="brand-phone">
        <p style="color: black;text-align: center;">5 - 7 triệu</p>
        </div>
        </div>
        <div class="layout-item-price">
        <div class="brand-phone">
        <p style="color: black;text-align: center;">7 - 10 triệu</p>
        </div>
        </div>
        </div>

    </div>

</div>
</section>
    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-3.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-5.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-6.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-7.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-8.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src={{ URL("/frontend/js/jquery-3.3.1.min.js") }}></script>
    <script src={{ URL("/frontend/js/bootstrap.min.js") }}></script>
    <script src={{ URL("/frontend/js/jquery.nice-select.min.js") }}></script>
    <script src={{ URL("/frontend/js/jquery-ui.min.js") }}></script>
    <script src={{ URL("/frontend/js/jquery.slicknav.js") }}></script>
    <script src={{ URL("/frontend/js/mixitup.min.js") }}></script>
    <script src={{ URL("/frontend/js/owl.carousel.min.js") }}></script>
    <script src={{ URL("/frontend/js/main.js") }}></script>



</body>

</html>
