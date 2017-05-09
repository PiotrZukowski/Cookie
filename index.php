<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8" />
</head>
<body>
  <?php
$connect = mysql_connect("localhost","root","","korporacja");
if ($connect)
{
$baza = mysql_select_db("korporacja");
  if ($baza)
  {
    $wynik = mysql_query("SELECT * FROM pracownicy");
      if ($wynik)
      {
        $ile=mysql_num_rows($wynik);
        if ($ile>0)
         {
          for ($i=1;$i<=$ile;$i++)
          {
            $wiersz= mysql_fetch_assoc($wynik);
            $imie = $wiersz["imie"];
            $nazwisko = $wiersz["nazwisko"];
            print $imie." ".$nazwisko."<br  />";
          }
        }else echo "Zapytanie nie zwróciło rekordów";
      }else echo "BŁĄD zapytania";



      $wynik = mysql_query("SELECT * FROM pracownicy");
        if ($wynik)
        {
            while($wiersz = mysql_fetch_assoc($wynik))
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
mysql_close($connect);

}
else
{
  echo "brak połączenia z zadanym, hostem, spróbuj jeszcze raz";
}

  ?>
</body>

</html>
