<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartki.pl</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styl.css">
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
          <a class="nav-link active" aria-current="page" href="#">Strona Głowna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="email.php">Pomoc techniczna</a>
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
      <?php
    
      echo '<p>Witaj: '.$_SESSION['logowanie'].'<p>';
     if(isset($_POST['s1'])){
      unset($_SESSION['logowanie']);
      header('location: index.php');
      }
    ?>

      <form method="POST" class="d-flex">
    <button type="submit" name="s1" class="btn">wyloguj</button>
    </form>
    
    </div>
  </div>
</nav>
</header>
<div class="container">
    <div class="row">
     
        <div class="col-sm-12 col-md-6">
            <h1>O NAS</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nisi earum quod. Voluptatibus deserunt porro suscipit consequuntur explicabo excepturi similique, cupiditate numquam sed aperiam molestias accusamus et ea exercitationem veritatis vero, harum officiis totam laborum placeat repudiandae culpa. Voluptates, maxime quaerat eligendi nam unde hic, illo, eos libero sunt cupiditate ipsa delectus consequatur cumque modi nobis. Perspiciatis itaque corrupti ea vero labore esse reiciendis ratione sapiente facere veniam amet sint possimus delectus laborum necessitatibus perferendis libero recusandae aut, dolore error nam id expedita. Dolor illum iste, odit molestiae quidem id eaque iusto cupiditate aliquid, eum nesciunt doloribus cum accusamus illo, vel culpa ipsam modi dolorem! Nam dicta aut maxime, blanditiis perspiciatis corrupti. Voluptatem enim fugiat tempore neque adipisci reiciendis tempora sunt nostrum, eaque esse odio libero ab ratione commodi? A itaque nulla culpa molestias distinctio tempora? Ab, nam culpa vero ipsam dolores pariatur officia eum iusto quod ipsum suscipit obcaecati voluptatum voluptatibus repudiandae magni sunt tempora deserunt voluptates dolor beatae alias ullam placeat? Facilis suscipit perspiciatis, molestias qui asperiores optio beatae, saepe tempora corrupti ab debitis? Asperiores odit nemo magni eligendi quos obcaecati aut numquam id molestias est, laboriosam sapiente corrupti modi, rerum aperiam quae nisi eum magnam dignissimos nam.
           </p>
        </div>
        <div class="col-sm-12 col-md-6 ab">
            <h1>Gdzie znajduje się nasza siedziba</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9440.557590945707!2d18.926481!3d53.733592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd2d28c0366959ef1!2zWmVzcMOzxYIgU3prw7PFgiBuciAxIGltLiBTLiBTdGFzemljYQ!5e0!3m2!1spl!2spl!4v1638356433437!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-sm-12">
        
        <figure>
          <a href="#"><img src="twarz.png" alt="Adrian Kemski"></a>
          <figcaption>Twórca strony: Adrian Kemski</figcaption>
        </figure>

    </div>

    </div>
</div>






</body>
</html>