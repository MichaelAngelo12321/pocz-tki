<?php

function mailKonto(){
    
      ## żródła => https://github.com/PHPMailer/PHPMailer
# nadawca wpisz dane swojego konta email
include('host_mail.php');
$nazwa = $_POST['nazwa'];
$temat = $_POST['temat'];
$trescx = $_POST['tresc'];


# mail
$temat = $temat;
$tresc = $trescx;

# odbiorca
$mailO = 'adrian.zs1@wp.pl';
$nazwaO = $nazwa;

# sciezka do plików katalogu phpmailer - biblioteka
$sciezka = '.';

require_once($sciezka.'/phpmailer/phpmailerautoload.php');
require_once($sciezka.'/phpmailer/class.phpmailer.php');
require_once($sciezka.'/phpmailer/class.smtp.php');
$mail = new PHPMailer();
$mail->IsHtml(true);
$mail->CharSet = "utf-8";
$mail->PluginDir = "./phpmailer/";
$mail->From = ''.$mailN.'';
$mail->FromName = ''.$nazwaN.'';
$mail->Host = ''.$hostN.'';
$mail->Mailer = "smtp";
$mail->Username = ''.$mailN.'';
$mail->Password = ''.$passN.'';
$mail->SMTPAuth = true;
## połączenia
# szyfrowane
      $mail->Port = 465;
      $mail->SMTPSecure = 'ssl';

# nieszyfrowane
      ##$mail->Port = 587;
###
$mail->SetLanguage('pl', $sciezka.'/phpmailer/language/phpmailer.lang-pl.php');
$mail->Subject = ''.$temat.'';
$mail->Body = ''.$tresc.'';
$mail->AddAddress($mailO, $nazwaO);# mail i dane do kogo
$mail->AddAttachment("razem.jpg", "opis obrazu1"); # załącznik
$mail->AddAttachment("psl.jpg", "opis obrazu2"); # załącznik
if($mail->Send())
{
    echo '<h2>Zgłoszenie zostało przyjęte.</h2>';
}
else
{
    echo '<h2>E-mail nie został‚ wysłany, przyczyna: '.'</h2>'. $mail->ErrorInfo;
}
$mail->ClearAddresses();
$mail->ClearAttachments();
}


function mailKonto1(){
    
      ## żródła => https://github.com/PHPMailer/PHPMailer
# nadawca wpisz dane swojego konta email
include('host_mail.php');
$nazwa = $_POST['nazwa'];
$temat = $_POST['temat'];
$trescx = $_POST['tresc'];
$odbiorca = $_POST['odbiorca'];

# mail
$temat = $temat;
$tresc = $trescx;

# odbiorca
$mailO = $odbiorca;
$nazwaO = $nazwa;

# sciezka do plików katalogu phpmailer - biblioteka
$sciezka = '.';

require_once($sciezka.'/phpmailer/phpmailerautoload.php');
require_once($sciezka.'/phpmailer/class.phpmailer.php');
require_once($sciezka.'/phpmailer/class.smtp.php');
$mail = new PHPMailer();
$mail->IsHtml(true);
$mail->CharSet = "utf-8";
$mail->PluginDir = "./phpmailer/";
$mail->From = ''.$mailN.'';
$mail->FromName = ''.$nazwaN.'';
$mail->Host = ''.$hostN.'';
$mail->Mailer = "smtp";
$mail->Username = ''.$mailN.'';
$mail->Password = ''.$passN.'';
$mail->SMTPAuth = true;
## połączenia
# szyfrowane
      $mail->Port = 465;
      $mail->SMTPSecure = 'ssl';

# nieszyfrowane
      ##$mail->Port = 587;
###
$mail->SetLanguage('pl', $sciezka.'/phpmailer/language/phpmailer.lang-pl.php');
$mail->Subject = ''.$temat.'';
$mail->Body = ''.$tresc.'';
$mail->AddAddress($mailO, $nazwaO);# mail i dane do kogo
if(isset($_GET['a1'])){
$mail->AddAttachment("swiateczne/kartka1.jpg", "Wesołych Świąt"); # załącznik
};

if(isset($_GET['a2'])){
      $mail->AddAttachment("swiateczne/kartka2.jpg", "Wesołych Świąt"); # załącznik
};

if(isset($_GET['a3'])){
            $mail->AddAttachment("swiateczne/kartka3.jpg", "Wesołych Świąt"); # załącznik
};

            if(isset($_GET['a4'])){
                  $mail->AddAttachment("swiateczne/kartka4.jpg", "Wesołych Świąt"); # załącznik
            };


            
            if(isset($_GET['b1'])){
                  $mail->AddAttachment("sylwestrowe/kartka1.jpg", "Wesołego sylwestra"); # załącznik
            };

            if(isset($_GET['b2'])){
                  $mail->AddAttachment("sylwestrowe/kartka2.jpg", "Wesołego sylwestra"); # załącznik
            };
            if(isset($_GET['b3'])){
                  $mail->AddAttachment("sylwestrowe/kartka3.gif", "Wesołego sylwestra"); # załącznik
            };
            if(isset($_GET['b4'])){
                  $mail->AddAttachment("sylwestrowe/kartka4.jpg", "Wesołego sylwestra"); # załącznik
            };

            if(isset($_GET['c1'])){
                  $mail->AddAttachment("urodzinowe/kartka1.jpg", "Wszystkiego najlepszego"); # załącznik
            };

            if(isset($_GET['c2'])){
                  $mail->AddAttachment("urodzinowe/kartka2.jpg", "Wszystkiego najlepszego"); # załącznik
            };

            if(isset($_GET['c3'])){
                  $mail->AddAttachment("urodzinowe/kartka3.jpg", "Wszystkiego najlepszego"); # załącznik
            };

            if(isset($_GET['c4'])){
                  $mail->AddAttachment("urodzinowe/kartka4.gif", "Wszystkiego najlepszego"); # załącznik
            };


            if(isset($_GET['d1'])){
                  $mail->AddAttachment("wielkanocne/kartka1.jpg", "Wesołej Wielkanocy"); # załącznik
            };

            if(isset($_GET['d2'])){
                  $mail->AddAttachment("wielkanocne/kartka2.png", "Wesołej Wielkanocy"); # załącznik
            };

            if(isset($_GET['d3'])){
                  $mail->AddAttachment("wielkanocne/kartka3.gif", "Wesołej Wielkanocy"); # załącznik
            };

            if(isset($_GET['d4'])){
                  $mail->AddAttachment("wielkanocne/kartka4.jpg", "Wesołej Wielkanocy"); # załącznik
            };




if($mail->Send())
{
    echo '<h2>Email z kartką został wysłany.</h2>';
}
else
{
    echo '<h2>E-mail nie został‚ wysłany, przyczyna: '.'</h2>'. $mail->ErrorInfo;
}
$mail->ClearAddresses();
$mail->ClearAttachments();
}
 
?>