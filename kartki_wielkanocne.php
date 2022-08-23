<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wielkanocne</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="kartki.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-kartki">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kartki.pl</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <?php
          if(!isset($_SESSION['logowanie'])){
         echo "<a class='nav-link' aria-current='page' href='index.php'>Strona Główna</a>";
        }else{
          echo "<a class='nav-link' aria-current='page' href='zalogowany.php'>Strona Główna</a>";
        }
          ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="email.php">Pomoc techniczna</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Kartki do wyboru
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item " href="kartki_swiateczne.php">Świąteczne</a></li>
            <li><a class="dropdown-item active" href="kartki_wielkanocne.php">Wielkanocne</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="kartki_sylwestrowe.php">Sylwestrowe</a></li>
            <li><a class="dropdown-item" href="kartki_urodzinowe.php">Urodzinowe</a></li>
          </ul>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>
</header>
<h2>Kartki Wielkanocne</h2>
<div class="container">


  <div class="row">

    <div class="col-md-6 col-sm-12">
    <figure>
          <a href="email1.php?d1"><img src="wielkanocne/kartka1.jpg" alt="Kartka1"></a>
          <figcaption>Kartka 1</figcaption>
        </figure>
    </div>
    <div class="col-md-6 col-sm-12">
    <figure>
    <a href="email1.php?d2"><img src="wielkanocne/kartka2.png" alt="Kartka2"></a>
          <figcaption>Kartka 2</figcaption>
        </figure>
    </div>
    <div class="col-md-6 col-sm-12">
    <figure>
    <a href="email1.php?d3"><img src="wielkanocne/kartka3.gif" alt="Kartka3"></a>
          <figcaption>Kartka 3</figcaption>
        </figure>
    </div>
    <div class="col-md-6 col-sm-12">
      
    <figure>
    <a href="email1.php?d4"><img src="wielkanocne/kartka4.jpg" alt="Kartka4"></a>
          <figcaption>Kartka 4</figcaption>
        </figure>
     
    </div>
    
  </div>
 
  
</div>


</body>
</html>