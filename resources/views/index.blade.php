<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Prediksi Kelulusan</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-space-dynamic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <!--

TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <h4>Prediksi<span> Kelulusan</span></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About Us</a></li>
                            <li class="scroll-to-section"><a href="#services">Services</a></li>
                            <li class="scroll-to-section"><a href="#contact">Contact</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <h6>Selamat datang di Sistem Prediksi Kelulusan</h6>
                                <h2>Prediksi <em>Kelulusan</em> <span>Anda </span> Sekarang !</h2>
                                <!-- <p>Universitas Dian Nuswantoro.</p> -->
                                <form id="search" action="{{ url('/predict') }}" method="GET">
                                    {{-- <fieldset>
                                        <input type="nim" name="nim" placeholder="Masukkan NIM Anda ..." autocomplete="on" required>
                                    </fieldset>
                                    <fieldset>
                                        <button type="submit" class="main-button">Prediksi Kelulusan</button>
                                    </fieldset> --}}
                                    <button class="main-button" style="background:#03a4ed">Prediksi Sekarang</button>
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{asset('assets/images/banner-right-image.png')}}" alt="team meeting">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <img src="{{ asset('assets/images/about-left-image.png') }}" alt="person graphic">
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="services">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="icon">
                                        <img src="{{asset('assets/images/service-icon-01.png')}}" alt="reporting">
                                    </div>
                                    <div class="right-text">
                                        <h4>Prediksi Kelulusan</h4>
                                        <p>Memprediksi Kelulusan Anda tepat waktu atau tidak tepat waktu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/service-icon-02.png') }}" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>Data Reporting</h4>
                                        <p>Menampilkan statistik mahasiswa lulus dan tidak lulus</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/service-icon-03.png') }}" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>Cek Faktor Penghambat</h4>
                                        <p>Memprediksi faktor penghambat kelulusan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/service-icon-04.png') }}" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>Penyebab Terlambat Lulus</h4>
                                        <p>Memprediksi penyebab keterlambatan dan cara mengatasinya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="our-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="left-image">
                        <img src="{{ asset('assets/images/services-left-image.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="section-heading">
                        <h2>Kenapa Anda harus <em>Prediksi</em> <span>Kelulusan</span> ?</h2>
                        <p>Prediksi kelulusan mahasiswa pada kategori tepat waktu mempunyai manfaat baik untuk perguruan tinggi maupun bagi mahasiswa sendiri. Karena tingkat kelulusan dianggap sebagai salah satu penilaian penting bagi akreditasi dari BAN
                            PT dimana salah satu penilaian darinya adalah banyaknya mahasiswa yang dapat menyelesaikan program studinya tepat waktu atau lebih cepat dari waktu yang sudah ditetapkan. Selain ketentuan dari perguruan tinggi , tentunya lulus
                            tepat waktu menjadi harapan mahasiswa karena dapat lebih menghemat biaya perkuliahan, kesempatan mendapat lapangan kerja yang lebih baik dan keuntungan - keuntungan lainnya.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="first-bar progress-skill-bar">
                                <h4>Akurasi Prediksi</h4>
                                <span>84%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-12">
                            <div class="second-bar progress-skill-bar">
                                <h4>SEO Reports</h4>
                                <span>88%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="third-bar progress-skill-bar">
                                <h4>Page Optimizations</h4>
                                <span>94%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div> -->
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>See What Our Agency <em>Offers</em> &amp; What We <span>Provide</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="hidden-content">
                                <h4>SEO Analysis</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="hidden-content">
                                <h4>Website Reporting</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="hidden-content">
                                <h4>Performance Tests</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="hidden-content">
                                <h4>Data Analysis</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div id="blog" class="our-blog section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>Check Out What Is <em>Trending</em> In Our Latest <span>News</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="top-dec">
                        <img src="assets/images/blog-dec.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="left-image">
                        <a href="#"><img src="assets/images/big-blog-thumb.jpg" alt="Workspace Desktop"></a>
                        <div class="info">
                            <div class="inner-content">
                                <ul>
                                    <li><i class="fa fa-calendar"></i> 24 Mar 2021</li>
                                    <li><i class="fa fa-users"></i> TemplateMo</li>
                                    <li><i class="fa fa-folder"></i> Branding</li>
                                </ul>
                                <a href="#">
                                    <h4>SEO Agency &amp; Digital Marketing</h4>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore magna...</p>
                                <div class="main-blue-button">
                                    <a href="#">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="right-list">
                        <ul>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i> 18 Mar 2021</span>
                                    <a href="#">
                                        <h4>New Websites &amp; Backlinks</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                                </div>
                                <div class="right-image">
                                    <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i> 14 Mar 2021</span>
                                    <a href="#">
                                        <h4>SEO Analysis &amp; Content Ideas</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                                </div>
                                <div class="right-image">
                                    <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i> 06 Mar 2021</span>
                                    <a href="#">
                                        <h4>SEO Tips &amp; Digital Marketing</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                                </div>
                                <div class="right-image">
                                    <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>Berikan kritik dan saran untuk membantu kami dalam memenuhi kebuhan Anda !</h2>
                        <p>Memiliki kritik, saran, mengalami masalah dalam penggunan aplikasi atau menemukan bug ?</p>
                        <div class="phone-info">
                            <h4>Hubungi kami : <span><i class="fa fa-phone"></i> <a href="#">(+62)812 3456 7891</a></span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                        <div class="contact-dec">
                            <img src="assets/images/contact-decoration.png" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p>© Copyright 2022 Udinus All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/animation.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/js/templatemo-custom.js') }}"></script>

</body>

</html>
