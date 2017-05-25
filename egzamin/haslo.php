<?php
$logowanie = 'true';

if(isset($_POST['haslo']))
{
  $haslo= $_POST['haslo'];
  if(sha1($haslo)!='56e8f4c181832b65406e2aa084641a65867d79f5'){$logowanie = 'false';}
  else header('location:podzielna.html');
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Menu z liczvbam</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div id="kontener">
      <header>
          <a href="index.html"><img src="banner.png" alt="banner.png" /></a>
      </header>
      <nav id="nawigacja">
        <p>
          MENU
        </p>
        <a class="nav_a" href="index.html">Opis</a>
        <a class="nav_a" href="haslo.php">Podzielność przez 8</a>
        <a class="nav_a" href="suma.html">Suma liczb z zakresu</a>

      </nav>
      <article id="panel">
        <?php if($logowanie == 'false') echo "błąd logowania";  ?>
        <form action="haslo.php" method="post">
          Wprowadź hasło : <input type="password" name="haslo" />
          <input type="submit" value="Wyślij" />
        </form>


      </article>
    </div>

  </body>
</html>
