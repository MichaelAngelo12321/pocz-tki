
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
    <h1>Rejestracja</h1>
</header>
<div class="wrapper">
    <form action="rejestracja.php" method="POST">
       <div class="group"><input type="text" name="pole1"  required="required" /><span class="highlight"></span><span class="bar"></span><label>Login</label></div>
        <div class="group"><input type="text" name="pole2"  required="required" /><span class="highlight"></span><span class="bar"></span><label>Email</label></div>
        <div class="group"><input type="password" name="pole3"   required="required" /><span class="highlight"></span><span class="bar"></span><label>Hasło</label></div>
        <div class="group"><input type="password"  name="pole4" required="required" /><span class="highlight"></span><span class="bar"></span><label>Powtórz hasło</label></div>
        <div class="btn-box"><button class="btn btn-submit" name="s1" type="submit">Zarejestruj</button><button class="btn btn-cancel" type="submit" name="s2">anuluj</button>
        </div>
       </form>
       
<?php
 if(isset($_POST['s2'])){
    header('location:index.php');
  }

  


  
     
if(isset($_POST['s1'])){
include('main.inc');
 Global $a, $b, $c, $d;
$a = $_POST['pole1'];
$b = $_POST['pole2'];
$c = $_POST['pole3'];
$d = $_POST['pole4'];
$ssql = mysqli_query($connect, "SELECT*FROM uzytkownicy WHERE login = '$a'");  
if($d != $c){
    echo '<h1>hasła muszą być takie same</h1>';
}else if(mysqli_num_rows($ssql) >= 1){
echo '<h1>login juz jest zajety</h1>';
}else{
$sql = "INSERT INTO uzytkownicy('imie', 'nazwisko', 'email') VALUES('$a', '$b', '$c')";
$wynik = mysqli_query($connect, $sql); 
header('location: logowanie.php');
    }

}
  
 

?>
       
</div>
</body>
</html>