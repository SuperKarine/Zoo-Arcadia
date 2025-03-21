<?php
echo "Moi,Karine";
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


<p class="h1">LAISSEZ UN AVIS</p>
<p class="h2">Formulaire</p>


<div class="form-floating mb-3">
    <input type="name" class="form-control" id="floatingInput" placeholder="name">
    <label for="floatingInput">Name</label>
  </div>
<div class="form-floating mb-3">
    <input type="name" class="form-control" id="floatingInput" placeholder="surname">
    <label for="floatingInput">Surname</label>
  </div>

  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
  </div>
  

  <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
  </div>



  <div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
    <label for="floatingTextarea">Comments</label>
  </div>
    

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

