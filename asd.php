<!Doctype html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
$nr=28;
if(isset($_COOKIE["nr"]))
{echo $_COOKIE["nr"];}
else
 {
setcookie ("nr",$nr, time()+300);
}


?>

</body>

</html>
