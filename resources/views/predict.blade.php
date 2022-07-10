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

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
                            <li class="scroll-to-section"><a href="{{url('')}}#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('')}}#about">About Us</a></li>
                            <li class="scroll-to-section"><a href="{{url('')}}#services">Services</a></li>
                            <li class="scroll-to-section"><a href="{{url('')}}#contact">Contact</a></li>
                            {{-- <li class="scroll-to-section">
                                <div class="main-red-button"><a href="login">Login</a></div>
                            </li> --}}
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

                    <form id="contact" action="predict" method="post">
                        @csrf
                        <div class="row">
                            @if(session('msg'))
                            <div class="alert alert-warning col-lg-12">
                                {{ session('msg') }}
                                @php
                                    \Session::forget('msg');
                                @endphp
                            </div>
                            @endif
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="Gender">Gender</label>
                                    <select name="sex" id="sex" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">L</option>
                                        <option value="2">P</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="Kota Asal">Kota Asal</label>
                                    <select name="kota_asal" id="kota_asal" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">Semarang</option>
                                        <option value="2">Luar Semarang</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="Jumlah Ajuan Cuti">Jumlah Ajuan Cuti</label>
                                    <select name="jml_ajuan_cuti" id="jml_ajuan_cuti" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">Pernah Cuti</option>
                                        <option value="2">Tidak Pernah Cuti</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="Jumlah Tunggakan">Jumlah Tunggakan</label>
                                    <select name="jml_tunggakan" id="jml_tunggakan" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">Pernah Ada Tunggakan</option>
                                        <option value="2">Tidak Pernah Ada Tunggakan</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="Usia">Usia</label>
                                    <select name="usia" id="usia" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">Kurang dari sama dengan 21 tahun</option>
                                        <option value="2">22 sampai 25 tahun</option>
                                        <option value="3">Diatas 25 tahun</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="Beasiswa">Beasiswa</label>
                                    <select name="beasiswa" id="beasiswa" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">Menerima beasiswa</option>
                                        <option value="2">Tidak pernah menerima beasiswa</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="Marital">Marital</label>
                                    <select name="marital" id="marital" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">Sudah Menikah</option>
                                        <option value="2">Belum</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="Aktivitas Kemahasiswaan">Aktivitas Kemahasiswaan</label>
                                    <select name="jml_aktivitas_kemahasiswaan" id="jml_aktivitas_kemahasiswaan" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">Aktif Mengikuti</option>
                                        <option value="2">Tidak Memiliki</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="Prestasi">Prestasi</label>
                                    <select name="jml_prestasi" id="jml_prestasi" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">Punya Piagam</option>
                                        <option value="2">Tidak Punya Piagam</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="IPS 1">IPS 1</label>
                                    <select name="ips1" id="ips1" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">IPS kurang dari 2</option>
                                        <option value="2">IPS > 2 dan kurang dari 3</option>
                                        <option value="3">IPS lebih dari 3</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="IPS 2">IPS 2</label>
                                    <select name="ips2" id="ips2" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">IPS kurang dari 2</option>
                                        <option value="2">IPS > 2 dan kurang dari 3</option>
                                        <option value="3">IPS lebih dari 3</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="IPS 3">IPS 3</label>
                                    <select name="ips3" id="ips3" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">IPS kurang dari 2</option>
                                        <option value="2">IPS > 2 dan kurang dari 3</option>
                                        <option value="3">IPS lebih dari 3</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="IPS 4">IPS 4</label>
                                    <select name="ips4" id="ips4" class="form-control">
                                        <option>Pilih Salah Satu</option>
                                        <option value="1">IPS kurang dari 2</option>
                                        <option value="2">IPS > 2 dan kurang dari 3</option>
                                        <option value="3">IPS lebih dari 3</option>
                                    </select>
                                </fieldset>
                            </div>



                            <div class="col-lg-12 mt-3">
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
