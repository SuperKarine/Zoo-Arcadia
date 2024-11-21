<!DOCTYPE html>
<html lang="en">
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





  <select class="form-select" aria-label="Default select">
    <option selected="">Services</option>
    <option value="1">Restauration</option>
    <option value="2">Guide touristique</option>
    <option value="3">Train</option>
  </select>

  <select class="form-select" aria-label="Default select">
    <option selected="">Restauration</option>
    <option value="1">Terre et Saveurs</option>
    <option value="2">Fuego Verde</option>
    <option value="3">Nippon Fusion</option>
  </select>

  <select class="form-select" aria-label="Default select">
    <option selected="">Habitats</option>
    <option value="1">Savane: La Plaine Dorée</option>
    <option value="2">Jungle: Le Récif d'Emeraude</option>
    <option value="3">Marais: Les Rivages Brumeux</option>
  </select>

  <select class="form-select" aria-label="Default select">
    <option selected="">Visite du Zoo en petit train</option>
    <option value="1">Savane</option>
    <option value="2">Jungle</option>
    <option value="3">Marais</option>
  </select>

  <p>Découvrez une expérience immersive au cœur de la faune sauvage avec nos visites guidées des habitats, profitez d'un délicieux repas dans notre restaurant, et explorez tout le parc confortablement installé à bord de notre petit train.</p>

  <br>
  <br>

  <div class="card">
    <div class="row g-0">
      <div class="col-5 col-sm-4">
        <img src="assets/images/Animaux/Logo restauration 4.jpg" class="img-fluid w-100" alt="Logo restauration">
      </div>
      <div class="col-7 col-sm-8">
        <div class="card-body">
          <h5 class="card-title">Restauration</h5>
          <p class="card-text">Nos restaurants vous offrent une pause gourmande au cœur de votre aventure au zoo. Que vous préfériez un repas rapide ou un déjeuner convivial, nos menus variés raviront petits et grands. Profitez de nos terrasses ensoleillées pour savourer des plats préparés avec des ingrédients frais et locaux, tout en admirant la vue sur les paysages naturels du parc.</p>
         
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="row g-0">
      <div class="col-5 col-sm-4">
        <img src="assets/images/imagesHabitats/Habitats Savane.jpeg" class="img-fluid w-100" alt="Habitats Savane">
      </div>
      <div class="col-7 col-sm-8">
        <div class="card-body">
          <h5 class="card-title">Habitats</h5>
          <p class="card-text">Explorez des habitats soigneusement reconstitués qui recréent les environnements naturels des animaux du monde entier. Chaque espace vous plonge dans un écosystème unique, offrant une expérience immersive et éducative pour toute la famille.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="row g-0">
      <div class="col-5 col-sm-4">
        <img src="assets/images/Animaux/image37.jpg" class="img-fluid w-100" alt="Flamants rose">
      </div>
      <div class="col-7 col-sm-8">
        <div class="card-body">
          <h5 class="card-title">Le Zoo</h5>
          <p class="card-text">Découvrez un monde fascinant au cœur de notre zoo, où des espèces exotiques et locales cohabitent dans des environnements naturels recréés avec soin. Une aventure inoubliable pour petits et grands, mêlant découverte, apprentissage et émerveillement.</p>
          
        </div>
      </div>
    </div>
  </div>



   <!-- JS 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
