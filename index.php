<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8" />
</head>
<body>
  <?
$connect = mysql_connect("localhost","root","","korporacja","3306");
if ($connect)
{
$baza = mysql_select_db("korporacja";)  # code...
  if ($baza)
  {
    $wynik = mysqli_query("SELECT * FROM pracownicy");
      if ($wynik)
      {
        $ile=mysql_num_rows($wynik);
        if ($ile>0)
         {
          for ($i=1,$i<=$ile,$i++)
        }else echo "Zapytanie nie zwróciło rekordów";
      }else echo "BŁĄD zapytania";
  }
  else echo "brak połaczenia z wybraną bazą";


}
else
{
  echo "brak połączenia z zadanym, hostem, spróbuj jeszcze raz";
}

  ?>
</body>

</html>
