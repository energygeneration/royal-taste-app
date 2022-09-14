<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>patisserie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/formulaire.css">
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

    <div class="form-img-acceuil">
    <div class="tille-acceuil">
     <div class="formule-acceuil">
      <p class="text-light ">WELCOME TO ROYALTAST</p>
      <p class="text-light welcom ">Ouvert du mardi à samedi de 10h à 19h <br>
             Les dimanches de 10h à 20h</p>
     </div>
    </div>
    </div>


  <!-------------------------------- fin navbar ------------------------>

    <!-- Formulaire -->
    <div class="form-postulant" id="form-inscription">

        <div class="container h-100 w-100">
            <div class="row-formulaire">
                <div class="col-md-7 mx-auto">
                    <h3 class="text-center fw-bold mt-5 mb-4 ">Remplissez le formulaire pour reserver nos services</h3>
                    <div class="card w-100">
                        <div class="card-header  bg-primary">
                            <h4 class="text-center">Réservez ici!</h4>
                        </div>
                        <div class="card-body">
                            <form action="formulaire" method="post">
                              @csrf
                                <div class=".form-control mb-3">
                                    <label for="InputName" class="form-label">Votre nom</label>
                                    <input type="text" name="nom" class="form-control" id="InputName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputFirstName" class="form-label">Votre Prénom</label>
                                    <input type="text" name="prenom" class="form-control" id="InputFirstName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputEmail" class="form-label">Votre email</label>
                                    <input type="email" name="email" class="form-control" id="InputEmail" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputNumberWhatsap" class="form-label">Votre numéro de téléphone</label>
                                    <input type="number" name="telephone" class="form-control" id="InputNumberWhatsap" required>
                                </div>
                                <select class="form-control" aria-label="Default select example" name="events">
                                  <option selected>Type d'événement</option>
                                  <option value="Mariage">Mariage</option>
                                  <option value="Anniversaire">Anniversaire</option>
                                  <option value="Baptème">Baptème</option>
                                </select>
                                <div class="mb-3">
                                    <label for="InputNumberWhatsap" class="form-label">Nombre de personnes</label>
                                    <input type="number" name="numberperson" class="form-control" id="InputNumberWhatsap" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputNumberWhatsap" class="form-label">Votre budget</label>
                                    <input type="number" name="budget" class="form-control" id="InputNumberWhatsap" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputNumberWhatsap" class="form-label">Votre message</label>
                                    <input type="text" name="message" class="form-control" id="InputNumberWhatsap" required>
                                </div>
                              
                                <div class="souscrire form-button mt-3">
                                    <button id="submit" type="submit" class="btn">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p>
                       NB: Nos services sont a partir de 10 personnes
                    </p>
                </div>
            </div>
            
            
            
        </div>

       
    </div>
    <!-- Formulaire -->

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
 <!-------  fin footer---------->


   
      
 


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>