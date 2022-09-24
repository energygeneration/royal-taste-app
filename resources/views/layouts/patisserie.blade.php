<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYALTASTE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css/patisserie.css"> -->

    <link rel="stylesheet" href="./asset/css/patisserie.css">
    <link rel="stylesheet" href="./asset/css/style.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/css/carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/asset/css/lightbox.min.css" rel="stylesheet">

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
                    <div class="navbar-nav mx-1 ml-auto px-4">
                        <a href="{{route('index')}}" class="nav-item nav-link active">Acceuil</a>
                        <a href="{{route('patisserie')}}" class="nav-item nav-link">Patisserie</a>
                        <h3 style="margin-top: 30px;"> <span class="text-secondary" >ROYAL</span><span style="color: #F195B2">TASTE</span></h3>
                        <a href="{{route('traiteur')}}" class="nav-item nav-link mx-5">Service traiteur</a>
                        <a href="{{ route('login') }}" class="nav-item nav-link ">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <!-- <div id="header-carousel" class="carousel slide" data-ride="carousel"> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./asset/img/acceuil-image-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditionelle & Delicieuse</h4>
                            <h1 class="display-3 text-white mb-md-4">Une Patisserie proche de vous</h1>
                            <a href="{{route('commandez')}}" class="btn btn-primary py-md-3 px-md-5 mt-2">Commander</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img class="w-100" src="./asset/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditionelle & Delicieuse</h4>
                            <h1 class="display-3 text-white mb-md-4">ROYALTASTE,votre Patisserie proche de vous</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Commander</a>
                        </div>
                    </div>
                </div> -->
            <!-- </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a> -->
        </div>
    </div>
    <!-- Carousel End -->
 
    <!--      les elements de la patisseries              -->

    <div class="container mt-5">
        <h1>Une pâtisserie unique pour votre événement</h1>
        <p class="text">
            ROYALTASTE, c’est la passion de la pâtisserie et l’envie de gourmandises de saison.
             Chaque gâteau est conçu et réalisé artisanalement, selon vos besoins et vos envies.
        </p>
        <p class="text">
            Nous vous proposons des pâtisseries sur mesure pour chaque moment fort de votre vie privée ou professionnelle 
        </p>
        
        <div class="raw d-flex mt-5">

            <div class="menu mt-5 col-6 ">
                <ul>
                    <li> mariage,</li>
                    <li>anniversaire,</li>
                    <li> événement religieux,</li>
                    <li> baby shower,</li>
                    <li> lancement de produit,</li>
                    <li>départ en retraite,</li>
                    <li> …</li>
                </ul>
            </div>
            <div class="col">
                <img src="./asset/img/gateau-fraise.jpg" class="fraise" alt="">
            </div>
          </div>



    <!-------------------------------- galerie patisserie ------------------------>

    <div class=" mt-2"> 
        <div class="galerie-patisserie text-center">
          <div class="row align-items-start">
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/babyshower.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Babyshower</h5>
                </div>
              </div>
            </div>
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/biscut.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Super biscuts</h5>
                </div>
              </div>
            </div>
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/foret-noir.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Forêt noir</h5>
                </div>
              </div>
            </div>
          </div>
      </div>

      <div class=" mt-2"> 
        <div class="galerie-patisserie text-center">
          <div class="row align-items-start">
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/gateau-enfant.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Gâteau-enfant</h5>
                </div>
              </div>
            </div>
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/happy-birthday-chocolat.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Happy birthday</h5>
                </div>
              </div>
            </div>
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/happy1.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Gâteau de saison</h5>
                </div>
              </div>
            </div>
          </div>
      </div>

      <div class=" mt-2"> 
        <div class="galerie-patisserie text-center">
          <div class="row align-items-start">
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/chantily.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Gâteau-adulte</h5>
                </div>
              </div>
            </div>
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/cupcak2.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CupCake</h5>
                </div>
              </div>
            </div>
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/four.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Petit Four</h5>
                </div>
              </div>
            </div>
          </div>
      </div>

    </div>
    <a href="{{route('commandez')}}" class="btn-commande btn btn-primary py-md-3  px-md-5 mt-2">Commander</a>
    </div>

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