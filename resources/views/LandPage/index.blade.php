<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Robic - Multipurpose Landing Page Template</title>

    <meta name="description" content="Sistemas de Automação">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Neuton:400,800,700,400italic,300,200' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>

    @section('css')
        <link rel="stylesheet" href="{{ elixir('css/tema.css') }}">
    @show

    <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!--Header Area Start-->
@include('base.Front.header')
<!--End of Header Area-->
<!--Slider Area Start-->
@include('base.Front.slider')
<!--End of Slider Area-->
<!--Feature Area Start-->
<div class="feature-area section-light-text" id="feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <div class="feature-text">
                    <p class="p-title">Features</p>
                    <h2>Amazing</h2>
                    <h1>Features</h1>
                    <p>Tempora similique excepturi obcaecati, maiores nostrum esse illo in soluta at saepe perspiciatis
                        eos quasi laudantium sunt ad quaerat?</p>
                    <a href="#" class="button">Read More</a>
                </div>
            </div>
            <div class="hidden-xs hidden-sm col-md-3 col-lg-4">
                <div class="app-image">
                    <img src="img/app/1.png" alt="">
                </div>
            </div>
            <div class="col-md-5 col-sm-7 col-xs-12">
                <div class="feature-list">
                    <div class="single-feature">
                        <span><img src="img/icon/mac-dark.png" alt=""></span>
                        <div class="single-feature-text">
                            <h5>Clean Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing<br>
                                elitr eiciendis autem aperiam.</p>
                        </div>
                    </div>
                    <div class="single-feature">
                        <span><img src="img/icon/headphone-dark.png" alt=""></span>
                        <div class="single-feature-text">
                            <h5>Dedicated Support</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer <br>
                                adipiscing elit. Aenean commodo ligula eget dolor. </p>
                        </div>
                    </div>
                    <div class="single-feature">
                        <span><img src="img/icon/setting-dark.png" alt=""></span>
                        <div class="single-feature-text">
                            <h5>Very Customizable</h5>
                            <p>Aenean massa. Cum sociis natoque<br>
                                penatibus et magnis Lorem ipsum dolor sit amet,</p>
                        </div>
                    </div>
                    <div class="single-feature">
                        <span><img src="img/icon/multi-dark.png" alt=""></span>
                        <div class="single-feature-text">
                            <h5>Multiple Demos</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing <br>
                                elitr eiciendis autem aperiam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Feature Area-->
<!--Service Area Start-->
@include('LandPage.about')
<!--End of Service Area-->
<!--Video Area Start-->
<div class="video-area" id="video">
    <div class="video-overlay"></div>
    <div class="video-wrapper text-center">
        <div class="full-width-video">
            <video id="video-bg" src="video/library.mp4" loop></video>
        </div>
        <div class="video-text">
            <div class="table-cell">
                <div id="polina">
                    <button><i class="fa fa-play"></i></button>
                </div>
                <h1 class="video-title">Video <span>presentation</span></h1>
            </div>
        </div>
    </div>
</div>
<!--End of Video Area-->
<!--Features Carousel Area Start-->
<div class="features-carousel-area section-light-text hidden-sm" id="screenshot">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-9">
                <div class="features-list">
                    <h1>Screenshots</h1>
                    <div class="feature-list-carousel">
                        <div class="feature-list-carousel-item">
                            <div class="single-features-list">
                                <div class="feature-list-img">
                                    <span><img src="img/icon/camera-dark.png" alt=""></span>
                                </div>
                                <div class="feature-list-text">
                                    <h4>Present your app with AppSperia screenshots</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitr eiciendis<br>
                                        autem aperiam.</p>
                                </div>
                            </div>
                            <div class="single-features-list">
                                <div class="feature-list-img">
                                    <span><img src="img/icon/image-dark.png" alt=""></span>
                                </div>
                                <div class="feature-list-text">
                                    <h4>Change images using side arrows or caption bullets</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer<br>
                                        adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                </div>
                            </div>
                            <div class="single-features-list">
                                <div class="feature-list-img">
                                    <span><img src="img/icon/screen-dark.png" alt=""></span>
                                </div>
                                <div class="feature-list-text">
                                    <h4>Navigate using keyboard arrows to change screenshots</h4>
                                    <p>Aenean massa. Cum sociis natoque<br>
                                        penatibus et magnis Lorem ipsum dolor sit amet,</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-list-carousel-item">
                            <div class="single-features-list">
                                <div class="feature-list-img">
                                    <span><img src="img/icon/camera-dark.png" alt=""></span>
                                </div>
                                <div class="feature-list-text">
                                    <h4>Present your app with AppSperia screenshots</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitr eiciendis<br>
                                        autem aperiam.</p>
                                </div>
                            </div>
                            <div class="single-features-list">
                                <div class="feature-list-img">
                                    <span><img src="img/icon/image-dark.png" alt=""></span>
                                </div>
                                <div class="feature-list-text">
                                    <h4>Change images using side arrows or caption bullets</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer<br>
                                        adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                </div>
                            </div>
                            <div class="single-features-list">
                                <div class="feature-list-img">
                                    <span><img src="img/icon/screen-dark.png" alt=""></span>
                                </div>
                                <div class="feature-list-text">
                                    <h4>Navigate using keyboard arrows to change screenshots</h4>
                                    <p>Aenean massa. Cum sociis natoque<br>
                                        penatibus et magnis Lorem ipsum dolor sit amet,</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-list-carousel-item">
                            <div class="single-features-list">
                                <div class="feature-list-img">
                                    <span><img src="img/icon/camera-dark.png" alt=""></span>
                                </div>
                                <div class="feature-list-text">
                                    <h4>Present your app with AppSperia screenshots</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitr eiciendis<br>
                                        autem aperiam.</p>
                                </div>
                            </div>
                            <div class="single-features-list">
                                <div class="feature-list-img">
                                    <span><img src="img/icon/image-dark.png" alt=""></span>
                                </div>
                                <div class="feature-list-text">
                                    <h4>Change images using side arrows or caption bullets</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer<br>
                                        adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                </div>
                            </div>
                            <div class="single-features-list">
                                <div class="feature-list-img">
                                    <span><img src="img/icon/screen-dark.png" alt=""></span>
                                </div>
                                <div class="feature-list-text">
                                    <h4>Navigate using keyboard arrows to change screenshots</h4>
                                    <p>Aenean massa. Cum sociis natoque<br>
                                        penatibus et magnis Lorem ipsum dolor sit amet,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-3">
                <div class="feature-app">
                    <img src="img/app/2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Features Carousel Area-->
<!--Pricing Taable Area Start-->
<div class="pricing-area section-light-one light" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title light">
                    <h1>Pricing <span>Packages</span></h1>
                    <p>Lorem ipsum dolor sit amet proin gravida nibh vel velit</p>
                    <img src="img/icon/title-bg.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pricing-packages">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-price-package">
                            <div class="price-title">
                                <h3>Standard Pack</h3>
                                <h1>$50</h1>
                                <p>PER MONTH</p>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li><img src="img/icon/mark.png" alt="">Free support</li>
                                    <li><img src="img/icon/mark.png" alt="">100 features</li>
                                    <li><img src="img/icon/mark.png" alt="">15 accounts</li>
                                </ul>
                                <div class="price-btn">
                                    <button type="button" class="button">Sign up for subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="single-price-package dark">
                            <div class="price-title">
                                <h3>Best Pack</h3>
                                <h1 class="text-white">$100</h1>
                                <p class="text-white">PER MONTH</p>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li><img src="img/icon/mark-white.png" alt="">Free support</li>
                                    <li><img src="img/icon/mark-white.png" alt="">120 features</li>
                                    <li><img src="img/icon/mark-white.png" alt="">25 accounts</li>
                                </ul>
                                <div class="price-btn">
                                    <button type="button" class="button">Sign up for subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="single-price-package">
                            <div class="price-title">
                                <h3>Premium Pack</h3>
                                <h1>$250</h1>
                                <p>PER MONTH</p>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li><img src="img/icon/mark.png" alt="">Free support</li>
                                    <li><img src="img/icon/mark.png" alt="">150 features</li>
                                    <li><img src="img/icon/mark.png" alt="">45 accounts</li>
                                </ul>
                                <div class="price-btn">
                                    <button type="button" class="button">Sign up for subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Pricing Taable Area-->
<!-- Clients Area Start-->
<div class="clients-area section-light-text" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <div class="testimonial-text-slider text-center">
                    <div class="sin-testiText">
                        <div class="client-rating">
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor This is Photoshop's version of Lorem Ipsum.
                            Proin gravida nibh vel velit auctor aliquet. , nisi elit consequat ipsum, nec sagittis sem
                            nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                        <h2>Mohamet </h2>
                        <p>Toronto, Canada</p>
                    </div>
                    <div class="sin-testiText">
                        <div class="client-rating">
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Nam nec tellus a odio tincidunt This is Photoshop's version of Lorem Ipsum. Proin gravida
                            nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                            consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                            a sit amet mauris. Morbi accumsan ipsum velit. </p>
                        <h2>Andrew</h2>
                        <p>Artesia, Los Angeles</p>
                    </div>
                    <div class="sin-testiText">
                        <div class="client-rating">
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                        </div>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                            nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                            ipsum velit. Nam nec tellus a odio tincidunt </p>
                        <h2>Antorio</h2>
                        <p>Berkeley, Alameda</p>
                    </div>
                    <div class="sin-testiText">
                        <div class="client-rating">
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                            nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
                            vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
                            tincidunt </p>
                        <h2>Jhon Dew</h2>
                        <p>Burlingame, San Mateo</p>
                    </div>
                    <div class="sin-testiText">
                        <div class="client-rating">
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                            nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                            ipsum velit. Nam nec tellus </p>
                        <h2>Robert</h2>
                        <p>Chowchilla, Madera</p>
                    </div>
                    <div class="sin-testiText">
                        <div class="client-rating">
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                        </div>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                            nibh id elit. Duis sed odio sit amet nibh vulputate cursus a velit. Nam nec tellus a odio
                            tincidunt </p>
                        <h2>Harry</h2>
                        <p>Corcoran, Kings</p>
                    </div>
                    <div class="sin-testiText">
                        <div class="client-rating">
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                            nibh id elit. Duis sed. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt </p>
                        <h2>kattie</h2>
                        <p>Foster, San Mateo</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="testimonial-image-slider text-center">
                            <div class="sin-testiImage">
                                <img src="img/testimonial/1.png" alt="testimonial 1"/>
                            </div>
                            <div class="sin-testiImage">
                                <img src="img/testimonial/2.png" alt="testimonial 2"/>
                            </div>
                            <div class="sin-testiImage">
                                <img src="img/testimonial/3.png" alt="testimonial 3"/>
                            </div>
                            <div class="sin-testiImage">
                                <img src="img/testimonial/2.png" alt="testimonial 2"/>
                            </div>
                            <div class="sin-testiImage">
                                <img src="img/testimonial/1.png" alt="testimonial 2"/>
                            </div>
                            <div class="sin-testiImage">
                                <img src="img/testimonial/2.png" alt="testimonial 2"/>
                            </div>
                            <div class="sin-testiImage">
                                <img src="img/testimonial/1.png" alt="testimonial 2"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Clients Area-->
<!--Blog Area Start-->
<div class="blog-area section-light-blog" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title light">
                    <h1 class="text-uppercase">App's <span>News</span></h1>
                    <p>Lorem ipsum dolor sit amet proin gravida nibh vel velit</p>
                    <img src="img/icon/title-bg.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-carousel">
                <div class="col-md-4">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="#">
                                <img src="img/blog/1.jpg" alt="">
                                <span class="date-time">22 <span>Sep</span></span>
                            </a>
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                            <a href="#" class="blog-button">Read More <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="#">
                                <img src="img/blog/2.jpg" alt="">
                                <span class="date-time">10 <span>Nov</span></span>
                            </a>
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                            <a href="#" class="blog-button">Read More <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="#">
                                <img src="img/blog/3.jpg" alt="">
                                <span class="date-time">08 <span>Dec</span></span>
                            </a>
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                            <a href="#" class="blog-button">Read More <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="#">
                                <img src="img/blog/1.jpg" alt="">
                                <span class="date-time">22 <span>Sep</span></span>
                            </a>
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                            <a href="#" class="blog-button">Read More <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="#">
                                <img src="img/blog/2.jpg" alt="">
                                <span class="date-time">10 <span>Nov</span></span>
                            </a>
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                            <a href="#" class="blog-button">Read More <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="buttons-load">
                    <button type="button" class="button">Load more post</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Blog Area-->
<!--Download App Area Start-->
<div class="download-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h1>Download <span>our app from</span></h1>
                    <p class="text-white">A better way to present your app using fully featured appsperia template. <br>
                        Now available on the App Store and Play Store!</p>
                    <img src="img/icon/title-bg-white.png" alt="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="download-buttons text-center">
                    <a href="#" class="button"><img class="btn-img" src="img/icon/apple.png" alt=""><img
                                class="btn-hover" src="img/icon/apple-hover.png" alt="">APP STORE</a>
                    <a href="#" class="button"><img class="btn-img" src="img/icon/avatar.png" alt=""><img
                                class="btn-hover" src="img/icon/avatar-hover.png" alt="">PLAY STORE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Download App Area Start-->
<!--Contact Us Area Start-->
<div class="contact-area contact-light" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="contact-info-container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="section-title">
                                <h1>Contact <span>With Us</span></h1>
                                <p>Lorem ipsum dolor sit amet proin gravida nibh vel velit roin gravida
                                    nibh vel velit</p>
                                <img src="img/icon/title-bg.png" alt="">
                            </div>
                            <div class="contact-address">
                                <ul>
                                    <li><span class="icon-img"><img src="img/icon/phone.png" alt=""></span> <span
                                                class="information">(977) 324 644 676 / (800) 123 456 789</span></li>
                                    <li><span class="icon-img"><img src="img/icon/envelope.png" alt=""></span> <span
                                                class="information">admin@power-boosts.com</span></li>
                                    <li><span class="icon-img"><img src="img/icon/map.png" alt=""></span> <span
                                                class="information">No 40 Baria Sreet 133/2 New York City, NY,<br> United States</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <form action="mail.php" method="post" id="contact-form">
                                <div class="form-top">
                                    <div class="form-group col-md-12">
                                        <input name="name" type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input name="email" type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input name="subject" type="text" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea name="message" class="yourmessage form-control"
                                                  placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="submit-form form-group col-sm-12">
                                    <button class="button" type="submit"><span>Submit</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Contact Us Area-->
@section('footer')
    @include('base.Front.footer')
@endsection

@section('js')
    <script src="{{ elixir('js/tema.js') }}"></script>
@show

</body>
</html>
