<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYALTASTE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    

    <link rel="stylesheet" href="./asset/css/traiteur.css">
    <link rel="stylesheet" href="./asset/css/style.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./asset/css/royal.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
            
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


   <!-- Navbar Start -->
   <div class="container-fluid position-relative nav-bar p-0">
        <div class="navposition position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="{{route('index')}}" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">ROYAL</span>TASTE</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto px-4">
                        <a href="{{route('index')}}" class="nav-item nav-link active">Acceuil</a>
                        <a href="{{route('patisserie')}}" class="nav-item nav-link">Patisserie</a>
                        <a href="{{route('traiteur')}}" class="nav-item nav-link">Service traiteur</a>
                        <h3 style="margin-top: 30px;"> <span class="text-secondary" >ROYAL</span><span style="color: #F195B2">TASTE</span></h3>
                        <a href="{{route('formulaire')}}" class="nav-item nav-link">Commander en ligne</a>
                        <a href="{{ route('login') }}" class="nav-item nav-link ">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./asset/img/buffet2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditionelle & Delicieuse</h4>
                            <h1 class="display-3 text-white mb-md-4">Notre Service Traiteur est disponible 7/7 </h1>
                            <a href="{{route('formulaire')}}" class="btn btn-primary py-md-3 px-md-5 mt-2">résèrvez</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./asset/img/buffet-6329757_1920.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditionelle & Delicieuse</h4>
                            <h1 class="display-3 text-white mb-md-4">ROYALTASTE,plus de soucis pour vos buffets</h1>
                            <a href="{{route('formulaire')}}" class="btn btn-primary py-md-3 px-md-5 mt-2">résèrvez</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container">
        <h1 class="mt-5 text-center">Un traiteur de qualité pour vous satisfaire 
            a tout moment</h1>
        <div class="raw img-patisserie mt-5 d-flex">
            <div class=" col-6 menu">
                <ul>
                    <li class="fs-4"> Riz cantonnais</li>
                    <li class="fs-4">Riz créole</li>
                    <li class="fs-4"> Pommes sablées</li>
                    <li class="fs-4">Navarin d’agneau</li>
                    <li class="fs-4"> Filet de boeuf</li>
                    <li class="fs-4"> Sandwichs</li>
                    <li class="fs-4">Hors d’oeuvre</li>
                    <li class="fs-4"> salade</li>
                    <li class="fs-4"> tarcos</li>
                    <li class="fs-4">etc...</li>
                </ul>
            </div>
            <div >
                <img src="./asset/img/traiteur3.jpg" class="sandwich" width="600" height="420" alt="">
            </div>

        </div > 
    </div>


    <div class=" raw d-flex mt-5 container justify-content-space-between" id="galerie-service">
        <div class="col-4">
            <img src="./asset/img/buffet1.jpg" class="galerie-traiteur" width="400" height="300" alt="">
        </div>

        <div class="col-4">
            <img src="./asset/img/buffet-6329757_1920.jpg" class="galerie-traiteur" width="400" height="300"alt="">
        </div>

        <div class="col-4">
            <img src="./asset/img/buffet5.jpg" class="galerie-traiteur" width="400" height="300" alt="">
        </div>
    </div>

    <div class=" raw d-flex  mt-5 container justify-content- space-between " id="galerie-service">
        <div class="col-4">
            <img src="./asset/img/salad1.jpg" class="galerie-traiteur" width="400" height="300" alt="">
        </div>

        <div class="col-4">
            <img src="./asset/img/buffet3.jpg" class="galerie-traiteur" width="400" height="300" alt="">
        </div>

        <div class="col-4">
            <img src="./asset/img/buffet2.jpg" class="galerie-traiteur" width="400"height="300" alt="">
        </div>
    </div>

<!-- Footer Start -->
<div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-12 mb-4">
                <a href="index.html" class="navbar-brand m-0">
                    <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">ROYAL</span>TASTE</h1>
                </a>
            </div>
            <div class="col-12 mb-4">
                <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-12 mt-2 mb-4">
                <div class="row">
                    <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                        <h5 class="font-weight-bold mb-2">CONTACT</h5>
                        <p class="mb-2">Vakpossito fish <br> Lomé-Togo</p>
                        <p class="mb-0"><br>Tel: 00228 92339749 <br> 00228 97270517</p></p>
                    </div>
                    <div class="col-sm-6 text-center text-sm-left">
                        <h5 class="font-weight-bold mb-2">HORAIRE</h5>
                        <p class="mb-2">Lundi – Samedi, 09h – 19h</p>
                        <p class="mb-0">Dimanche, 09h - 21H </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <p class="m-0"> Copyright © 2022</p>
                
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>