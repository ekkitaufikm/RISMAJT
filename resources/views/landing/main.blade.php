<!-- 
    website ini infaq dari : muhammad faiq raihan dhiyaulhak || risma - 13
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <link rel="shortcut icon" href="{{ asset('assets/landing/img/LOGORISMA.png') }}">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="RISMAJT | Remaja Islam Masjid Agung Jawa Tengah" name="keywords">
        <meta content="RISMAJT | Remaja Islam Masjid Agung Jawa Tengah" name="description">

        <!-- Favicon --> 
        <link href="{{ asset('assets/landing/img/favicon.ico') }}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/landing/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/landing/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/landing/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/landing/css/style.css') }}" rel="stylesheet"> 

        {{-- link preloader --}}
        <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

        <body>
        {{-- preloader --}}
        <div class="preloader">
            <div class="loading">
              <img src="{{ asset('assets/landing/img/LOGORISMA.png') }}" width="80">
              <p>Loading......</p>
            </div>
        </div>

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                {{-- GAMBAR LOGO RISMAJT --}}
                {{-- <img class="navbar-brand" src="landing/img/LOGORISMA.png" alt="" data-image-width="10" data-image-height="10"> --}}
                <a href="{{ url('') }}"class="navbar-brand">rismajt</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{ url('') }}" class="nav-item nav-link">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#kajian" class="nav-item nav-link">Kajian</a>
                        <a href="#news" class="nav-item nav-link">News</a>
                        <a href="#kontak" class="nav-item nav-link">Contact</a>
                        <a href="{{ url('login') }}" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->

        @yield('content')
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Sekretariat</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Gedung Sunan Kalijaga,Kompleks MAJT</p>
                            <p><i class="fa fa-phone-alt"></i>+6281999967373</p>
                            <p><i class="fa fa-envelope"></i>bulletinsunankalijaga@gmail.com</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="#home">Home</a>
                            <a href="#about">About</a>
                            <a href="#Kajian">Kajian</a>
                            <a href="#news">News</a>
                            <a href="#contact">Contact</a>
                            <a href="#login">Login</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="/login">Login system informasi anggota</a>
                            <a href="https://youtube.com">youtube rismajt</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn btn-custom">Submit</button>
                                {{-- <label>Don't worry, we don't spam!</label> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Humas RISMAJT</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p> <a href="https://htmlcodex.com"></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/landing/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/landing/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/landing/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('assets/landing/lib/parallax/parallax.min.js') }}"></script>
        
        <!-- Contact Javascript File -->
        <script src="{{ asset('assets/landing/mail/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{ asset('assets/landing/mail/contact.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/landing/js/main.js') }}"></script>

        {{-- preloader --}}
        <script>
            $(document).ready(function(){
            $(".preloader").fadeOut();
            })
            </script>
        
    </body>
</html>
