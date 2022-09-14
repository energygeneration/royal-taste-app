<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>patisserie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/css/style.css">
  </head>

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
    
    <div class="image-acceuil">
    <div class="tille-acceuil">
     <div class="formule-acceuil">
      <p class="text-light welcom ">WELCOME TO ROYALTASTE</p>
      <p class="text-light welcom ">Ouvert du mardi à samedi de 10h à 19h <br>
             Les dimanches de 10h à 20h</p>
     </div>
    </div>
    </div>

<!----------------     boutique en ligne      ---------->


    <div class="container">
      <div class="raw d-flex mt-5">
        <div class="col apropos">
            <p>ROYAL TASTE, c’est la passion de la pâtisserie et l’envie de gourmandises de saison.
              Nos ingrédients préférés: Les fruits, les fleurs et le chocolat, dont les couleurs 
              et les goûts se déclinent à l’envie pour donner une touche 
              de poésie et de légèreté à votre dessert ! </p>
        </div>
        <div class="col">
            <img src="./asset/img/gateau-fraise.jpg" class="fraise" alt="">
        </div>
      </div>
      <h1 class="mt-5 text-center">BOUTIQUE EN LIGNE</h1>
      <p class="justify-content-start gamme-gateau">
        Venez découvrir notre gamme de gâteaux au coeur crémeux et nos cakes intensément parfumés au citron ou au chocolat.
      </p>
      <p class="gamme-gateau">
        Commander votre gâteau sur mesure pour un événement special
      </p>
     

     <!--------------------------------     les gateau a commander         ------------------------>

    <div class=""> 
      <div class="boutique-ligne text-center">
        <div class="row align-items-start">
          <div class="bv col">
            <div class="card" style="width: 18rem;">
              <img src="./asset/img/mousse-mangue.jpg" class="card-img-top p-2" height="300" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gâteau mousse mangue</h5>
                <p class="card-text">Commandez vos gâteau à partir de 6500F.</p>
                <a href="{{route('commandez')}}" class="btn">commandez</a>
              </div>
            </div>
          </div>
          <div class="bv col">
            <div class="card" style="width: 18rem;">
              <img src="./asset/img/black-forest-.jpg" class="card-img-top p-2" height="300" alt="...">
              <div class="card-body">
                <h5 class="card-title">Forêt noir</h5>
                <p class="card-text">Forêt noir à la chantily <br> 25000f/35000f</p>
                <a href="{{route('commandez')}}" class="btn">commandez</a>
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
                 <a href="{{route('commandez')}}" class="btn">commandez</a>
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
              <p class="card-text"> Gâteau pour adule <br> 20000f/25000f</p>
              <a href="{{route('commandez')}}" class="btn">commandez</a>
            </div>
          </div>
        </div>
        <div class="bv col">
          <div class="card" style="width: 18rem;">
            <img src="./asset/img/dessert.jpg" class="card-img-top p-2" height="300" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mousse au chocolat</h5>
              <p class="card-text">Mousse au chocolat <br> 1500f/2500f</p>
              <a href="{{route('commandez')}}" class="btn">commandez</a>
            </div>
          </div>
        </div>
        <div class="bv col">
          <div class="card" style="width: 18rem;">
            <img src="./asset/img/happy-birthday-4433123_1920.jpg" class="card-img-top p-2" height="300" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gâteau de marriage</h5>
              <p class="card-text">Personaliser vos gâteaux en fonction de vos budjet</p>
              <a href="{{route('commandez')}}" class="btn">commandez</a>
            </div>
          </div>
        </div>
      </div>
     </div>
      
   </div>

    <!--------------------------------   notre service traiteur    ------------------------>


   <div class="d-flex mt-5 partie2">
     <div class="imge-traiteur">
       <img src="./asset/img/buffet-6329757_1920.jpg" width="700" alt="">
     </div>
     <div class="text-partie2">
       <p>Nous accompagnons également votre événement d’entreprise d’un buffet complet et des desserts gourmands.</p>
     </div>
   </div>
   <a href="{{route('formulaire')}}" class="btn reserver">reservez nos services</a>
   
</div>
   
<!-------------------------------- footer debut------------------------>

 <!-------------------------------- formulaire d'inscription ------------------------>

<div class="nos-actualités container-fluid">
  <div class="container">
    <h1 class="color-actu text-center p-3 actualite-titre">NOS ACTUALITÉS</h1>
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
  <div class="raw royaltast pt-5 d-flex">
    <div class="col-3 slogan">
      <h5 class="text-light">ROYALTAST pous realiser vos réves <br> et celle de vos petits enfants</h5>
      <div class="resau-socio mt-3   d-flex">
        <img src="./asset/img/Vector__2_-removebg-preview.png" alt="">
        <img src="./asset/img/Vector__3_-removebg-preview.png" class="ms-5" alt="">
      </div>
    </div>

    <div class="col-3 mt-3 contact">
      <h3 class=" test-color"> <span class="trait">NOUS CONT</span>ACTER</h3>
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