<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>patisserie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/css/traiteur.css">
    <link rel="stylesheet" href="./asset/css/style.css">
  </head>
  <body>

 <!-------------------------------- navbar ------------------------>
 <body>
    <div class="header">
      <div class="header-color d-flex">
        <div class="contact">
          <div class="icon-contact d-flex p-2">
            <img src="./asset/img/Vector__1_-removebg-preview.png" alt="">
            <div><p class="text-light">00228 92339749</p></div>
          </div>
        </div>
        <div class="email">
          <div class="icon-contact d-flex">
            <img src="./asset/img/fontisto_email-removebg-preview.png" alt="">
            <div><p class="text-light"><p class="text-light">mail@domaine.com</p></div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><span>ROYAL</span><span class="tast">TASTE</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="{{route('index')}}">Acceuil</a>
            <a class="nav-link" href="{{route('patisserie')}}">Patisserie</a>
            <a class="nav-link" href="{{route('traiteur')}}">Service traiteur</a>
            <a class="nav-link"  href="{{route('formulaire')}}">Commander en ligne </a>
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </div>
        </div>
      </div>
    </nav>
    

    <!--      traiteur acceuil               -->

    <div class="traiteur-img-acceuil ">
        <div class="tille-acceuil">
         <div class="formule-acceuil">
          <p class="text-light ">WELCOME TO ROYALTAST</p>
          <p class="text-light ">Ouvert du mardi a dimanche
            de 10h a 19h</p>
         </div>
        </div>
        </div>
    </div>

    <div class="container">
        <h3 class="mt-5">Un traiteur de qualité pour vous satisfaire 
            a tout moment</h3>
        <div class="raw img-patisserie mt-5 d-flex">
            <div class=" col-6 menu">
                <ul>
                    <li> Riz cantonnais</li>
                    <li>Riz créole</li>
                    <li> Pommes sablées</li>
                    <li>Navarin d’agneau</li>
                    <li> Filet de boeuf</li>
                    <li> Sandwichs</li>
                    <li>Hors d’oeuvre</li>
                    <li> salade</li>
                    <li> tarcos</li>
                    <li>etc...</li>
                </ul>
            </div>
            <div >
                <img src="./asset/img/traiteur3.jpg" class="sandwich" alt="">
            </div>

        </div > 
    </div>

    <div class=" raw d-flex mt-5 container" id="galerie-service">
        <div class="col-4">
            <img src="./asset/img/acceuil-traiteur.jpg" class="galerie-traiteur" width="400" alt="">
        </div>

        <div class="col-4">
            <img src="./asset/img/acceuil-traiteur.jpg" class="galerie-traiteur" width="400" alt="">
        </div>

        <div class="col-4">
            <img src="./asset/img/acceuil-traiteur.jpg" class="galerie-traiteur" width="400" alt="">
        </div>
    </div>

    <div class=" raw d-flex mt-5 container" id="galerie-service">
        <div class="col-4">
            <img src="./asset/img/acceuil-traiteur.jpg" class="galerie-traiteur" width="400" alt="">
        </div>

        <div class="col-4">
            <img src="./asset/img/acceuil-traiteur.jpg" class="galerie-traiteur" width="400" alt="">
        </div>

        <div class="col-4">
            <img src="./asset/img/acceuil-traiteur.jpg" class="galerie-traiteur" width="400" alt="">
        </div>
    </div>

     <!-------------------------------- footer debut------------------------>

 <!-------------------------------- formulaire d'inscription ------------------------>

<div class="nos-actualités container-fluid">
    <div class="container">
      <h1 class="color-actu text-center mt-5 actualite-titre">NOS ACTUALITÉS</h1>
      <div><p class="text-center mt-3 inscrivez">Pour recevoir nos actualités, inscrivez-vous ci-dessous</p></div>
  
      <form>
        <div class="form1 mb-3">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="votre nom">
         
        </div>
        <div class="mb-3">
          
          <input type="email" class="form-control" id="exampleInputPassword1" placeholder="votre email">
        </div>
        
        <button type="submit" class="btn souscrire ">s'inscrire</button>
      </form>
    </div>
  </div>
  
   <!-------------------------------- fin formulaire ------------------------>
  
  <div>
    <div class="raw royaltast d-flex">
      <div class="col-3 slogan">
        <h5 class="text-light">ROYALTAST pous realiser vos réves <br> et celle de vos petits enfants</h5>
        <div class="resau-socio mt-3   d-flex">
          <img src="./asset/img/Vector__2_-removebg-preview.png" alt="">
          <img src="./asset/img/Vector__3_-removebg-preview.png" class="ms-5" alt="">
        </div>
      </div>
  
      <div class="col-3 mt-3 contact">
        <h3 class=" test-color">NOUS CONTACTER</h3>
        <div class="d-flex mt-4">
          <img src="./asset/img/Vector__1_-removebg-preview copie.png" class="" width="20" height="20" alt="">
          <p class="text-light localisation">boutique
             vakpossito fish<br>
             lomé-togo</p>
        </div>
       <div class="d-flex">
        <img src="./asset/img/Vector__1_-removebg-preview.png" width="20" height="20" alt="">
        <p class="text-light localisation"> 00228 92339749 <br>
            00228 97270517
        </p>
       </div>
  
      </div>
  
      <div class="col-3  mt-3">
        <h3 class=" test-color">HORAIRES</h3>
        <p class="text-light  mt-4 jour">
          Du mardi au samedi de 10h à 19h.<br>
          Le dimanche de 10h à 20h.</p>
      </div>
  
      <div class="col-3 mt-3">
        <h3 class=" test-color">PAIEMENT SÉCURISÉ</h3>
      </div>
    </div>
  </div>
  <div class="copyrith">
    <p class="text-center ">Copyright © 2022</p>
  
  </div>
   <!----------------------        fin footer      ------------------------>
         
      
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>