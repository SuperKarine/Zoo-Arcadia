<?php
opcache_reset();
echo "OPCache has been reset at " . date("H:i:s");
?>








<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Main css 
    <link rel="stylesheet" href="css/index.css">-->
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Zoo Arcadia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Accueil">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Services">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Habitats">Habitats</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Avis">Avis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact">Contact</a>
          </li>
        
       
      </ul>
      <div class="d-flex">
      <div class="btn-group">
  <a href="inscription.php" class="btn btn-primary">Créer un compte </a>
  <a href="login.php" class="btn btn-success">Se connecter</a>
</div>  
    </div>
    </div>
  </div>
</nav>
<div class="d-flex justify-content-center">
<div class="alert alert-primary w-30 " role="alert" >
  Vous n'avez pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a> maintenant!
</div>
</div>

<img src="assets/images/Animaux/image1.jpg" class="img-fluid" style="width: 1444px; height: 386px;" alt="image zèbres" >

<img src="assets/images/Animaux/image8.jpg" class="img-thumbnail" style="width: 512px; height: 272px;" alt="image zèbres" >
<img src="assets/images/Animaux/Logo restauration 4.jpg/" class="img-thumbnail" style="width: 98px; height: 89px;" alt="Logo restauration">
<img src="assets/images/Animaux/Guide touriste 4.jpg" class="img-thumbnail" style="width: 98px; height: 89px;" alt="Logo restauration">
<img src="assets/images/Animaux/Logo train 4.jpg" class="img-thumbnail" style="width: 92px; height: 74px;" alt="Logo train">
<img src="assets/images/Animaux/SERVICES.jpg" class="img-thumbnail" style="width: 98px; height: 89px;" alt="Services">

<img src="assets/images/Animaux/image36.jpg" class="img-thumbnail" style="width: 512px; height: 272px;" alt="Flamants rose">

<select class="form-select" aria-label="Default select">
    <option selected="">Animaux</option>
    <option value="1">Bakari</option>
    <option value="2">Kaya</option>
    <option value="3">Zala</option>
    <option value="4">Fara</option>
    <option value="5">Goro</option>
    <option value="6">Moba</option>
    <option value="7">Nara </option>
    <option value="8">Niko</option>
    <option value="9">Lula</option>
    <option value="10">Rano</option>
    <option value="11">Bolou</option>
    <option value="12">Griffo</option>
    <option value="13">Koko</option>
    <option value="14">Lula </option>
    <option value="15">Swampi</option>
    <option value="16">Zara</option>
    <option value="17">Dito</option>
    <option value="18">Kopa</option>
    <option value="19">Fipo</option>
    <option value="20">Noko</option>
    <option value="21">Tali </option>
    <option value="22">Goba</option>
    <option value="23">Rafiki</option>
    <option value="24">Rima</option>
    <option value="25">Tambo </option>
    <option value="26">Maki </option>
    <option value="27">Lolo </option>
    <option value="28">Jaro</option>
    <option value="29">Kira </option>
    <option value="30">Nabo</option>
    <option value="31">Nao</option>
    <option value="32">Sambo</option>
    <option value="33">Zulu</option>
    <option value="34">Oki </option>
  </select>

  <select class="form-select" aria-label="Default select">
    <option selected="">Habitats</option>
    <option value="1">Savane</option>
    <option value="2">Jungle</option>
    <option value="3">Marais</option>
  </select>

  <select class="form-select" aria-label="Default select">
    <option selected="">Services</option>
    <option value="1">Restauration</option>
    <option value="2">Guide touristique</option>
    <option value="3">Train</option>
  </select>

<h1>Laissez un Avis</h1>
<h2>Formulaire pour Avis</h2>

<div class="media">
    <img class="align-self-center mr-3" src=".../64x64" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0">Avis</h5>
      <p>J’ai passé une journée incroyable au Zoo Arcadia ! L’endroit est magnifiquement entretenu, et chaque habitat semble conçu pour le bien-être des animaux, ce qui est vraiment rassurant. On peut voir des animaux du monde entier, et les enclos sont spacieux et bien aménagés pour chaque espèce.</p>
      
    </div>
  </div>

  <div class="media">
    <img class="align-self-center mr-3" src=".../64x64" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0">Notation Avis</h5>
     
    </div>
  </div>

  <!--Footer-->
  
  <div class="card text-white bg-secondary mb-3" style="width:1440px; height: 350px;">
    <div class="card-header">Arcadia</div>
    <div class="card-body">
      <h5 class="card-title">Contact</h5>
      <p class="card-text">Zoo ARCADIA <br> Parc de la Biodiversité <br> 123 route de la Faune <br> Bretagne, France <br> jose.josette@gmail.com
    </p>
    </div>
  </div>
  



    <!-- JS 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
