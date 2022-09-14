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
          <div class="icon-contact d-flex">
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
      </div>
    </nav>
    </div>

  <!-------------------------------- fin navbar ------------------------>

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
                            <form action="commandez" method="post">
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
                                <div class="souscrire form-button mt-3">
                                    <button id="submit" type="submit" class="btn">Envoyer</button>
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