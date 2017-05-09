<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8" />
</head>
<body>
  <?php
$data_base = new mysqli("localhost","root","","korporacja");
  if($data_base -> connect_errno)
    {
      echo "Błąd połączenia z serwerem bazodanowym:".$data_base -> connect_error;
    }
  else
    {
      $wynik = $data_base -> query("SELECT * FROM pracownicy");
      $ile = $wynik -> num_rows;
      for($i=1;$i<=$ile;$i++)
        {
            $wiersz = $wynik -> fetch_assoc();
            $id = $wiersz["id_pracownika"];
            $imie = $wiersz["imie"];
            $nazwisko = $wiersz["nazwisko"];
            echo $id.".".$imie. " ".$nazwisko."<br  />";
        }
        $data_base -> close();
    }
  ?>
</body>

</html>
