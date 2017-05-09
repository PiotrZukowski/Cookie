<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8" />
</head>
<body>
  <?php
  $connect = mysqli_connect("localhost","root","","korporacja");
  if ($connect)
  {
  $baza = mysqli_select_db($connect, "korporacja");
    if ($baza)
    {
      $wynik = mysqli_query($connect, "SELECT * FROM pracownicy");
        if ($wynik)
        {
          $ile= mysqli_num_rows ($wynik);
          if ($ile>0)
           {
            for ($i=1;$i<=$ile;$i++)
            {
              $wiersz= mysqli_fetch_assoc($wynik);
              $imie = $wiersz["imie"];
              $nazwisko = $wiersz["nazwisko"];
              print $imie." ".$nazwisko."<br  />";
            }
          }else echo "Zapytanie nie zwróciło rekordów";
        }else echo "BŁĄD zapytania";



        $wynik = mysqli_query($connect,"SELECT * FROM pracownicy");
          if ($wynik)
          {
              while($wiersz = mysqli_fetch_assoc($wynik))
              {
                  $imie = $wiersz["imie"];
                  $nazwisko = $wiersz["nazwisko"];
                  print $imie." ".$nazwisko."<br />";
                  $test =1;
              }
              if($test==0)echo"  Zapytanie nie zwróciło rekordów";


          }else echo "BŁĄD zapytania";



    }
    else echo "brak połaczenia z wybraną bazą";
  mysqli_close($connect);

  }
  else
  {
    echo "brak połączenia z zadanym, hostem, spróbuj jeszcze raz";
  }
  ?>
</body>

</html>
