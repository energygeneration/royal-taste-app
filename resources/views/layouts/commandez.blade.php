<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYALTASTE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css/patisserie.css">

    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/formulaire.css">

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
                        <h3 style="margin-top: 30px;"> <span class="text-secondary" >ROYAL</span><span style="color: #F195B2">TASTE</span></h3>
                        <a href="{{route('traiteur')}}" class="nav-item nav-link">Service traiteur</a>
                        <a href="{{ route('login') }}" class="nav-item nav-link ">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

      <!-- Formulaire -->
      <div class="form-postulant" id="form-inscription">

        <div class="container h-100 w-100">
            <div class="row-formulaire">
                <div class="col-md-7 mx-auto">
                    <h3 class="text-center fw-bold mt-5 mb-4 ">Remplissez le formulaire pour commandez nos délices</h3>
                    <div class="card w-100">
                        <div class="card-header bg-gradient">
                            <h4 class="text-center">Commandez ici!</h4>
                        </div>
                        <div class="card-body">
                            <form action="/commandez" method="POST">
                            @csrf
                                <div class=".form-control mb-3">
                                    <label for="InputName" class="form-label">Votre nom</label>
                                    <input type="text" name="nom" class="form-control" id="InputName" required>
                                </div>
                                <div class=".form-control mb-3">
                                    <label for="InputNumber" class="form-label">Votre numero de télephone</label>
                                    <input type="text" name="telephone" class="form-control" id="InputNumber" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputPrix" class="form-label">Prix du gâteaux</label>
                                    <input type="number" name="Prix" class="form-control" id="InputPrix" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputColor" class="form-label">couleur</label>
                                    <input type="text" name="color" class="form-control" id="InputColor" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputInscription" class="form-label">Inscription sur le gâteau</label>
                                    <input type="text" name="Inscription" class="form-control" id="InputInscription" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputDate" class="form-label">Date de livraison</label>
                                    <input type="date" name="Date" class="form-control" id="InputDate" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputLieu" class="form-label">Lieu de livraison</label>
                                    <input type="text" name="Lieu" class="form-control" id="InputLieu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputHeure" class="form-label">Heure de livraison</label>
                                    <input type="hour" name="Heure" class="form-control" id="InputHeure" required>
                                </div>
                                <div class="  mt-3">
                                <a href="" class="btn btn-primary py-3 px-5 mt-2">Envoyer</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

                     <!------- retrait et livraison ------------->

  
                    <div class="mt-5">
                       <p>
                         <h5>Retrait et livraison:</h5>   24h  minimum aprés votre commande vous serai livrez 
                                    ou vous passer cherchez la commande a la boutique.
                         </p>
                       <p>Si vous souhaitez commander en dehors de ce délai n’hézitez pas a nous
                                contactez.</p>
                    </div>

                    <p class="mt-5">
                        NB: Nos gâteaux sont a partir de 6500f et nos livraison a 1000f
                     </p>
            
            
            
            
        </div>

       
    </div>
    <!-- Formulaire -->

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