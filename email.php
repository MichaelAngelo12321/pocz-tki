<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styl_mail.css">
    
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
          <a class="nav-link  active" href="email.php">Pomoc techniczna</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Kartki do wyboru
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item " href="kartki_swiateczne.php">Świąteczne</a></li>
            <li><a class="dropdown-item " href="kartki_wielkanocne.php">Wielkanocne</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item " href="kartki_sylwestrowe.php">Sylwestrowe</a></li>
            <li><a class="dropdown-item" href="kartki_urodzinowe.php">Urodzinowe</a></li>
          </ul>
        </li>
       
      </ul>
    
    </div>
  </div>
</nav>
</header>
  <h2>OPISZ SWÓJ PROBLEM</h2>
  
<form class="page" method="POST">

  <label class="field field_v1">
    <?php

    if(isset($_SESSION['logowanie'])){
    $x = $_SESSION['logowanie']; 
    include('main.inc');
     $sql = "SELECT*FROM uzytkownicy WHERE login = '$x'";
      $wynik = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_row($wynik)) {
        echo "<input type='text' name='nazwa' class='field__input' value = $row[2] readonly>";
    }
   
    }
    else{
      echo "<input type='text' name='nazwa' class='field__input' placeholder='poczta@wp.pl'>";
    }
    ?>
    <span  class="field__label-wrap">
      <span  class="field__label">Od</span>
    </span>
  </label>
  <label class="field field_v2">
    <input name="odbiorca" class="field__input" placeholder="poczta@wp.pl" value="adrian.zs1@wp.pl" readonly>
    <span class="field__label-wrap">
      <span class="field__label">do</span>
    </span>
  </label>    
  <label class="field field_v3">
    <input name="temat" class="field__input" placeholder="temat">
    <span class="field__label-wrap">
      <span class="field__label">temat</span>
    </span>
  </label>
  
  <label class="field field_v4">
  <textarea name="tresc" class="field__input" placeholder="Napisz coś" ></textarea>
    <span  class="field__label-wrap">
      <span  class="field__label">Napisz coś</span>
    </span>
  </label>

 
<div class="linktr">
<button type="submit" name="s1" class="btn">wyślij</button>

</div>

</form>
<?php




if(isset($_POST['s1'])){

include('wyslij.php');

mailKonto();

}
?>
</body>
</html>