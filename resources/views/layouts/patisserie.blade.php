<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>patisserie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/css/patisserie.css">
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
    
    
      
<!--      patisserie acceuil               -->
 
    <div class=" patisserie-img-acceuil">
        <div class="tille-acceuil">
         <div class="formule-acceuil">
          <p class="text-light ">WELCOME TO ROYALTASTE</p>
          <p class="text-light welcom ">Ouvert du mardi à samedi de 10h à 19h <br>
             Les dimanches de 10h à 20h</p>
         </div>
        </div>
        </div>
    </div>
 
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

            <div class=" mt-5 col-6 menu">
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
                  <h5 class="card-title">gateau-enfant</h5>
                </div>
              </div>
            </div>
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/biscut.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/foret-noir.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
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
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/happy-birthday-chocolat.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/happy1.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
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
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/cupcak2.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="bv col">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/four.jpg" class="card-img-top p-2" height="300" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
          </div>
      </div>

    </div>
       <button type="submit" class="btn souscrire ">commandez</button>
    </div>

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
        <h5 class="text-light">ROYALTASTE pous realiser vos réves <br> et celle de vos petits enfants</h5>
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