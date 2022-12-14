<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYALTASTE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="./asset/css/style.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/css.min.css" rel="stylesheet">
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
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./asset/img/acceuil.webp" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditionelle & Delicieuse</h4>
                            <h1 class="display-3 text-white mb-md-4">Une Patisserie proche de vous</h1>
                            <a href="{{route('commandez')}}" class="btn btn-primary py-md-3 px-md-5 mt-2">Commander</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./asset/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Une Patisserie proche de vous</h4>
                            <h1 class="display-3 text-white mb-md-4">Made From ROYALTASTE</h1>
                            <a href="{{route('commandez')}}" class="btn btn-primary py-md-3 px-md-5 mt-2">Commander</a>
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


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">BOUTIQUE EN LIGNE</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">ROYALTASTE</h4>
                    <h5 class="text-muted mb-3">Commander vos g??teaux sur mesure pour vos ??v??nements special</h5>
                    <p>La passion de la p??tisserie et l???envie de gourmandises de saison. </p>
                    <p>Livraison partout ?? lom?? et ses environs ?? partir de 1000f</p>
                    
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="./asset/img/gateau-fraise.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">NOS PRODUITS</h4>
                    <p>Venez d??couvrir notre gamme de g??teaux au coeur cr??meux et nos cakes intens??ment parfum??s au citron ou au chocolat.</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>G??teau de mariage</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>G??teau d'anniversaire</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>G??teau personnaliser</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Box Cake</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Cupcake</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Mousse au chocolat</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>etc..</h5>
                    <a href="{{route('commandez')}}" class="btn btn-primary mt-2">Commander</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Promotion Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="./asset/img/black-forest-.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                        style="width: 100px; height: 100px;">
                        <h3 class="font-weight-bold text-secondary mb-0">Commander ?? partir de 6500f</h3>
                    </div>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">Chocolat- Vanille-Fraise</h3>
                    <p class="text-white mb-4">Toutes les saveurs disponible juste pour r??pondre a vos b??soins et celle de vos petits enfants</p>
                    <a href="{{route('commandez')}}" class="btn btn-secondary py-3 px-5 mt-2">Commander</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Les meilleurs services que nous offrons ?? nos clients</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class=""> 
                            <div class="boutique-ligne text-center">
                              <div class="row align-items-start">
                                <div class="bv col">
                                  <div class="card" style="width: 18rem;">
                                    <img src="./asset/img/mousse-mangue.jpg" class="card-img-top p-2" height="300" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">G??teau mousse mangue</h5>
                                      <p class="card-text">Commandez vos g??teau ?? partir de 6500F.</p>
                                      <a href="{{route('commandez')}}" class="btn btn-primary">commandez</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="bv col">
                                  <div class="card" style="width: 18rem;">
                                    <img src="./asset/img/black-forest-.jpg" class="card-img-top p-2" height="300" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">For??t noir</h5>
                                      <p class="card-text">For??t noir ?? la chantily <br> 25000f/35000f</p>
                                      <a href="{{route('commandez')}}" class="btn btn-primary">commandez</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="bv col">
                                  <div class="card" style="width: 18rem;">
                                    <img src="./asset/img/muffin.jpg" class="card-img-top p-2" height="300" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Cup cake</h5>
                                      <p class="card-text">Cup cake<br>
                                       3500f(6)</p>
                                      <a href="{{route('commandez')}}" class="btn btn-primary">commandez</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      
                      
                           <div class="boutique-ligne text-center mt-5">
                            <div class="row align-items-center">
                              <div class="bv col">
                                <div class="card" style="width: 18rem;">
                                  <img src="./asset/img/chantily.jpg" class="card-img-top p-2" height="300" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title">happy birthday </h5>
                                    <p class="card-text"> G??teau pour adule <br> 20000f/25000f</p>
                                    <a href="{{route('commandez')}}" class="btn btn-primary">commandez</a>
                                  </div>
                                </div>
                              </div>
                              <div class="bv col">
                                <div class="card" style="width: 18rem;">
                                  <img src="./asset/img/dessert.jpg" class="card-img-top p-2" height="300" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title">Mousse au chocolat</h5>
                                    <p class="card-text">Mousse au chocolat <br> 1500f/2500f</p>
                                    <a href="{{route('commandez')}}" class="btn btn-primary">commandez</a>
                                  </div>
                                </div>
                              </div>
                              <div class="bv col">
                                <div class="card" style="width: 18rem;">
                                  <img src="./asset/img/happy-birthday-4433123_1920.jpg" class="card-img-top p-2" height="300" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title">G??teau de marriage</h5>
                                    <p class="card-text">Personaliser vos g??teaux en fonction de vos budjet</p>
                                    <a href="{{route('commandez')}}" class="btn btn-primary">commandez</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                            
                         </div>
                      
                          <!--------------------------------   notre service traiteur    ------------------------>
                      
                      
                         <div class="partie2 d-flex mt-5 ">
                           <div class="imge-traiteur">
                             <img src="./asset/img/buffet-6329757_1920.jpg" class="taiteur" width="700" alt="">
                           </div>
                           <div class="text-partie2">
                             <p>Nous vous accompagnons ??galement pour tous vos diff??rents ??v??nements d???un buffet compl??t et d'un dessert gourmand.</p>
                           </div>
                         </div>
                         <a href="{{route('formulaire')}}" class="btn-reserve btn-secondary commander-traiteur fs-1 px-3">R??s??rvez nos services</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Ils parlent de Nous</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">"Je tenais ?? vous remercier, les g??teaux ??tait magnifiques et d??licieux.
                                Une v??ritable surprise, ma m??re ??tait tr??s contente et ??mue.
                                Encore merci, je vous re-contacterais pour un futur ??v??nement."</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-1.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Sophie</h5>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Je recommande vivement cake design by annie Kone.
                                 A plusieurs reprise nous somme pass?? par elle pour les anniversaires des enfants jamais d????u g??teau aussi beau que bon.
                                 Une vrai merveille pour les yeux et les papilles</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-2.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Lydie Rose</h5>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">"Un tr??s grand merci pour votre g??teau qui ??tait magnifique et qui a fait un sacr?? effet pour 
                                l'anniversaire de Th??a!!Vraiment un grand Bravo...tr??s beau et tr??s bon...la framboise c'??tait parfait!!A bient??t!"
                                "Un tr??s grand merci pour votre g??teau qui ??tait magnifique et qui a fait un sacr?? effet pour l'anniversaire de Th??a!!Vraiment 
                                un grand Bravo...tr??s beau et tr??s bon...la framboise c'??tait parfait!!A bient??t!"</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-3.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Gwladys</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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
                            <p class="mb-2">Vakpossito fish <br> Lom??-Togo</p>
                            <p class="mb-0"><br>Tel: 00228 92339749 <br> 00228 97270517</p></p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">HORAIRE</h5>
                            <p class="mb-2">Lundi ??? Samedi, 09h ??? 19h</p>
                            <p class="mb-0">Dimanche, 09h - 21H </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0"> Copyright ?? 2022</p>
                    
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