<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="rejestracja.css">
</head>
<body>
    <header>
    <h1>Rejestracja zakończona pomyślnie możesz się zalogować</h1>
</header>
<div class="wrapper">
    <form method="POST">
       <div class="group"><input type="text" name="pole1"  required="required" /><span class="highlight"></span><span class="bar"></span><label>Login</label></div>
       <div class="group"><input type="password" name="pole2"   required="required" /><span class="highlight"></span><span class="bar"></span><label>Hasło</label></div>
        <div class="btn-box"><button class="btn btn-submit" name="s1" type="submit">Zaloguj</button>
        </div>
       </form>
<?php

if(isset($_POST['s1'])){

include('main.inc');
$a = $_POST['pole1'];
$_SESSION['logowanie'] = $a;
$b = $_POST['pole2'];
$sql = "SELECT*FROM uzytkownicy WHERE login = '$a' AND haslo = '$b'";
$wynik = mysqli_query($connect, $sql);    
if(mysqli_num_rows($wynik) >=1){
          
    header('location:zalogowany.php');
    }else{
      echo '<h1>błędny login lub hasło</h1>';
    } 


}


?>
       
</div>
</body>
</html>